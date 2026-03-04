<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WatchImage>
 */
class WatchImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'watch_id' => Watch::inRandomOrder()->value('id') ?? 1,
            'image_url' => "https://picsum.photos/200/300?random=" . $this->faker->numberBetween(1, 1000),
                               
        ];
    }
}
