<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('login',30);
            $table->string('password',255);
            $table->bigInteger('role_id')->unsigned();//typage
            $table->foreign('role_id')->references('id')->on('roles');//cle étrangère
            $table->string('firstname',60);
            $table->string('lastname',60);
            $table->string('email',100);
            $table->string('langue',2);
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
        Schema::dropIfExists('users');
    }
}
