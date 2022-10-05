<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquetes extends Model
{
    use HasFactory;

    protected $table = 'paquetes';
    protected $fillable = [
        'nombre',
        'precio',
        'cantidad_fotos',
        'descripcion',
        'id_fotografo',
    ];

    public function fotografo(){
        return $this->belongsTo('App\Models\Fotografo','id_fotografo','id');
    }


}
