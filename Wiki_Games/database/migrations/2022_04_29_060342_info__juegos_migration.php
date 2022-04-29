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
        Schema::create('Info_Juegos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_contenido')->unsigned('');
            $table->integer('id_juego')->unsigned('');
            $table->timestamps();
            $table->foreign('id_contenido')->references('id')->on('contenido');
            $table->foreing('id_juego')->references('id')->on('juego');

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
