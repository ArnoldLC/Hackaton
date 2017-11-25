<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $fillabe = [
        'fecha', 'lugar', 'direccion', 'ciudad',
        'pais',
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
