<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotografo extends Model
{
    use HasFactory;

    protected $table = 'fotografos';
    protected $fillable = [
        'id_usuario',
    ];
}
