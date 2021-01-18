<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddBookRequest;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type = $request->get('type');
        $keyword = $request->get('text');

        $books = Book::when(
            $type === 'id',
            function ($query) use ($type, $keyword) {
                $query->where($type, $keyword);
            },
            function ($query) use ($keyword) {
                $query->join('book_titles', 'books.book_title_id', '=', 'book_titles.id')
                    ->where('book_titles.name', 'like', '%' . $keyword . '%');
            }
        )->with('bookTitle')->select('books.*')->paginate(Book::PAGINATE);

        return view('admin.pages.book.list', ['books' => $books]);
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);

        if (!$book->is_available) {
            return response()->json(['is_active' => false]);
        }

        return view('admin.pages.order.book_detail', ['book' => $book]);
    }

    public function store(AddBookRequest $request)
    {
        $number = $request->get('number');
        $title_id = $request->get('title_id');

        $books = [];
        $now = now();

        for ($i = 0; $i < $number; ++$i) {
            $books[] = [
                'book_title_id' => $title_id,
                'is_available' => Book::AVAILABLE,
                'created_at' => $now,
            ];
        }

        Book::insert($books);

        return redirect()
            ->route('admin.books.index')
            ->with('success', __('manage_book.add_success'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::findOrFail($id)->delete();

        return redirect()
            ->route('admin.books.index')
            ->with('warning', __('manage_book.delete_success'));
    }

}
