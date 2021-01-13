<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookTitleRequest;
use App\Models\Book;
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

        $filtered = $filtered->with('genres')->paginate(BookTitle::PAGINATE);

        $bookTitles = $filtered->getCollection()->transform(function ($title) {
            $title->genres = $title->genres->pluck('name')->join(', ');
            $title->released_date = date("m/Y", strtotime($title->released_date));
            $title->available = $title->books()->where('is_available', Book::AVAILABLE)->count() . ' / ' . $title->books->count();
            return $title;
        });

        $links = $filtered->links();

        $genres = Genre::pluck('name');

        return view('admin.book_titles.index', compact('bookTitles', 'genres', 'links'));
    }

    public function destroy(BookTitle $bookTitle)
    {
        $bookTitle->genres()->detach();
        $bookTitle->books()->delete();
        $bookTitle->delete();

        return back()->with('success', __('book_titles.delete_success') . $bookTitle->id);
    }

    public function create()
    {
        $genres = Genre::all();

        return view('admin.book_titles.create', compact('genres'));
    }

    public function store(StoreBookTitleRequest $request)
    {
        $data = $request->only([
            'name',
            'author',
            'released_date',
            'description',
        ]);
        $request->file('thumbnail')->store('public');
        $data['thumbnail'] = asset('storage/' . $request->file('thumbnail')->hashName());

        $bookTitle = BookTitle::create($data);
        $bookTitle->genres()->attach($request->genres);

        $books = array_fill(0, $request->books_amount, ['is_available' => Book::AVAILABLE]);
        $bookTitle->books()->createMany($books);

        return redirect()
            ->route('admin.book_titles.index')
            ->with('success', __('book_titles.create_success'));
    }
}
