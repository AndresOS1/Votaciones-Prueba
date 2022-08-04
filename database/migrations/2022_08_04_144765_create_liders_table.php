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
        Schema::create('liders', function (Blueprint $table) {
            $table->id('id_lider');
            $table->string('nombres',24);
            $table->string('apellidos',24);
            $table->integer('celular')->length(10);
            $table->unsignedBigInteger('capitan_id');
            $table->foreign('capitan_id')->references('id_capitan')->on('capitanes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('liders');
    }
};
