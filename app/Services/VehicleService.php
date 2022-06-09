<?php

namespace App\Services;

use App\Models\Vehicle;

class VehicleService
{
    public function all()
    {
        return Vehicle::with('engineData')->simplePaginate(20);
    }

    public function getOne($vehicle_id)
    {
        return Vehicle::with('engineData')->findOrFail($vehicle_id);
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
        $vehicle = Vehicle::with('engineData')->findOrFail($vehicle_id);
        return $vehicle->update($request);
    }

    /**
     * update vehicle's engine data
     *
     * @param   [array]  $request     [body of request]
     * @param   [integer]  $vehicle_id  [id of the vehicle to be updated]
     *
     * @return  [boolean]
     */
    public function updateEngineData($request, $vehicle_id)
    {
        $vehicle = Vehicle::findOrFail($vehicle_id);
        return $vehicle->engineData->update($request);
    }
}
