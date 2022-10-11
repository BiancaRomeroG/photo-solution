<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoPerfil extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_usuario',
        'direccion_img'
    ];

}
