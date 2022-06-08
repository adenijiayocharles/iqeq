<?php

namespace App\Services;

use App\Models\Vehicle;

class VehicleService
{
    public function all()
    {
        return Vehicle::with('engineData')->simplePaginate(20);
    }

    public function getOne($vehicle_id) {
        return Vehicle::with('engineData')->where('id', $vehicle_id)->get();
    }
}
