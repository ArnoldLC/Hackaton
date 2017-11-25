<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $fillabe = [
        'fecha', 'estado','lugar', 'direccion', 'ciudad',
        'pais', 'goles_a_favor', 'goles_en_contra', 'adversario', 'equipo_id',
        'partido_tipo_id', 'campeonato_id',
    ];

    protected $table = 'partido';

    public function equipo() {
        return $this->belongsTo('Equipo');
    }

    public function tipoPartido() {
        return$this->hasOne('TipoPartido');
    }

    public function campeonato() {
        return $this->belongsTo('Campeonato');
    }
}
