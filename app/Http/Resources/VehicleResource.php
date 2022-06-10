<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'manufacturer_id' => $this->manufacturer->name,
            'vehicle_type_id' => $this->type->name,
            'base_price' => $this->base_price,
            'top_speed' => $this->top_speed,
            'fuel_type' => $this->top_speed,
            'maximum_seating' => $this->maximum_seating,
            'transmission_type' => $this->transmission_type,
            'number_of_doors' => $this->number_of_doors,
            'length' => $this->length,
            'width' => $this->width,
            'height' => $this->height,
            'weight' => $this->weight,
        ];
    }
}
