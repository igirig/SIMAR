<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Estacion as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Estacion extends Authenticatable
{
    use HasFactory, Notifiable;
    public $table = "estaciones";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'razonSocial',
        'noEstacion',
        'calle',
        'noExterior',
        'noInterior',
        'colonia',
        'codigoPostal',
        'estado_id',
        'municipio_id',
        'telefono',
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
