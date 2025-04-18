<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => fake()->sentence(1, true),
            'date' =>  now(),
            'prix' => fake()->randomFloat(0, 1000, 50000),
            'statut' => fake()->word(),
            'description' => fake()->paragraph(30, true),
            // Image factice (chemin simulé)
            'image_path' => 'storage/activites/',
            // 'image_path' => fake()->imageUrl($width = 640, $height = 480),

            // Vidéo factice (chemin vers une vidéo générique)
            'video_path' => 'storage/activites/video'
        ];
    }
}
