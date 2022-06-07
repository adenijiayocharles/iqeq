<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EngineDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('engine_data')->insert([
            [
                'vehicle_id' => rand(1, 5),
                'power' => 3,
                'power_per_litre' => 3,
                'number_of_cylinders' => 4,
                'number_of_valves' => 5,
                'valvetrain' => 5,
                'engine_aspiration' => 4,
                'fuel_system' => '333',
                'piston_stroke' => 3,
                'cylinder_bore' => 3,
                'position_of_cylinders' => 3,
                'engine_location' => 3,
                'engine_displacement' => 3
            ],
            [
                'vehicle_id' => rand(1, 5),
                'power' => 3,
                'power_per_litre' => 3,
                'number_of_cylinders' => 4,
                'number_of_valves' => 5,
                'valvetrain' => 5,
                'engine_aspiration' => 4,
                'fuel_system' => '333',
                'piston_stroke' => 3,
                'cylinder_bore' => 3,
                'position_of_cylinders' => 3,
                'engine_location' => 3,
                'engine_displacement' => 3
            ],
            [
                'vehicle_id' => rand(1, 5),
                'power' => 3,
                'power_per_litre' => 3,
                'number_of_cylinders' => 4,
                'number_of_valves' => 5,
                'valvetrain' => 5,
                'engine_aspiration' => 4,
                'fuel_system' => '333',
                'piston_stroke' => 3,
                'cylinder_bore' => 3,
                'position_of_cylinders' => 3,
                'engine_location' => 3,
                'engine_displacement' => 3
            ],
            [
                'vehicle_id' => rand(1, 5),
                'power' => 3,
                'power_per_litre' => 3,
                'number_of_cylinders' => 4,
                'number_of_valves' => 5,
                'valvetrain' => 5,
                'engine_aspiration' => 4,
                'fuel_system' => '333',
                'piston_stroke' => 3,
                'cylinder_bore' => 3,
                'position_of_cylinders' => 3,
                'engine_location' => 3,
                'engine_displacement' => 3
            ],
            [
                'vehicle_id' => rand(1, 5),
                'power' => 3,
                'power_per_litre' => 3,
                'number_of_cylinders' => 4,
                'number_of_valves' => 5,
                'valvetrain' => 5,
                'engine_aspiration' => 4,
                'fuel_system' => '333',
                'piston_stroke' => 3,
                'cylinder_bore' => 3,
                'position_of_cylinders' => 3,
                'engine_location' => 3,
                'engine_displacement' => 3
            ]
        ]);
    }
}
