<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulos extends Model
{
    protected $fillable =   [
        'modulo_padre',
        'imagen_modulo',
        'nombre_modulo'
    ];
}
