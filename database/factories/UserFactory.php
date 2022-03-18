<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('qwe'), // password
            'role_id' => mt_rand(1, 3),
            'about' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'fullname' => $this->faker->name(),
            'company' => $this->faker->company(),
            'job' => $this->faker->jobTitle(),
            'country' => $this->faker->country() ,
            'address' => $this->faker->address(),
            'tweet' => $this->faker->word(),
            'fb' => $this->faker->word(),
            'ig' => $this->faker->word(),
            'in' => $this->faker->word(),
            'contact' => $this->faker->phoneNumber(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
