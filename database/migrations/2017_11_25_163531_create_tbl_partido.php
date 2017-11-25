<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPartido extends Migration
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
            $table->foreign('tipo_partido_id')->references('id')->on('tipo_partido');
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
        //
    }
}
