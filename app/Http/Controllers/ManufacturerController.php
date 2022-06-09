<?php

namespace App\Http\Controllers;

use App\Http\Resources\ManufacturerCollection;
use App\Traits\HttpResponse;
use App\Services\ManufacturerService;

class ManufacturerController extends Controller
{
    use HttpResponse;
    public function all(ManufacturerService $manufacturerService, $vehicle_type_id = null)
    {
        try {
            $manufacturers = $manufacturerService->all($vehicle_type_id);

            if ($manufacturers->count()) {
                return $this->sendSuccessResponse("Manufacturers found", new ManufacturerCollection($manufacturers), 200);
            } else {
                return $this->sendSuccessResponse("Manufacturers not found", $manufacturers, 404);
            }
        } catch (Exception $e) {
            return $this->sendErrorResponse($e->getMessage(), '', 503);
        }
    }
}
