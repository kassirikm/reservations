<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug',60);
            $table->string('designation',60);
            $table->string('adress',60);
            $table->bigInteger('locality_id')->unsigned();
            $table->foreign('locality_id')->references('id')->on('localities');
            $table->string('website',255);
            $table->string('phone',30);
            $table->unique('slug');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
