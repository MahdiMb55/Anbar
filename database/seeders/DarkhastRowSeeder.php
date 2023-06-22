<?php

namespace Database\Seeders;

use App\Models\Darkhast;
use App\Models\DarkhastRow;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DarkhastRowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DarkhastRow::factory()
            ->count(6)
            ->create();
    }
}
