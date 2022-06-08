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
}
