<?php

namespace App\Services;

use App\Models\Manufacturer;

class ManufacturerService
{
    public function all($vehicle_type = null)
    {
        $manufacturers = Manufacturer::query();
        if (!is_null($vehicle_type)) {
            $manufacturers->whereHas('vehicles', function ($q) use ($vehicle_type) {
                $q->where('vehicle_type_id', $vehicle_type);
            });
        }
        return $manufacturers->get();
    }

    public function one($manufacturer_id)
    {
        return Manufacturer::with('vehicle')->where('id', $manufacturer_id)->get();
    }
}
