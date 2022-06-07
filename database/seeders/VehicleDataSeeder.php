<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            'name' => 'Vehicle Name',
            'manufacturer_id' => 4,
            'vehicle_type_id' => rand(1, 12),
            'base_price' => 250000,
            'top_speed' => 453,
            'fuel_type' => 'petrol',
            'maximum_seating' => 5,
            'transmission_type' => 'manual',
            'number_of_doors' => 4,
            'length' => 5.4,
            'height' => 7.8,
            'width' => 8.4,
            'weight' => 6.7
        ]);
    }
}
