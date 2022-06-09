<?php

namespace App\Http\Controllers;

use Exception;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use App\Services\VehicleService;
use App\Http\Resources\VehicleResource;
use App\Http\Resources\VehicleCollection;

class VehicleController extends Controller
{
    use HttpResponse;

    public function all(VehicleService $vehicleService)
    {
        try {
            $vehicles = $vehicleService->all();
            return $this->sendSuccessResponse('Vehicles Fetched', new VehicleCollection($vehicles), 200);
        } catch (Exception $e) {
            return $this->sendErrorResponse($e->getMessage(), '', 404);
        }
    }

    public function fetchOne(VehicleService $vehicleService, $vehicle_id)
    {
        try {
            $vehicle_data = $vehicleService->getOne($vehicle_id);
            return $this->sendSuccessResponse('Vehicle Data Fetched', new VehicleResource($vehicle_data), 200);
        } catch (Exception $e) {
            return $this->sendErrorResponse($e->getMessage(), '', 404);
        }
    }

    public function update(VehicleService $vehicleService, Request $request, $vehicle_id)
    {
        try {
            $update = $vehicleService->update($request->all(), $vehicle_id);
            return $this->sendSuccessResponse('Vehicle Data Updated', $update, 201);
        } catch (Exception $e) {
            return $this->sendErrorResponse($e->getMessage(), '', 404);
        }
    }

    public function updateEngineData(VehicleService $vehicleService, Request $request, $vehicle_id)
    {
        try {
            $update = $vehicleService->updateEngineData($request->all(), $vehicle_id);
            return $this->sendSuccessResponse('Vehicle Engine Data Updated', $update, 201);
        } catch (Exception $e) {
            return $this->sendErrorResponse($e->getMessage(), '', 404);
        }
    }
}
