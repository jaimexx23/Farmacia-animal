<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'areas';

    // Campos que pueden ser asignados masivamente
    protected $fillable = ['nombre_area'];
}
