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

    public function paquete(){
        return $this->hasOne('App\Models\Paquete','id_paquete','id');
    }

    public function catalogo(){
        return $this->hasOne('App\Models\Catalogo','id_evento','id');
    }

}
