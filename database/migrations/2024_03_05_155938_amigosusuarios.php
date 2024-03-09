<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('amigos_users', function (Blueprint $table) {
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('amigo_id');

            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('amigo_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('amigos_users');
    }



};
