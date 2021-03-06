<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPartido extends Model
{
    protected $fillable = [
        'descripcion',
    ];

    protected $table = 'partido_tipo';

    public function partido() {
        return $this->belongsTo('Partido');
    }
}
