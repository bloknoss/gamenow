<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('juegos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_juego');
            $table->unsignedBigInteger('editorial_id');
            $table->date('fecha_lanzamiento');
            $table->integer('ventas');
            $table->string('descripcion');

            $table->timestamps();

            $table->foreign('editorial_id')->references('id')->on('editoriales')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('juegos');
    }

};
