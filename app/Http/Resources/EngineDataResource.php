<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EngineDataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'power' => $this->power,
            'power_per_litre' => $this->power_per_litre,
            'number_of_cylinders' => $this->number_of_cylinders,
            'number_of_valves' => $this->number_of_valves,
            'valvetrain' => $this->valvetrain,
            'engine_aspiration' => $this->engine_aspiration,
            'fuel_system' => $this->fuel_system,
            'piston_stroke' => $this->piston_stroke,
            'cylinder_bore' => $this->cylinder_bore,
            'position_of_cylinders' => $this->position_of_cylinders,
            'engine_location' => $this->engine_location,
            'engine_displacement' => $this->engine_displacement,
        ];
    }
}
