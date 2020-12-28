<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BookTitle;

class BookController extends Controller
{
    public function list()
    {
        $books = Book::with('bookTitle')->get();
        return view('admin.pages.book.list', ['books' => $books]);
    }

    public function search(Request $request)
    {
        $type = $request->get('type');
        $keyword = $request->get('text');

        $books = Book::when(
            $type === 'id',
            function($query) use ($type, $keyword) {
                $query->where($type, $keyword);
            },
            function($query) use ($keyword) {
                $query->join('book_titles', 'books.book_title_id', '=', 'book_titles.id')
                    ->where('book_titles.name', 'like', '%'.$keyword.'%');
            }
        )->with('bookTitle')->select('books.*')->get();
        return view('admin.pages.book.list', ['books' => $books]);
    }

    public function detail($id)
    {
        $book = Book::where('id', $id)->first();

        return view('admin.pages.book.detail', ['book' => $book]);
    }

    public function add()
    {
        return view('admin.pages.book.add');
    }
}
