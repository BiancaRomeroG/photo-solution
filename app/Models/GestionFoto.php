<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GestionFoto extends Model
{
    use HasFactory;

    protected $table = 'gestion_foto';
    protected $fillable = [
        'compra',
        'fotos',
        'id_cliente',
        'id_fotografia',
    ];
}
