<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtisteTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artiste_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('artist_id')->unsigned();
            $table->bigInteger('type_id')->unsigned();

            $table->foreign('artist_id')->references('id')->on('artists'); //cle étrangè
            $table->foreign('type_id')->references('id')->on('types');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artiste_types');
    }
}
