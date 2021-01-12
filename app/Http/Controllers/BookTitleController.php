<?php

namespace App\Http\Controllers;

use App\Models\BookTitle;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookTitleController extends Controller
{
    public function index(Request $request)
    {
        $filtered = BookTitle::query();

        if ($request->has('name')) {
            $filtered->where(DB::raw('LOWER(name)'), 'LIKE', '%' . strtolower($request->name) . '%');
        }

        if ($request->has('author')) {
            $filtered->where(DB::raw('LOWER(author)'), 'LIKE', '%' . strtolower($request->author) . '%');
        }

        if ($request->has('genre') && $request->genre !== '*') {
            $filtered->whereHas('genres', function (Builder $query) use ($request) {
                $query->where('name', $request->genre);
            });
        }

        $bookTitles = $filtered->with('genres')->paginate(BookTitle::PAGINATE);
        $genres = Genre::pluck('name');

        return view('admin.book_titles.index', compact('bookTitles', 'genres'));
    }
}
