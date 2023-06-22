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
            'anbar_id' => '1',
            'user_id' => '1',
            'department' => fake()->randomElement(['مرکز نوآوری', 'رفاهی', 'توسعه', 'پشتیبانی', 'مالی'])
        ];

    }
}
