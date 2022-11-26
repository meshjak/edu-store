<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'parent_id' => null,
            'saved_by' => User::factory(),
            'path' => '/images/',
            'filename' => 'image_1',
            'format' => 'png',
            'size' => '1024',
            'resolution' => '480',
        ];
    }
}
