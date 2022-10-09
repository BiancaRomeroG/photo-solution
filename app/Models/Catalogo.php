<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    use HasFactory;
    protected $table = 'catalogos';
    protected $fillable = [
        'id_evento',
    ];

    public function evento(){
        return $this->hasOne(Evento::class,'id_evento');
    }

}
