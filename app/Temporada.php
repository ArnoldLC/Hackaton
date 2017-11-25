<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    protected $fillable = [
        'nombre', 'estado', 'cidudad',
        'pais',
    ];

    protected $table = 'temporada';

    public function campeonato() {
        return $this->hasMany('Campeonato');
    }
}
