<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_area';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['id_area', 'nom_area'];
}
