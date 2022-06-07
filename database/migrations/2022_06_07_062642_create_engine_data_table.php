<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEngineDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engine_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id');
            $table->float('power');
            $table->float('power_per_litre');
            $table->integer('number_of_cylinders');
            $table->integer('number_of_valves');
            $table->string('valvetrain');
            $table->string('engine_aspiration');
            $table->string('fuel_system');
            $table->float('piston_stroke');
            $table->float('cylinder_bore');
            $table->string('position_of_cylinders');
            $table->string('engine_location');
            $table->float('engine_displacement');
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('engine_data');
    }
}
