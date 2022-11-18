<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(100),
            'description' => $this->faker->text,
            'body' => $this->faker->text(500),
            'image_url' => $this->faker->imageUrl,
            'tags' => ['php', 'laravel'],
            'view_count' => 10,
            'comment_count' => 5
        ];
    }
}
