<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookTitleRequest;
use App\Models\Book;
use App\Models\BookTitle;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

        $bookTitles = $filtered->with(['genres', 'books'])->paginate(BookTitle::PAGINATE);

        $genres = Genre::pluck('name');

        return view('admin.book_titles.index', compact('bookTitles', 'genres'));
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

        $fileName = uniqid() . $request->file('thumbnail')->hashName();
        $filePath = config('storage.book_titles') . '/' . $fileName;

        Storage::disk('public')->put($filePath, file_get_contents($request->file('thumbnail')));
        $data['thumbnail'] = $filePath;

        $bookTitle = BookTitle::create($data);
        $bookTitle->genres()->attach($request->genres);

        $books = array_fill(0, $request->books_amount, ['is_available' => Book::AVAILABLE]);
        $bookTitle->books()->createMany($books);

        return redirect()
            ->route('admin.book_titles.index')
            ->with('success', __('book_titles.create_success'));
    }
}
