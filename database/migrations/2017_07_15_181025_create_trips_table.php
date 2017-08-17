<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id')->index();
            $table->date('trip_day');
            $table->integer('seat_price');
            $table->integer('seats_number');
            $table->string('from');
            $table->string('to');
            $table->time('start_date');
            $table->time('arrive_date');
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
        Schema::drop('trips');
    }
}
