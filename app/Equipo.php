<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $fillable = [
        'nombre', 'imagen', 'fecha_fundacion',
        'estado', 'ciudad', 'pais',
    ];

    protected $table = 'equipo';

    public function jugador() {
        return $this->hasMany('Jugador');
    }

    public function partido() {
        return $this->hasMany('Partido');
    }
}
