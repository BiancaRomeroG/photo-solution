<?php

namespace App\Http\Controllers;

use App\Models\Fotografo;
use App\Models\Paquetes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaqueteController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $fotografo = Fotografo::where('id_usuario',Auth::user()->id)->first();
        return view('paquetes.create',compact('fotografo'));
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

    public function edit($id)
    {
        $paquetes = Paquetes::findOrFail($id);
        return view('paquetes.edit',compact('paquetes'));
    }

    public function update(Request $request, $paquetes)
    {
        try{
            $paquetes = Paquetes::findOrFail($paquetes);
            $paquetes->id_fotografo = $request->idfotografo;
            $paquetes->nombre = $request->nombre;
            $paquetes->precio = $request->precio;
            $paquetes->cantidad_fotos = $request->cantidad_fotos;
            $paquetes->descripcion = $request->descripcion;
            $paquetes->save();

            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();
            return "Ocurrio un error";
        }
        return redirect()->route('paquete.show', $paquetes->id);
    }

    public function destroy($id)
    {
        
       //
    }
    
}
