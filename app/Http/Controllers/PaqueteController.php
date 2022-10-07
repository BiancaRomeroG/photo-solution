<?php

namespace App\Http\Controllers;

use App\Models\Fotografo;
use App\Models\Paquetes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Auth;

class PaqueteController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $fotografo = Fotografo::where('id_usuario',Auth::user()->id)->first();
        return $fotografo;
        //return view('paquetes.create',compact('fotografo'));
    }

    public function store(Request $request)
    {
        $paquetes = Paquetes::create([
            'id_fotografo' => $request->idfotografo,
            'nombre'=> $request->nombre,
            'precio' => $request->precio,
            'cantidad_fotos' => $request->cantidad_fotos,
            'descripcion' => $request->descripcion,
        ]);
        $paquetes->save();

        return redirect()->route('paquete.show',$request->idfotografo);
    }

    public function show($id)
    {
        $paquetes = Paquetes::where('id_fotografo','=',$id)->get();
        return view('paquetes.index', compact('paquetes'));
    }
    
}
