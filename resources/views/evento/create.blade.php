@extends('layouts.banner')
@section('title', 'evento')

@section('main')
<div class="mx-auto col-sm-12 col-xl-6">
    <div class="p-4 my-5 rounded bg-light h-100">
        <h6 class="mb-4">Evento </h6>
        <form  action="{{route('evento.storeevento', $fotografo->id)}}" method="POST" >
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre del Evento</label>
                <input type="text" class="form-control" id="nombre_evento"
                    aria-describedby="emailHelp" name="nombre_evento">
            </div>
            <div class="mb-3">
                <label  class="form-label">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion">
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha">
            </div>
            <div class="mb-3">
                <label  class="form-label">Hora</label>
                <input type="time" class="form-control" id="hora" name="hora">
            </div>
            <div class="mb-3">
                <label  class="form-label">Paquete:</label>
                <select class="mb-3 form-select" aria-label="Default select example" id="id_paquete" name="id_paquete">
                    <option selected disabled>---Escoja una opcion---</option>
                    <option value="1" >Basic</option>
                    <option value="2" >Estandar</option>
                    <option value="3" >Premiun</option>
                </select>
            </div>
            
            <div class="gap-2 d-grid d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary">Reservar</button>
            </div>
        </form>
    </div>
</div>

@endsection

