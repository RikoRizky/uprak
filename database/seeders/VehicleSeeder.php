<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('vehicles')->insert([
            [
                'admin_id' => 1,
                'category' => 'Mobil',
                'brand' => 'Toyota',
                'type' => 'Fortuner',
                'number' => 'B1234XYZ',
                'cost_per_hour' => 5000,
                'time_start' => '08:00',
                'time_end' => '09:00',
                'total_price' => '10000',

            ],
            [
                'admin_id' => 2,
                'category' => 'Mobil',
                'brand' => 'Honda',
                'type' => 'Civic',
                'number' => 'B5678ABC',
                'cost_per_hour' => 5000,
                'time_start' => '09:00',
                'time_end' => '10:00',
                'total_price' => '10000',
            ],
        ]);
    }
}
