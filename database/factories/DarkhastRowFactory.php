<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DarkhastRow>
 */
class DarkhastRowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kalaname' => fake()->jobTitle(),
            'count' => fake()->numberBetween(1,5),
            'description' => fake()->text(15),
            'darkhast_id' => fake()->numberBetween(1,5)
        ];
    }
}
