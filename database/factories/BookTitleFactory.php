<?php

namespace Database\Factories;

use App\Models\BookTitle;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookTitleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookTitle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(30),
            'author' => $this->faker->name,
            'description' => $this->faker->text,
            'thumbnail' => 'placeholder.webp',
            'released_date' => $this->faker->dateTime(),
        ];
    }
}
