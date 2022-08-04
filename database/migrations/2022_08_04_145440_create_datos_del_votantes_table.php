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
        Schema::create('datos_del_votante', function (Blueprint $table) {
            $table->id('id_votante');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('cedula');
            $table->unsignedBigInteger('lider_id')->nullable();
            $table->unsignedBigInteger('barrio_id');
            $table->unsignedBigInteger('puestos_de_votaciones_id');


            // $table->foreign('populated_center_id')->references('id_populated_center')->on('populated_centers')->onDelete('set null');
            $table->foreign('barrio_id')->references('id_barrio')->on('barrios');
            $table->foreign('puestos_de_votaciones_id')->references('id_puesto')->on('puestos_de_votaciones');



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
        Schema::dropIfExists('datos_del_votante');
    }
};
