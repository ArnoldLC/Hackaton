<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'fecha_inicio',
        'fecha_fin', 'pais',
    ];

    protected $table = 'campeonato';
}
