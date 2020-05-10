<?php

namespace App\UserConfig;

use Illuminate\Database\Eloquent\Model;

class Aduana extends Model
{
    protected $fillable =   [
        'id_oficina',
        'nombre_aduana'
    ];
}
