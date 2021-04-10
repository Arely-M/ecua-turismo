<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacion', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('ubicacion');
            $table->text('resumen');
            $table->text('descripcion');
            $table->string('imagen');
            $table->integer('id_provincia');
            $table->integer('id_categoria')->nullable();
            
            $table->foreign('id_provincia')->references('id')->on('provincias');
            $table->foreign('id_categoria')->references('id')->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicacion');
    }
}
