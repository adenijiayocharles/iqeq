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
        DB::table('vehicles')->insert(
            [
                [
                    'name' => 'Camry',
                    'manufacturer_id' => rand(1, 10),
                    'vehicle_type_id' => rand(1, 12),
                    'base_price' => 30000,
                    'top_speed' => 180,
                    'fuel_type' => 'diesel',
                    'maximum_seating' => 3,
                    'transmission_type' => 'automatic',
                    'number_of_doors' => 2,
                    'length' => 5.4,
                    'height' => 7.8,
                    'width' => 8.4,
                    'weight' => 6.7
                ],
                [
                    'name' => 'Avalon',
                    'manufacturer_id' => rand(1, 10),
                    'vehicle_type_id' => rand(1, 12),
                    'base_price' => 250000,
                    'top_speed' => 120,
                    'fuel_type' => 'diesel',
                    'maximum_seating' => 3,
                    'transmission_type' => 'manual',
                    'number_of_doors' => 4,
                    'length' => 4,
                    'height' => 8,
                    'width' => 4,
                    'weight' => 5
                ],
                [
                    'name' => 'Corolla',
                    'manufacturer_id' => rand(1, 10),
                    'vehicle_type_id' => rand(1, 12),
                    'base_price' => 10423,
                    'top_speed' => 140,
                    'fuel_type' => 'hybrid',
                    'maximum_seating' => 2,
                    'transmission_type' => 'manual',
                    'number_of_doors' => 4,
                    'length' => 5.4,
                    'height' => 7.8,
                    'width' => 8.4,
                    'weight' => 6.7
                ],
                [
                    'name' => 'Yaris',
                    'manufacturer_id' => rand(1, 10),
                    'vehicle_type_id' => rand(1, 12),
                    'base_price' => 33442,
                    'top_speed' => 332,
                    'fuel_type' => 'diesel',
                    'maximum_seating' => 3,
                    'transmission_type' => 'automatic',
                    'number_of_doors' => 4,
                    'length' => 3.4,
                    'height' => 3.4,
                    'width' => 1.4,
                    'weight' => 4.7
                ],
                [
                    'name' => 'Sienna',
                    'manufacturer_id' => rand(1, 10),
                    'vehicle_type_id' => rand(1, 12),
                    'base_price' => 64357,
                    'top_speed' => 124,
                    'fuel_type' => 'electric',
                    'maximum_seating' => 6,
                    'transmission_type' => 'automatic',
                    'number_of_doors' => 4,
                    'length' => 10.8,
                    'height' => 8.5,
                    'width' => 9.4,
                    'weight' => 9.9
                ],
                [
                    'name' => 'Highlander',
                    'manufacturer_id' => rand(1, 10),
                    'vehicle_type_id' => rand(1, 12),
                    'base_price' => 890000,
                    'top_speed' => 120,
                    'fuel_type' => 'hybrid',
                    'maximum_seating' => 3,
                    'transmission_type' => 'automatic',
                    'number_of_doors' => 5,
                    'length' => 3.8,
                    'height' => 8.5,
                    'width' => 9.4,
                    'weight' => 100
                ],
                [
                    'name' => 'E-class',
                    'manufacturer_id' => rand(1, 10),
                    'vehicle_type_id' => rand(1, 12),
                    'base_price' => 40000,
                    'top_speed' => 560,
                    'fuel_type' => 'petrol',
                    'maximum_seating' => 3,
                    'transmission_type' => 'manual',
                    'number_of_doors' => 4,
                    'length' => 3.8,
                    'height' => 8.5,
                    'width' => 9.4,
                    'weight' => 100
                ]
            ]
        );
    }
}
