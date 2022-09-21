<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->string('cantidad_fotos');
            $table->date('fecha');
            $table->string('pago');
            $table->unsignedBigInteger('id_fotografo');
            $table->foreign('id_fotografo')->references('id')->on('fotografos');
            $table->unsignedBigInteger('id_organizador');
            $table->foreign('id_organizador')->references('id')->on('organizadores');
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
        Schema::dropIfExists('contratos');
    }
}
