<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoImmobiliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_immobili', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_immobile')->unsigned();
            $table->foreign('id_immobile')->on('immobili')->references('id');
            $table->string('path',250);
            $table->string('descrizione')->nullable();
            $table->integer('sorter')->nullable();
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
        Schema::dropIfExists('photo_immobili');
    }
}
