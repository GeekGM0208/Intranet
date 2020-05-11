<?php

namespace App\UserConfig;

use App\UserConfig\User;
use Illuminate\Database\Eloquent\Model;

class LogUser extends Model
{
    protected $fillable =   [
        'id_usuario',
        'fecha_acceso'
    ];

    public function  users()
    {
        return $this->hasMany(User::class);
    }
}
