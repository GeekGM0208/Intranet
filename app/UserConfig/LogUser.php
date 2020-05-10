<?php

namespace App\UserConfig;

use Illuminate\Database\Eloquent\Model;

class LogUser extends Model
{
    protected $fillable =   [
        'id_usuario',
        'fecha_acceso'
    ];
}
