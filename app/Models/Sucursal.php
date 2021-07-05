<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Sucursal as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Sucursal extends Authenticatable
{
    use HasFactory, Notifiable;
    public $table = "sucursales";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cliente_id',
        'nombre',
        'noRegistroAmbiental',
        'calle',
        'noInterior',
        'noExterior',
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
