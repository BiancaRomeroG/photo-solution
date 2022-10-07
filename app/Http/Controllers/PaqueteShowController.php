<?php

namespace App\Http\Controllers;

use App\Models\Fotografo;
use App\Models\Paquetes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaqueteShowController extends Controller
{
    public function show()
    {
        $fotografo = Fotografo::where('id_usuario',Auth::user()->id)->first();
        $paquetes = Paquetes::where('id_fotografo','=',$fotografo->id)->get();
        return view('paquetes.index', compact('paquetes'));
    }
}
