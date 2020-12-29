<?php

namespace App\Http\Controllers;

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
            function($query) use ($type, $keyword) {
                $query->where($type, $keyword);
            },
            function($query) use ($keyword) {
                $query->join('book_titles', 'books.book_title_id', '=', 'book_titles.id')
                    ->where('book_titles.name', 'like', '%' . $keyword . '%');
            }
        )->with('bookTitle')->select('books.*')->get();

        return view('admin.pages.book.list', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::findOrFail($id)->delete();

        return redirect()
            ->route('books.index')
            ->with('status', __('manage_book.delete_success'));
    }

}
