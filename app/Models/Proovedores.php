<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proovedores extends Model
{
    protected $fillable = [
        'nombre',
        'Apellidopaterno',
        'ApellidoMaterno',
        'Edad',
        'Correo',
    ];
}
