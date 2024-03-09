<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('juego_id');
            $table->dateTime('fecha_compra');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('juego_id')->references('id')->on('juegos')->onDelete('cascade');
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('compras');
    }

};
