<?php

namespace App\UserConfig;

use App\UserConfig\Oficina;
use Illuminate\Database\Eloquent\Model;

class Aduana extends Model
{
    protected $fillable =   [
        'id_oficina',
        'nombre_aduana'
    ];

    public function oficina()
    {
        return $this->belongsTo(Oficina::class);
    }
}
