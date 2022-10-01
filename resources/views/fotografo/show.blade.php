@extends('layouts.banner')
@section('title', 'card-fotografo')

@section('main')
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/cards.css') }}" type="text/css">
</head>

<body>
    <!--   Tarjetas-->
    <div class="title-cards">
        <h2 class="strong">Fotografos disponibles</h2>
    </div>
    <div class="container-card">
        @foreach ($fotografos as $fotografo)
            <div class="card">
                <figure>
                    <img src="{{ asset('import/assets/img/fotografos/fotografo-1.png') }}">
                </figure>
                
                <div class="contenido-card">
                    <h3>{{ $fotografo->user->name }} {{ $fotografo->user->apellido }}</h3>
                    <p>Correo: {{ $fotografo->user->email }}</p>
                    <p>Telefono: {{ $fotografo->user->telefono }}</p>
                    <p>Carnet de identidad: {{ $fotografo->user->ci }}</p>
                    <p>Foto Estudio: {{ $fotografo->nombre_studio }}</p>
                    <a href="{{route('evento.create', $fotografo->id)}}">Reservar</a>
                    <a href="{{route('paquetes.index')}}">Ver Paquetes</a>
                </div>
            </div>
        @endforeach
    </div>
    <!--Fin   Tarjetas-->
</body>
@endsection
