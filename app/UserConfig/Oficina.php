<?php

namespace App\UserConfig;

use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    protected $fillable =   [
        'nombre_oficina',
        'telefono_oficina',
        'nombre_grupo',
        'abreviacion_oficina'
    ];
}
