<?php

namespace App\Http\Controllers;

use App\Traits\HttpResponse;
use App\Services\VehicleService;

class VehicleController extends Controller
{
    use HttpResponse;
    public function all(VehicleService $vehicleService)
    {
        $vehicles = $vehicleService->all();
        return $this->sendSuccessResponse('Vehicles Fetched', $vehicles, 200);
    }

    public function fetchOne(VehicleService $vehicleService, $vehicle_id)
    {
        $vehicle_data = $vehicleService->getOne($vehicle_id);
        return $this->sendSuccessResponse('Vehicle Data Fetched', $vehicle_data, 200);
    }
}
