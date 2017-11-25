<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('jugador', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('apellido');
            $table->string('imagen');
            $table->smallInteger('estado');
            $table->string('email');            
            $table->date('fecha_nacimiento');
            $table->string('lugar_nacimiento');
            $table->string('grupo_sanguineo');            
            $table->integer('equipo_id')->unsigned();            
            $table->integer('jugador_detalle_id')->unsigned();
            $table->foreign('equipo_id')->references('id')->on('equipo');
            $table->foreign('jugador_detalle_id')->references('id')->on('jugador_detalle');
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
        Schema::dropIfExists('jugador');
    }
}
