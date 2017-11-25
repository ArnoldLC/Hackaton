<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartidoDetalle extends Model
{
    protected $fillable = [
        'goles_a_favor', 'goles_en_contra',
        'adversario',
    ];
}
