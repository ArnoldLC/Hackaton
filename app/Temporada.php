<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    protected $fillable = [
        'nombre', 'estado', 'cidudad',
        'pais',
    ];
}
