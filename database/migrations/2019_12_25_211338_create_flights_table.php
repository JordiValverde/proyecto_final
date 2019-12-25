<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('departure_time');
            $table->String('arrival_time');
            $table->String('place_departure');
            $table->String('place_arrival');
            $table->Date('departure_date');
            $table->Date('arrival_date');
            $table->String('flight_type');
            $table->String('state');
            $table->unsignedBigInteger('pilot_id');
            $table->foreign('pilot_id')->references('id')->on('pilots')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('passenger_id');
            $table->foreign('passenger_id')->references('id')->on('passengers')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('seat_id');
            $table->foreign('seat_id')->references('id')->on('seats')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('citys')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('plane_id');
            $table->foreign('plane_id')->references('id')->on('planes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('flights');
    }
}
