<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Acara>
 */
class AcaraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $c = $this->faker->unique()->numberBetween(1, 10);
        return [
            'name' => $this->faker->sentence(),
            'executing' => $this->faker->dateTime(),
            'organizer' => $this->faker->name(),
            'status_id' => mt_rand(1, 4),
            'responsible_id' => mt_rand(1, 50),
            'aprovedby_id' => mt_rand(1, 50),
            'staff_id' => mt_rand(1, 50),
            'news_id' => $c,
            'comitte_id' => $c,
            'participant_id' => $c,
            'place' => $this->faker->word(),
        ];
    }
}
