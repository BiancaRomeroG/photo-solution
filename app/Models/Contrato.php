<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $table = 'contratos';
    protected $fillable = [
        'cantidad_fotos',
        'fecha',
        'pago',
        'id_fotografo',
        'id_organizador',
    ];
}
