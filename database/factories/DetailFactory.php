<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'seller' => fake()->name,
            'doc_type' => fake()->word,
            'location' => fake()->city,
            'secondary_damage' => fake()->sentence(3),
            'est_retail_value' => fake()->randomFloat(2, 1000, 50000),
            'est_repair_value' => fake()->randomFloat(2, 500, 10000),
            'transmission' => fake()->word,
            'drive' => fake()->word,
            'car_keys' => fake()->word,
            'fuel' => fake()->word,
            'notes' => fake()->sentence(5),
        ];
    }
}
