<?php

namespace Database\Seeders;

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
        $b1 = \App\Models\Building::factory()
            ->create([
                'type' => 'condo',
                'active' => true,
                'car_parking' => true,
                'moto_parking' => false,
                'renovated_at' => now()->subMonths(9)
            ]);

        $b2 = \App\Models\Building::factory()
            ->create([
                'type' => 'landed-house',
                'active' => true,
                'car_parking' => false,
                'moto_parking' => true,
                'renovated_at' => now()->subMonths(9)
            ]);

        $b3 = \App\Models\Building::factory()
            ->create([
                'active' => false,
                'car_parking' => true,
                'moto_parking' => true,
                'renovated_at' => now()->subMonths(9)
            ]);

        $c1 = \App\Models\Category::factory()
            ->create([
                'building_id' => $b1->id,
            ]);

        $h = \App\Models\Room::factory()
            ->create([
                'category_id' => $c1->id,
                'active' => 1,
                'door' => 1,
                'floor' => 2,
                'renovated_at' => now()->subMonths(6)
            ]);
    }
}
