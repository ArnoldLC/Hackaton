<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $fillable = [
        'nombre_equipo', 'fecha_fundacion', 'fundacion',
        'estado', 'ciudad', 'pais',
    ];

    protected $table = 'equipo';
}
