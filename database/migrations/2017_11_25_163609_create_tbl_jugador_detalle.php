<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblJugadorDetalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('jugador_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pases_completados');
            $table->integer('pases_errados');
            $table->integer('total_pases');
            $table->integer('total_asistencias');
            $table->integer('goles');
            $table->float('porcentaje_pases', 8, 2);
            $table->time('minutos_jugados');
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
