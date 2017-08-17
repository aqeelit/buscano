<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_owners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('property_number')->unique();
            $table->string('owner_name');
            $table->string('licence_number')->unique();
            $table->string('licence_type');
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
        Schema::drop('car_owners');
    }
}
