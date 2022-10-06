@extends('layouts.banner')
@section('title', 'catalogo')

@section('main')
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
                            <div class="p-3 card-body">
                                {!! QrCode::size(300)->generate('Bienvenido a Photo Solution'); !!}
                            </div>
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
                                    <li class="pt-0 text-sm border-0 list-group-item ps-0"><strong class="text-dark">Nombre
                                            del Evento:</strong>

                                    </li>
                                    <li class="text-sm border-0 list-group-item ps-0"><strong class="text-dark">
                                            Direccion:</strong>
                                    </li>
                                    <li class="text-sm border-0 list-group-item ps-0"><strong class="text-dark">
                                            Fecha:</strong>
                                    </li>
                                    <li class="text-sm border-0 list-group-item ps-0"><strong class="text-dark">
                                            Hora:</strong>
                                    </li>
                                    <li class="text-sm border-0 list-group-item ps-0"><strong class="text-dark">
                                            Fotografo:</strong>
                                    </li>
                                    <li class="text-sm border-0 list-group-item ps-0"><strong class="text-dark">
                                            Organizador:</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

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
                                <input class="form-control" type="file" id="formFile">
                                <div class="row" style="margin-top:2px;">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <label for="precio" class="col-sm-2 col-form-label">Precio</label>
                                        <input type="precio" class="form-control" id="precio">
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <label for="tipo" class="col-sm-2 col-form-label">Tipo</label>
                                        <select class="mb-3 form-select" aria-label="Default select example" id="tipo">
                                            <option selected>---Escoja una opcion---</option>
                                            <option value="1">Publica</option>
                                            <option value="2">Privada</option>
                                        </select>
                                    </div>
                                    <div class="my-4 col-xs-4 col-sm-4 col-md-4">
                                        <div class="gap-2 mx-auto d-grid col-6">
                                            <button class="btn btn-secondary" type="button">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 col-12 col-xl-12">
                        <div class="card card-plain h-100">
                            <div class="p-3 pb-0 card-header">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0 text-danger">Imagenes del Catalogo</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 card-body">
                                
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection
