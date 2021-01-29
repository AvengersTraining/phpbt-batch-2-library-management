<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReturnRequest;
use App\Models\BookTitle;
use App\Models\Genre;
use App\Models\User;
use DateTime;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderController extends Controller
{
    private function queryDate(Builder $query, $dateString, $column)
    {
        $dates = explode(' - ', $dateString);

        $formatted = collect($dates)->map(function ($date) {
            $myDateTime = DateTime::createFromFormat('d-m-Y', $date);
            if ($myDateTime) {
                return $myDateTime->format('Y-m-d');
            }

            return null;
        })->toArray();

        $query->whereDate($column, '>=', $formatted[0])
            ->whereDate($column, '<=', $formatted[1]);
    }

    private function columnContains(Builder $query, $column, $value, $boolean = 'and')
    {
        $query->where(DB::raw("LOWER($column)"), 'LIKE', '%' . strtolower($value) . '%', $boolean);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keyword = request('keyword', '');
        $filtered = Order::query();

        // filter by keyword
        $filtered->join('books', 'books.id', '=', 'user_book.book_id')
            ->join('book_titles', 'book_titles.id', '=', 'books.book_title_id');
        $this->columnContains($filtered, 'book_titles.name', $keyword);

        $filtered
            // filter by genre
            ->when(!in_array(request('genre'), ['*', null]), function (Builder $query) {
                $query->join('book_title_genre', 'book_title_genre.book_title_id', '=', 'book_titles.id')
                    ->join('genres', 'book_title_genre.genre_id', '=', 'genres.id')
                    ->where('genres.name', request('genre'));
            })
            // filter by user's name, phone, email
            ->when(request('user', false), function (Builder $query) {
                $query->join('users', 'users.id', '=', 'user_book.user_id')
                    ->where(function ($q) {
                        $q->where('phone', request('user'))
                            ->orWhere('email', request('user'));
                        $this->columnContains($q, 'users.first_name', request('user'), 'or');
                        $this->columnContains($q, 'users.last_name', request('user'), 'or');
                    });
            })
            // filter by status
            ->when(!in_array(request('status'), ['*', null]), function (Builder $query) {
                $query->where('status', (int)request('status'));
            })
            // filter by dates
            ->when(request('start_dates', false), function (Builder $query) {
                $this->queryDate($query, request('start_dates'), 'start_date');
            })->when(request('end_dates', false), function (Builder $query) {
                $this->queryDate($query, request('end_dates'), 'end_date');
            })->when(request('return_dates', false), function (Builder $query) {
                $this->queryDate($query, request('return_dates'), 'return_date');
            })->orderByDesc('start_date');

        $orders = $filtered->with(['user', 'book.bookTitle', 'createdAdmin', 'returnedAdmin'])->paginate(Order::PAGINATE);

        $genres = Genre::pluck('name');
        $statuses = [
            Order::BORROWED => __('manage_borrowing.borrowed'),
            Order::RETURNED => __('manage_borrowing.returned'),
            Order::LOST => __('manage_borrowing.lost'),
        ];

        $customMessage = ['type' => 'danger', 'content' => __('manage_borrowing.msg_not_found')];
        if ($filtered->count() > 0) {
            $customMessage['type'] = 'success';
            $customMessage['content'] = $filtered->count() . __('manage_borrowing.msg_found');
        }

        return view('admin.pages.order.index', compact('statuses', 'orders', 'genres', 'customMessage'));
    }

    public function show($bookId)
    {
        $order = Order::whereByAttribute([
            'book_id' => $bookId,
            'status' => Order::BORROWED,
        ])
            ->with([
                'book.bookTitle',
                'user',
            ])
            ->firstOrFail();

        return view('admin.pages.order.order_detail', ['order' => $order]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.order.borrow');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
        $bookIds = $request->get('book_id');
        $returnDates = $request->get('date');
        $order = [];

        foreach ($bookIds as $key => $value) {
            $order[] = [
                'user_id' => $request->get('user_detail'),
                'book_id' => $value,
                'start_date' => date('Y-m-d'),
                'end_date' => $returnDates[$key],
                'status' => Order::BORROWED,
                'created_by_admin_id' => Auth::id(),
            ];
        }

        Order::insert($order);
        Book::whereIn('id', $bookIds)->update(['is_available' => Book::UNAVAILABLE]);

        return redirect()
            ->route('admin.orders.create')
            ->with('success', __('manage_borrowing.order_success'));
    }

    public function return()
    {
        return view('admin.pages.order .return');
    }

    public function update(ReturnRequest $request)
    {
        $orderId = $request->get('order_id');
        $bookId = $request->get('book_id');

        Order::whereIn('id', $orderId)->update(['status' => Order::RETURNED]);
        Book::whereIn('id', $bookId)->update(['is_available' => Book::AVAILABLE]);

        return redirect()
            ->route('admin.orders.return')
            ->with('success', __('manage_borrowing.return_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showHistory(Request $request)
    {
        $filter = Order::query();
        $filter->where('user_id', Auth::id());

        if ($request->get('text')) {
            $filter->leftJoin('books', 'user_book.book_id', '=', 'books.id')
                ->leftJoin('book_titles', 'books.book_title_id', '=', 'book_titles.id')
                ->where('book_titles.name', 'like', '%' . $request->get('text') . '%')
                ->orWhere('book_titles.author', 'like', '%' . $request->get('text') . '%');
        }
        if (! in_array($request->get('status'), ['*', null])) {
            if ($request->get('status') == Order::OUT_DATE) {
                $filter->where('status', Order::BORROWED)
                    ->where('end_date', '<', Carbon::now()->format('Y-m-d h:m:s'));
            } else {
                $filter->where('status', $request->get('status'));
            }
        }
        if ($request->get('start_date')) {
            $date = date('Y-m-d', strtotime($request->get('start_date')));
            $filter->where('start_date', 'like' , $date . '%');
        }
        if ($request->get('end_date')) {
            $date = date('Y-m-d', strtotime($request->get('end_date')));
            $filter->where('end_date', 'like' , $date . '%');
        }
        if ($request->get('return_date')) {
            $date = date('Y-m-d', strtotime($request->get('return_date')));
            $filter->where('return_date', 'like' , $date . '%');
        }

        $orders = $filter->orderBy('status')
            ->with('book.bookTitle')
            ->paginate(Order::PAGINATE);

        return view('user.pages.account.history', ['orders' => $orders]);
    }
}
