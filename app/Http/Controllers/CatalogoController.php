<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\Evento;
use App\Models\Fotografia;
use App\Models\Fotografo;
use App\Models\Organizador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('catalogo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $evento = Evento::where('id', '=', $id)->first();
        // $catalogo = Catalogo::where('id_evento','=',$evento->id)->first();
        $catalogo = Catalogo::findOrFail($id);
        $evento = Evento::findOrFail($catalogo->id_evento); 
        $fotografias = Fotografia::where('id_catalogo','=',$catalogo->id)->get();
        
       return view('catalogo.show', compact('evento','catalogo','fotografias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
