<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SignalLane extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signal_lane', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('signal_id')->unsigned();
            $table->bigInteger('from_lane_id')->unsigned();
            $table->bigInteger('to_lane_id')->unsigned();
            
            $table->foreign('signal_id')->references('id')->on('signal')->onDelete('restrict');
            $table->foreign('from_lane_id')->references('id')->on('lane')->onDelete('restrict');
            $table->foreign('to_lane_id')->references('id')->on('lane')->onDelete('restrict');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('signal_lane');
    }
}
