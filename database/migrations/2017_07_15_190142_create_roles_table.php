<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role_name');
            $table->timestamps();
        });

        $role = DB::table('roles');

        $role->insert(['role_name'=>'admin']);
        $role->insert(['role_name'=>'carOwner']);
        $role->insert(['role_name'=>'passenger']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('roles');
    }
}
