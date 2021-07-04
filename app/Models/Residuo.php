<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Residuo as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Residuo extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'corrosivo',
        'reactivo',
        'explosivo',
        'toxico',
        'inflamable',
        'biologico',
        'mezcla',
        'noONU',
        'descripcion',
        'clase_id',
        'materia_id',
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
