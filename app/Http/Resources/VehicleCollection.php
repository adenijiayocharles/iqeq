<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class VehicleCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function ($vehicle) {
                return [
                    'id' => $vehicle->id,
                    'name' => $vehicle->name,
                    'manufacturer_id' => $vehicle->manufacturer->name,
                    'vehicle_type_id' => $vehicle->type->name,
                    'base_price' => $vehicle->base_price,
                    'top_speed' => $vehicle->top_speed,
                    'fuel_type' => $vehicle->top_speed,
                    'maximum_seating' => $vehicle->maximum_seating,
                    'transmission_type' => $vehicle->transmission_type,
                    'number_of_doors' => $vehicle->number_of_doors,
                    'length' => $vehicle->length,
                    'width' => $vehicle->width,
                    'height' => $vehicle->height,
                    'weight' => $vehicle->weight,
                ];
            }),
        ];
    }
}
