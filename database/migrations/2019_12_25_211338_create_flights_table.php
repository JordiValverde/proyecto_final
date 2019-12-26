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
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->BigInteger('place_departure')->unsigned();
            $table->foreign('place_departure')->references('id')->on('citys')->onDelete('cascade')->onUpdate('cascade');
            $table->BigInteger('place_arrival')->unsigned();
            $table->foreign('place_arrival')->references('id')->on('citys')->onDelete('cascade')->onUpdate('cascade');
            $table->Date('departure_date');
            $table->Date('arrival_date');
            $table->String('flight_type');
            $table->String('state');
            $table->BigInteger('pilot_id')->unsigned();
            $table->foreign('pilot_id')->references('id')->on('pilots')->onDelete('cascade')->onUpdate('cascade');
            $table->BigInteger('passenger_id')->unsigned();
            $table->foreign('passenger_id')->references('id')->on('passengers')->onDelete('cascade')->onUpdate('cascade');
            $table->BigInteger('seat_id')->unsigned();
            $table->foreign('seat_id')->references('id')->on('seats')->onDelete('cascade')->onUpdate('cascade');
            $table->BigInteger('plane_id')->unsigned();
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
