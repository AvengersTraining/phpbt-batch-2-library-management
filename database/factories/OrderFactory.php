<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Order;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use DateInterval;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $book = Book::inRandomOrder()->first();
        $releasedYear = Carbon::create($book->bookTitle->released_date)->year;
        $startDate = $this->faker->dateTimeBetween(($releasedYear - now()->year) . ' years');
        $startYear = (int)$startDate->format('Y');

        $endDate = clone $startDate;
        $endDate->add(new DateInterval('P6M'));

        $returned = $this->faker->boolean();
        $returnedDate = $returned ? $this->faker->dateTimeBetween(($startYear - now()->year) . ' years') : null;

        $adminIds = User::where('role_id', Role::ADMIN)->pluck('id');

        return [
            'user_id' => User::where('role_id', Role::NORMAL)
                ->whereNotNull('email_verified_at')
                ->pluck('id')->random(),
            'book_id' => $book->id,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'return_date' => $returnedDate,
            'status' => $returned ? Order::RETURNED : ($this->faker->boolean(80) ? Order::BORROWED : Order::LOST),
            'created_by_admin_id' => $adminIds->random(),
            'returned_by_admin_id' => $returned ? $adminIds->random() : null,
        ];
    }
}
