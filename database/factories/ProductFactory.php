<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartItem>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(),
            'description' => $this->faker->paragraph(2),
            'price' => $this->faker->numberBetween(1, 100),
            'quantity' => $this->faker->numberBetween(1, 5),
            'image' => $this->faker->imageUrl(640, 480),
        ];
    }
}
