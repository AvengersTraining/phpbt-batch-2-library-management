<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGenreRequest;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();

        return view('admin.genres.index', compact('genres'));
    }

    public function create()
    {
        return view('admin.genres.create');
    }

    public function store(StoreGenreRequest $request)
    {
        Genre::create($request->all());

        return redirect()
            ->route('admin.genres.index')
            ->with('success', __('genres.create_success'));
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();

        return back()->with('success', __('genres.delete_success') . $genre->id);
    }

    public function edit(Genre $genre)
    {
        return view('admin.genres.edit', compact('genre'));
    }

    public function update(StoreGenreRequest $request, Genre $genre)
    {
        $genre->update($request->only(['name', 'description']));

        return redirect()
            ->route('admin.genres.index')
            ->with('success', __('genres.update_success') . $genre->id);
    }
}
