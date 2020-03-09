<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmobiliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immobili', function (Blueprint $table) {
            $table->increments('id');
            $table->string('indirizzo',256);
            $table->string('provincia',50);
            $table->string('titolo',100);
            $table->text('descrizione');
            $table->integer('sorter')->nullable();
            $table->integer('mq');
            $table->integer('prezzo');
            $table->string('photo',250);
            $table->geometry('position')->nullable();
            $table->integer('id_tipologia')->unsigned();
            $table->integer('id_operazione')->unsigned();
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
        Schema::dropIfExists('immobili');
    }
}
