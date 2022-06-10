<?php

namespace App\Services;

use App\Models\Vehicle;

class VehicleService
{
    public function all()
    {
        return Vehicle::get();
    }

    public function getOne($vehicle_id)
    {
        return Vehicle::findOrFail($vehicle_id);
    }

    /**
     * update vehicle's data
     *
     * @param   [array]  $request     [body of request]
     * @param   [integer]  $vehicle_id  [id of the vehicle to be updated]
     *
     * @return  [boolean]
     */
    public function update($request, $vehicle_id)
    {
        $vehicle = Vehicle::findOrFail($vehicle_id);
        return $vehicle->update($request);
    }
}
