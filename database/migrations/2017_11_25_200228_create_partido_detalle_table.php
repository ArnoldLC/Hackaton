<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidoDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('partido_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goles_a_favor');
            $table->integer('goles_en_contra');
            $table->String('adversario');
            $table->integer('equipo_id')->unsigned();
            $table->integer('partido_id')->unsigned();
            $table->foreign('equipo_id')->references('id')->on('equipo');
            $table->foreign('partido_id')->references('id')->on('partido');
            $table->rememberToken();
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
        Schema::dropIfExists('partido_detalle');
    }
}
