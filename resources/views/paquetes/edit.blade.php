@extends('layouts.banner')
@section('title', 'paquetes')

@section('main')
<div class="mx-auto col-sm-12 col-xl-6">
    <div class="p-4 my-5 rounded bg-light h-100">
        <h6 class="mb-4">Paquetes</h6>
        <form  method="POST" action="{{route('paquete.update', $paquetes)}}"  >
            @csrf
            @method('PUT')
            <div class="mb-3">
                {{-- <input type="hidden" value="{{$fotografo->id}}" name="idfotografo"> --}}
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre"
                    aria-describedby="emailHelp" name="nombre" 
                    value="{{$paquetes->nombre}}">
            </div>
            <div class="mb-3">
                <label  class="form-label">Precio</label>
                <input type="text" class="form-control" id="precio" name="precio"
                value="{{$paquetes->precio}}">
            </div>
            <div class="mb-3">
                <label  class="form-label">Cantidad de Fotos</label>
                <input type="text" class="form-control" id="cantidad_fotos" name="cantidad_fotos"
                value="{{$paquetes->cantidad_fotos}}">
            </div>
            <div class="mb-3">
                <label  class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion"
                value="{{$paquetes->descripcion}}">
            </div>
            <div class="gap-2 d-grid d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div> 
        </form>
    </div>
</div>
@endsection

