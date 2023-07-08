<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Book::class;

    public function definition(): array
    {
        return [
            //
            'name' => fake()->sentence(),
            'author' => fake()->name(),
            'isbn' => fake()->unique()->isbn13(),
            'publisher' => fake()->name(), // password
            'available' => fake()->numberBetween(1, 10)
        ];
    }
}
