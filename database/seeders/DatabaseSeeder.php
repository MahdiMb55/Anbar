<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'username' => 'madme',
            'password'=>bcrypt('1234')
        ]);

        $this->call([
            AnbarSeeder::class,
            KalaSeeder::class,
            DarkhastSeeder::class,
            DarkhastRowSeeder::class,
        ]);


        // \App\Models\User::factory(10)->create();


    }
}
