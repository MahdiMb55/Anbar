<?php

namespace Database\Seeders;

use App\Models\Kala;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kala::factory()
            ->count(15)
            ->create();
    }
}
