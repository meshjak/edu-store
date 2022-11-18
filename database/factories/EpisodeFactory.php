<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Episode>
 */
class EpisodeFactory extends Factory
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
            'type' => 'type',
            'body' => $this->faker->text(500),
            'image_url' => $this->faker->imageUrl,
            'video_url' => null,
            'tags' => ['php', 'laravel'],
            'price' => $this->faker->numberBetween(2_000_000, 10_000_000),
            'time' => $this->faker->time,
            'view_count' => 10,
            'comment_count' => 5,
        ];
    }
}
