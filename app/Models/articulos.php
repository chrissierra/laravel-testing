<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articulos extends Model
{
    use HasFactory;

    protected $fillable = [
    	'titulo', 
    	'nombre_seccion', 
    	'cuerpo_seccion'
    ];

}
