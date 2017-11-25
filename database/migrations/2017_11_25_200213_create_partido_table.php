<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('partido', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->smallInteger('estado');
            $table->String('lugar');
            $table->String('direccion');
            $table->String('ciudad');
            $table->String('pais');
            $table->integer('tipo_partido_id')->unsigned();            
            $table->integer('campeonato_id')->unsigned();
            $table->foreign('tipo_partido_id')->references('id')->on('partido_tipo');
            $table->foreign('campeonato_id')->references('id')->on('campeonato');
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
        Schema::dropIfExists('partido');
    }
}
