<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_juegos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contenido');
            $table->integer('id_contenido')->unsigned();
            $table->integer('id_juego')->unsigned();
            $table->timestamps();
            $table->foreign('id_contenido')->references('id')->on('contenido');
            $table->foreign('id_juego')->references('id')->on('lista_de_juegos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Info_Juegos');
    }
};
