<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('juego_id');
            $table->unsignedBigInteger('usuario_id');
            $table->text('descripcion');
            $table->integer('solucionado');

            $table->timestamps();

            $table->foreign('juego_id')->references('id')->on('juegos')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }

};
