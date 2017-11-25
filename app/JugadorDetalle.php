<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JugadorDetalle extends Model
{
    protected $fillable = [
        'pases_completados', 'pases_errados', 'total_pases',
        'total_asistencias', 'goles', 'porcentajes_pases',
        'minutos_jugados',
    ];

    protected $table = 'jugador_detalle';

    public function jugador() {
        return $this->belongsTo('Jugador');
    }
}
