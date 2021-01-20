<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReturnRequest;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
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

    public function return() {
        return view('admin.pages.order.return');
    }

    public function update(ReturnRequest $request)
    {
        $orderId = $request->get('order_id');
        $bookId = $request->get('book_id');

        Order::whereIn('id', $orderId)->update(['status' => Order::RETURN]);
        Book::whereIn('id', $bookId)->update(['is_available' => Book::AVAILABLE]);

        return redirect()
            ->route('admin.orders.return')
            ->with('success', __('manage_borrowing.return_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
