<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author_id' => fake()->randomNumber(),
            'category_id' => fake()->randomNumber(),
            'title' => fake()->sentence(),
            'slug' => fake()->slug(),
            'intro' => fake()->paragraph(),
            'body' => fake()->paragraph(),
        ];
    }
}
