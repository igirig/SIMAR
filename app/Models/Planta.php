<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Planta as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Planta extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'razonSocial',
        'noRegistroAmbiental',
        'calle',
        'noExterior',
        'noInterior',
        'colonia',
        'codigoPostal',
        'estado_id',
        'municipio_id',
        'telefono',
        'extension',
        'correo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
}
