<?php

namespace Database\Seeders;

use App\Models\Darkhast;
use App\Models\DarkhastRow;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DarkhastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Darkhast::factory()
            ->count(10)
            ->create();
    }
}
