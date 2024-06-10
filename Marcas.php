<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    use HasFactory;

    // Instancio la tabla 'marcas'
    protected $table = 'marcas';

    // Declaro los campos que usaré de la tabla 'marcas'
    protected $fillable = ['Descripcion','PaisOrigen'];
}
