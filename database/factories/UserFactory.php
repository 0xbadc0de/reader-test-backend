<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        return [
            'name' => $this->faker->name,
            'family' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'username' => $this->faker->unique()->userName,
            'dob_day' => $this->faker->dayOfMonth,
            'dob_month' => $this->faker->month,
            'dob_year' => $this->faker->year,
            'email_verified_at' => now(),
            'password' => Hash::make('123321'), // password
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            UserRole::create([
                'user_id' => $user->id,
                'role_id' => $this->faker->numberBetween(1, 2)
            ]);
        });
    }
}
