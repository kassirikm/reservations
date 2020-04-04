<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtisteTypeShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artiste_type_shows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('artiste_type_id')->unsigned();//typage
            $table->bigInteger('show_id')->unsigned();
            
            $table->foreign('artiste_type_id')->references('id')->on('artiste_types');//cle étrangère
            $table->foreign('show_id')->references('id')->on('shows');
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
        Schema::dropIfExists('artiste_type_shows');
    }
}
