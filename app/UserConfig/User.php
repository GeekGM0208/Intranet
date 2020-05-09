<?php

namespace App\UserConfig;

use Illuminate\Support\Str;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    const USUARIO_VERIFICADO    = "1";
    const USUARIO_NO_VERIFICADO = "0";

    const USUARIO_ADMINISTRADOR = "true";
    const USUARIO_REGULAR       = "false";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_real',
        'apellido_paterno',
        'apellido_materno',
        'nombre_usuario',
        'email',
        'password',
        'verificado',
        'verification_token',
        'admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'verification_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function esVerificado()
    {
        return $this->verificado == User::USUARIO_VERIFICADO;
    }

    public function esAdministrador()
    {
        return $this->admin == User::USUARIO_ADMINISTRADOR;
    }

    public static function generaVerificacionToken()
    {
        return Str::random(40);
    }
}
