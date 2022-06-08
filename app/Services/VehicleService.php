<?php

namespace App\Services;

use App\Models\Vehicle;

class VehicleService
{
    public function all()
    {
        return Vehicle::with('engineData')->simplePaginate(20);
    }
}
