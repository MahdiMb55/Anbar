<?php

namespace Database\Seeders;

use App\Models\Anbar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anbar::factory()
            ->count(15)
            ->create();
    }
}
