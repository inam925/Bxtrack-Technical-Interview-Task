<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'edition' => $this->faker->numberBetween(1, 10),
            'no_of_pages' => $this->faker->numberBetween(100, 1000),
        ];
    }
}
