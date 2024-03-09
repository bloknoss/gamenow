<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juegos extends Model
{
    use HasFactory;



    protected $fillable = [
        'nombre_juego',
        'editorial_id',
        'fecha_lanzamiento',
        'ventas',
        'descripcion',
    ];
}
