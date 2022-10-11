@extends('layouts.banner')
@section('title', 'catalogo')

@section('main')

    <head>
        <link rel="stylesheet" href="{{ asset('css/estilos-gallery.css') }}">
        <link rel="stylesheet" href="{{ asset('css/catalogo.css') }}">   
    </head>

    <body>
        <div class="px-2 container-fluid px-md-3">
            <div class="card">
                <div class="mt-3 card-header row">
                    <div class="justify-start col-6 col-lg-6">
                        <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Catalogo</h5>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-xl-4">
                            <div class="card card-plain h-100">
                                <div class="p-3 pb-0 card-header">
                                    <div class="row">
                                        <div class="col-md-8 d-flex align-items-center">
                                            <h6 class="mb-0 text-danger">Qr</h6>
                                        </div>
                                    </div>
                                </div>
                                <center>
                                    <div id="codigo_img" class="flex justify-center my-3" style="align-content: center">

                                    </div>
                                        <div class="gap-2 mx-auto my-3 d-grid col-6">
                                            <button class="btn btn-secondary" type="button" id="download_qr"><i class="bi bi-download me-2"></i>Descargar</button>
                                        </div>
                                </center>
                                
                            </div>
                        </div>

                        <div class="col-12 col-xl-8">
                            <div class="card card-plain h-100">
                                <div class="p-3 pb-0 card-header">
                                    <div class="row">
                                        <div class="col-md-8 d-flex align-items-center">
                                            <h6 class="mb-0 text-danger">Informacion del Evento</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 card-body">
                                    <hr class="my-2">
                                    <ul class="list-group">
                                        <li class="pt-0 text-sm border-0 list-group-item ps-0"><strong
                                                class="text-dark">Nombre
                                                del Evento:</strong> {{ $evento->nombre_evento }}

                                        </li>
                                        <li class="text-sm border-0 list-group-item ps-0"><strong class="text-dark">
                                                Direccion:</strong> {{ $evento->direccion }}
                                        </li>
                                        <li class="text-sm border-0 list-group-item ps-0"><strong class="text-dark">
                                                Fecha:</strong> {{ $evento->fecha }}
                                        </li>
                                        <li class="text-sm border-0 list-group-item ps-0"><strong class="text-dark">
                                                Hora:</strong> {{ $evento->hora }}
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            @role('Fotografo')
                                <form action="{{ route('fotografia.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $catalogo->id }}" name="catalogo">
                                    <div class="my-3 col-12 col-xl-12">
                                        <div class="card card-plain h-100">
                                            <div class="p-3 pb-0 card-header">
                                                <div class="row">
                                                    <div class="col-md-8 d-flex align-items-center">
                                                        <h6 class="mb-0 text-danger">Subir Imagenes al Catalogo</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-3 card-body">
                                                <input class="form-control" type="file" id="formFile" name="file[]"
                                                    multiple>
                                                <div class="row" style="margin-top:2px;">
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <label for="precio" class="col-sm-2 col-form-label">Precio</label>
                                                        <input type="precio" class="form-control" id="precio"
                                                            name="precio">
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <label for="tipo" class="col-sm-2 col-form-label">Tipo</label>
                                                        <select class="mb-3 form-select" aria-label="Default select example"
                                                            id="tipo" name="tipo">
                                                            <option selected disabled>--Escoja una opcion--</option>
                                                            <option value="1">Publica</option>
                                                            <option value="2">Privada</option>
                                                        </select>
                                                    </div>
                                                    <div class="my-4 col-xs-4 col-sm-4 col-md-4">
                                                        <div class="gap-2 mx-auto d-grid col-6">
                                                            <button class="btn btn-secondary" type="submit">Guardar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @endrole
                        </div>
                        <div class="my-3 col-12 col-xl-12">
                            <div class="card card-plain h-100">
                                <div class="p-3 pb-0 card-header">
                                    <div class="p-2 row justify-content-around">
                                        <div class="col-md-8 d-flex align-items-center">
                                            <h6 class="mb-0 text-danger">Imagenes del Catalogo</h6>
                                        </div>
                                        <div class="col-2">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="container2">
                                    @if (count($fotografias) > 0)
                                        @foreach ($fotografias as $fotografia)
                                            <label class="card2">
                                                <input type="checkbox" name="category" id="category">
                                                <div class="card2-content2">
                                                    <img src="{{ $fotografia->direccion_img }}" alt="">
                                                    <div class="content2">
                                                        <p><strong>Precio: {{$fotografia->precio}}</strong></p>
                                                    </div>
                                                </div>
                                            </label>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <script defer src=" {{ asset('js/qrious.min.js') }}"></script> --}}
                {{-- <script src="{{ asset('js/qr-code.js') }}"></script> --}}
                <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"
                    integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA=="
                    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <script>
                    // Generar CodeQR
                    const image = document.getElementById("codigo_img")
                    const url = window.location.href

                    console.log(url);

                    const QR = new QRCode(image)
                    QR.makeCode(url)

                    //Descargar Code QR
                    const image_qr = document.getElementById("download_qr")

                    image_qr.addEventListener("click", () => {
                        const enlace = document.createElement("a")
                        enlace.href = image.querySelector('img').src;
                        enlace.download = "Codigo QR generado desde PHOTOGRAPHY"
                        enlace.click()
                    })
                </script>
                
    </body>

@endsection
