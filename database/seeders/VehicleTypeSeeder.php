<?php

namespace Database\Seeders;

use App\Models\VehicleType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicle_types = [
            'sedan', 'coupe', 'hatch-back', 'sports-car', 'station wagon', 'convertible', 'roadster', 'supercar', 'cabriolet', 'sports-utility-vehicle', 'minivan', 'pickup-truck', 'electric'
        ];

        foreach ($vehicle_types as $type) {
            DB::table('vehicle_types')->insert(['name' => $type]);
        }
    }
}
