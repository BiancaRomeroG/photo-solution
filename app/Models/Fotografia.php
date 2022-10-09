<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotografia extends Model
{
    use HasFactory;

    protected $table = 'fotografias';
    protected $fillable = [
        'direccion_img',
        'precio',
        'tipo',
        'id_catalogo',
    ];
}
