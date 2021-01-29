<?php

namespace App\Http\Controllers;

use App\Models\BookTitle;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $sortType = $request->sort_type === 'asc' ? 'asc' : 'desc';
        $sortBy = $request->sort_by;
        $filtered = BookTitle::query();

        if ($request->has('keywords')) {
            $filtered->where(function (Builder $query) use ($request) {
                $query->where(DB::raw('LOWER(name)'), 'LIKE', '%' . strtolower($request->keywords) . '%')
                    ->orWhere(DB::raw('LOWER(author)'), 'LIKE', '%' . strtolower($request->keywords) . '%');
            });
        }

        if ($request->has('genre') && $request->genre !== '*') {
            $filtered->whereHas('genres', function (Builder $query) use ($request) {
                $query->where('name', $request->genre);
            });
        }

        if ($sortBy === 'title') {
            $filtered->orderBy('name', $sortType);
        } else if ($sortBy === 'popularity') {
            $filtered->join('books', 'books.book_title_id', '=', 'book_titles.id')
                ->join('user_book', 'user_book.book_id', '=', 'books.id')
                ->groupBy('book_titles.id')
                ->select('book_titles.*', DB::raw('count(books.id) as `count`'))
                ->orderBy('count', $sortType);
        } else {
            $filtered->orderBy('released_date', $sortType);
        }

        $bookTitles = $filtered->with(['genres', 'books.orders'])->paginate(9);

        $genres = Genre::pluck('name');

        return view('user.pages.home', compact('bookTitles', 'genres'));
    }
}
