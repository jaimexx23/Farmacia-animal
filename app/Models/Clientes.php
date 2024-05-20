<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    // Instancio la tabla 'Clientes'
    protected $table = 'Clientes';

    // Declaro los campos que usaré de la tabla 'Clientes'
    protected $fillable = ['nombre', 'Apellidopaterno', 'ApellidoMaterno', 'Edad', 'Correo'];
}
