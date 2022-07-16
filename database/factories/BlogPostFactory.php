<?php

namespace Database\Factories;

Use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return  [
            'title' => $this->faker->sentence(), // to generate fake sentence
            'body' => $this->faker->paragraph(30), // to generate 30 fake paragraphs
            'user_id' => User::factory() // to generate a user from factory and extract id
        ];
    }
}
