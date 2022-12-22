<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Building::factory()
            ->create([
                'type' => 'condo',
                'active' => true,
                'car_parking' => true,
                'moto_parking' => false,
            ]);

        \App\Models\Building::factory()
            ->create([
                'type' => 'landed-house',
                'active' => true,
                'car_parking' => false,
                'moto_parking' => true,
            ]);

        \App\Models\Building::factory()
            ->create([
                'active' => false,
                'car_parking' => true,
                'moto_parking' => true,
            ]);
    }
}
