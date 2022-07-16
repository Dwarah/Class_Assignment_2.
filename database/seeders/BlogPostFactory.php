<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogPostFactory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return  [
            'title' => $this->faker->sentence(), // to generate fake sentence
            'body' => $this->faker->paragraph(30), // to generate 30 fake paragraphs
            'user_id' => User::factory() // to generate a user from factory and extract id
        ];
    }
}
