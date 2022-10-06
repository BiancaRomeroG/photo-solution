<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Fotografo;
use App\Models\Organizador;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all();
        // return $eventos;
        return view('evento.index', compact('eventos'))->with('i');
        // return view('evento.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        
        $fotografo = Fotografo::find($id);

        // $user = User::where('id', $fotografo->id_usuario)->first();
        return view('evento.create',compact('fotografo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('hola');
        //Se crea el evento
        // $evento = new Evento();
        // $evento->idfotografo = $id;
        // $evento->idorganizador = auth()->user()->id;
        // $evento->fecha = $request->fecha;
        // $evento->hora = $request->hora;
        // $evento->nombre_evento = $request->nombre_evento;
        // $evento->direccion = $request->direccion;
        // $evento->estado = 'En proceso';
        // $evento->save();
        
        return redirect()->route('evento.index');
    }

    public function storeevento(Request $request,$id)
    {
       // Se crea el evento
        $evento = new Evento();
        $evento->id_fotografo = $id;
        $evento->id_organizador = auth()->user()->id;
        $evento->fecha = $request->fecha;
        $evento->hora = $request->hora;
        $evento->nombre_evento = $request->nombre_evento;
        $evento->direccion = $request->direccion;
        $evento->estado = 'En proceso';
        $evento->save();

        Catalogo::create([
            'cantidad_fotos' => 0,
            'id_evento'=> $evento->id,
        ]);
        
        return redirect()->route('evento.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
        //
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
