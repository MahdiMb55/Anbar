<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Darkhast>
 */
class DarkhastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'anbar_id' => fake()->numberBetween(1,5),
            'user_id' => fake()->numberBetween(1,5),
            'department' => fake()->randomElement(['مرکز نوآوری', 'رفاهی', 'توسعه', 'پشتیبانی', 'مالی'])
        ];

    }
}
