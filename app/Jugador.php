<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $fillable = [
        'name', 'apellido', 'email', 'fecha_nacimiento',
        'lugar_nacimiento', 'grupo_sanguineo',
    ];

    protected $table = 'jugador';

    public function equipo() {
        return $this->belongsTo('Equipo');
    }

    public function jugadorDetalle() {
        return $this->hasMany('JugadorDetalle');
    }
}
