<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('editoriales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_editorial');
            $table->string('ubicacion_central');
            $table->year('ano_fundacion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('editoriales');
    }


};
