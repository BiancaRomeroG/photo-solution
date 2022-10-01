<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('precio')->nullable();
            $table->string('cantidad_fotos')->nullable();
            $table->string('descripcion')->nullable();
            $table->unsignedBigInteger('id_fotografo')->nullable();
            $table->foreign('id_fotografo')->references('id')->on('fotografos');
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
        Schema::dropIfExists('paquetes');
    }
}
