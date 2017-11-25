<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'estado','fecha_inicio',
        'fecha_fin', 'temporada_id',
    ];

    protected $table = 'campeonato';

    public function partido() {
        return $this->hasMany('Partido');
    }

    public function temporada() {
        return $this->belongsTo('Temporada');
    }
}
