<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug',60);
            $table->string('title',255);
            $table->string('poster_url',255);
            $table->bigInteger('location_id')->unsigned();//typage
            $table->foreign('location_id')->references('id')->on('locations');//cle étrangère
            $table->tinyInteger('bookable',false,1);
            $table->decimal('price',10);
            $table->unique('slug');
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
        Schema::dropIfExists('shows');
    }
}
