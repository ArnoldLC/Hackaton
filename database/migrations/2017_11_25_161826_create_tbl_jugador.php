<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblJugador extends Migration
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
            $table->string('email')->unique();            
            $table->date('fecha_nacimiento');
            $table->string('lugar_nacimiento');
            $table->string('grupo_sanguineo');            
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
        //
    }
}
