<?php

namespace App\UserConfig;

use App\UserConfig\User;
use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    protected $fillable =   [
        'nombre_oficina',
        'telefono_oficina',
        'nombre_grupo',
        'abreviacion_oficina'
    ];

    public function usuarios()
    {
        return $this->belongsToMany(User::class);
    }
}
