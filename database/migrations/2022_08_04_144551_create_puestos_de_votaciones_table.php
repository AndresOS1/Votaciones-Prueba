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
        Schema::create('puestos_de_votaciones', function (Blueprint $table) {
            $table->id('id_puesto');
            $table->string('nombre');
            $table->string('direccion');

            $table->unsignedBigInteger('municipio_id');


            $table->foreign('municipio_id')->references('id_municipio')->on('municipio');
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
        Schema::dropIfExists('puestos_de_votaciones');
    }
};
