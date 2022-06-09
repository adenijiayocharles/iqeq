<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'manufacturer_id', 'vehicle_type_id', 'base_price', 'top_speed', 'fuel_type', 'maximum_seating', 'transmission_type', 'number_of_doors', 'length', 'width', 'weight', 'height'
    ];

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function engineData()
    {
        return $this->hasOne(EngineData::class, 'vehicle_id');
    }

    public function type()
    {
        return $this->belongsTo(VehicleType::class, 'vehicle_type_id');
    }
}
