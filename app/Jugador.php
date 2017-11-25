<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $fillable = [
        'name', 'apellido', 'imagen', 'estado',
        'email', 'fecha_nacimiento', 'lugar_nacimiento', 'grupo_sanguineo',
        'equipo_id', 'jugador_detalle_id',
    ];

    protected $table = 'jugador';

    public function equipo() {
        return $this->belongsTo('Equipo');
    }

    public function jugadorDetalle() {
        return $this->hasMany('JugadorDetalle');
    }
}
