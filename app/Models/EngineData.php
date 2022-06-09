<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngineData extends Model
{
    use HasFactory;
    protected $table = 'engine_data';
    protected $fillable = [
        'vehicle_id', 'power', 'power_per_litre', 'number_of_cylinders', 'number_of_valves', 'valvetrain', 'engine_aspiration', 'fuel_system', 'piston_stroke', 'cylinder_bore', 'position_of_cylinders', 'engine_location', 'engine_displacement'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }
}
