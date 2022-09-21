<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'eventos';
    protected $fillable = [
        'nombre_evento',
        'direccion',
        'fecha',
        'hora',
        'paquete_fotos',
        'id_fotografo',
        'id_organizador',
    ];

}
