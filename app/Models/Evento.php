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
        'estado',
        'id_fotografo',
        'id_organizador',
        'id_paquete',
    ];


    public function fotografo(){
        return $this->belongsTo('App\Models\Fotografo','id_fotografo','id');
    }

    public function organizador(){
        return $this->belongsTo('App\Models\Organizador','id_organizador','id');
    }

}
