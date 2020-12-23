<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use App\Models\BookTitle;
use App\Models\Book;

class BookTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::all()->each(function ($genre) {
            $createdBookTitles = BookTitle::factory()
                ->count(3)
                ->create();
            $genre->bookTitles()->attach($createdBookTitles);
        });
    }
}
