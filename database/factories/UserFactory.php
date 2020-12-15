<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female'])[0];
        $genderInt = ($gender == 'm')?1:0;
        return [
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->e164PhoneNumber,
            'password' => bcrypt('secret'),//'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'first_name' => $this->faker->firstName($gender),
            'last_name' => $this->faker->lastName,
            'gender' => $genderInt,
            'address' => $this->faker->address,
            'email_verified' => $this->faker->randomElement(['0', '1']),
            'citizen_id' => $this->faker->unique()->randomDigit,
            'role_id' => $this->faker->randomElement(['3', '1', '2']),
            'remember_token' => Str::random(10),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
