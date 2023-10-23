<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'purchase_price' => fake()->randomFloat(2, 5000, 50000),
            'make' => fake()->word,
            'model' => fake()->word,
            'year' => fake()->numberBetween(2000, 2023),
            'color' => fake()->safeColorName,
            'engine_type' => fake()->word,
            'vin' => fake()->unique()->regexify('[A-Z0-9]{17}'),
            'auction_name' => fake()->sentence(2),
            'sale_status' => fake()->randomElement(['Sold', 'Available']),
            'lot_number' => fake()->numberBetween(),
            'condition' => fake()->randomElement(['Excellent', 'Good', 'Fair', 'Poor']),
            'primary_damage' => fake()->sentence(3),
            'odometer' => fake()->numberBetween(1000, 100000),
            'date_of_sale' => fake()->date,
            'main_photo' => fake()->imageUrl(),
        ];
    }
}
