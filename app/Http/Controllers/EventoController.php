<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\Cliente;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Fotografo;
use App\Models\Organizador;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        if(Auth::user()->hasRole('Fotografo'))
        {
            $fotografo = Fotografo::where('id_usuario',Auth::user()->id)->first(); 
            $eventos = Evento::where('id_fotografo','=',$fotografo->id)->get();
        }
        if(Auth::user()->hasRole('Organizador'))
        {
            $organizador = Organizador::where('id_usuario',Auth::user()->id)->first(); 
            $eventos = Evento::where('id_organizador','=',$organizador->id)->get();
        }

       // $catalogo = Catalogo::where('id_evento','=',$eventos->id)->first();
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
        //
    }

    public function storeevento(Request $request,$id)
    {
        $organizador = Organizador::where('id_usuario',Auth::user()->id)->first();

       //Se crea el evento
        $evento = new Evento();
        $evento->id_fotografo = $id;
        $evento->id_organizador = $organizador->id;
        $evento->id_paquete = $request->id_paquete;
        $evento->fecha = $request->fecha;
        $evento->hora = $request->hora;
        $evento->nombre_evento = $request->nombre_evento;
        $evento->direccion = $request->direccion;
        $evento->estado = 'En proceso';
        $evento->save();
        

        // Evento::create([
        //     'id_fotografo' => $id, 
        //     'id_organizador' => 1,
        //     'nombre_evento'=> $request->nombre_evento,
        //     'direccion'=> $request->direccion,
        //     'fecha'=> $request->fecha,
        //     'hora'=> $request->hora,
        // ]);

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
