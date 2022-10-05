<?php

namespace App\Http\Controllers;

use App\Models\Paquetes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paquetes = Paquetes::all();
        return view('paquetes.index', compact('paquetes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('paquetes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        return redirect()->route('paquetes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paquetes $paquetes
     * @return \Illuminate\Http\Response
     */
    public function show($paquetes)
    {
        $paquetes = Paquetes::findOrFail($paquetes);
        return view('paquetes.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paquetes $paquetes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paquetes $paquetes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paquetes $paquetes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
