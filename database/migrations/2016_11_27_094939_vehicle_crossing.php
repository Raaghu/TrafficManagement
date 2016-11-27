<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VehicleCrossing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_crossing', function (Blueprint $table) {
            $table->string('reg_no',10);
            $table->bigInteger('signal_lane_id')->unsigned();
            $table->dateTime('crossed_at');
            $table->float('speed');
        
            $table->foreign('signal_lane_id')->references('id')->on('signal_lane')->onDelete('restrict');
            $table->foreign('reg_no')->references('reg_no')->on('vehicle')->onDelete('restrict');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_crossing');
    }
}
