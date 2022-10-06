<?php

namespace App\Http\Controllers;

use App\Models\Paquetes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;

class PaqueteController extends Controller
{
    public function index($id)
    {
        $paquetes = Paquetes::where('id_fotografo','=',$id)->get();
        return view('paquetes.index', compact('paquetes'));
    }

    public function create()
    {
        
        return view('paquetes.create');
    }

    public function store(Request $request)
    {
        $paquetes = Paquetes::create([
            'id_fotografo' =>auth()->user()->id,
            'nombre'=> $request->nombre,
            'precio' => $request->precio,
            'cantidad_fotos' => $request->cantidad_fotos,
            'descripcion' => $request->descripcion,
        ]);
        $paquetes->save();

        return redirect()->route('paquete.index', auth()->user()->id);
    }
}
