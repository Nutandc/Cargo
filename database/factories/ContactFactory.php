<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name(),
            'phone' => rand(60000000, 65999999),
            'message' => $this->faker->sentence($nbWords = rand(3, 10)),
            'created_at' => $this->faker->dateTimeBetween($startDate = '-3 months', $endDate = 'now'),
        ];
    }
}
