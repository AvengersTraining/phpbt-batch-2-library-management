<?php

namespace Database\Seeders;

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
        BookTitle::factory()
            ->count(10)
            ->has(Book::factory()->count(3))
            ->create();
    }
}
