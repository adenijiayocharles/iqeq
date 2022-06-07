<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('manufacturer_id');
            $table->unsignedBigInteger('vehicle_type_id');
            $table->integer('base_price');
            $table->integer('top_speed');
            $table->string('fuel_type');
            $table->integer('maximum_seating');
            $table->string('transmission_type');
            $table->integer('number_of_doors');
            $table->float('length');
            $table->float('width');
            $table->float('height');
            $table->float('weight');
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers')->cascadeOnDelete();
            $table->foreign('vehicle_type_id')->references('id')->on('vehicle_types')->cascadeOnDelete();
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
        Schema::dropIfExists('vehicles');
    }
}
