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
}
