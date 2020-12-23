<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\BookTitle;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'book_title_id' => BookTitle::pluck('id')->random(),
            'is_available' => $this->faker->randomElement(['0', '1']),
        ];
    }
}
