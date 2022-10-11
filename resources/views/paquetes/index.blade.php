@extends('layouts.banner')
@section('title', 'paquetes')

@section('main')
    <body>
        <div class="px-2 container-fluid px-md-3">
            <div class="card2">
                <div class="p-4 pb-2 card-header">
                    <div class="row justify-content-between">
                        <div class="col col-sm-6">
                            <h4 class="text-dark" class="card-title">Paquetes</h4>
                        </div>
                        @role('Fotografo')
                        <div class="col-6 col-md-auto col-sm-6">
                            <a href="{{ route('paquete.create') }}" class="btn btn-sm btn-dark">Agregar nuevo Paquete</a>
                        </div>
                        @endrole
                        <div class="container-card2">
                            @foreach ($paquetes as $paquete)
                                <div class="card2">
                                    <div class="contenido-card2">
                                        <h3 class="text-white bg-secondary">{{ $paquete->nombre }}</h3>
                                        <p>Precio: {{ $paquete->precio }}</p>
                                        <p>Cantidad de Fotos: {{ $paquete->cantidad_fotos }}</p>
                                        <p>Descripcion: {{ $paquete->descripcion }}</p>
                                        @role('Fotografo')
                                        <a href="{{route('paquete.edit', $paquete->id)}}">Editar</a>
                                        @endrole
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>



    </body>
    
 <!--Estilos del Css -->
    <style>
        

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        /*Cards*/
        .container-card2 {
            width: 100%;
            display: flex;
            max-width: 1100px;
            margin: auto;
            flex-wrap: wrap;
        }

        .title-cards {
            width: 100%;
            max-width: 1080px;
            margin: auto;
            padding: 20px;
            margin-top: 20px;
            text-align: center;
            color: #7a7a7a;
        }

        .card2 {
            width: 100%;
            margin: 20px;
            border-radius: 6px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.2);
            transition: all 400ms ease-out;
            cursor: default;
            flex: 0 0 29%;
        }

        .card2 img {
            width: 100%;
            height: 210px;
        }

        .card2 .contenido-card2 {
            padding: 15px;
            text-align: center;
        }

        .card2 .contenido-card2 h3 {
            margin-bottom: 15px;
            color: #7a7a7a;
        }

        .card2 .contenido-card2 p {
            line-height: 1.8;
            color: #6a6a6a;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .card2 .contenido-card2 a {
            display: inline-block;
            padding: 10px;
            margin-top: 10px;
            text-decoration: none;
            color: #2fb4cc;
            border: 1px solid #2fb4cc;
            border-radius: 4px;
            transition: all 400ms ease;
            margin-bottom: 5px;
        }

        .card2 .contenido-card2 a:hover {
            background: #2fb4cc;
            color: #fff;
        }

        @media only screen and (min-width:320px) and (max-width:768px) {
            .container-card {
                flex-wrap: wrap;
            }

            .card {
                margin: 15px;
            }
        }

        /*Fin-Cards*/
    </style>
@endsection
