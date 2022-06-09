<?php

namespace App\Http\Controllers;

use Exception;
use App\Traits\HttpResponse;
use App\Services\VehicleService;

class VehicleController extends Controller
{
    use HttpResponse;
    public function all(VehicleService $vehicleService)
    {
        try {
            $vehicles = $vehicleService->all();
            return $this->sendSuccessResponse('Vehicles Fetched', $vehicles, 200);
        } catch (Exception $e) {
            return $this->sendErrorResponse($e->getMessage(), '', 404);
        }
    }

    public function fetchOne(VehicleService $vehicleService, $vehicle_id)
    {
        try {
            $vehicle_data = $vehicleService->getOne($vehicle_id);
            return $this->sendSuccessResponse('Vehicle Data Fetched', $vehicle_data, 200);
        } catch (Exception $e) {
            return $this->sendErrorResponse($e->getMessage(), '', 404);
        }
    }
}
