@extends('layouts.banner')
@section('title', 'banner')

@section('main')
    <div class="container-fluid px-2 px-md-3">
        <div class="card">
            <div class="card-header row mt-3">
                <div class="col-6 col-lg-6 justify-start">
                    <h5 class="font-weight-bolder" style="display: inline-block">&nbsp;&nbsp; Catalogo</h5>
                </div>

            </div>
            <hr class="m-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-xl-4">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0 text-danger">Qr</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-8">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0 text-danger">Informacion del Evento</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <hr class="my-2">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nombre
                                            del Evento:</strong>

                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                            Direccion:</strong>
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                            Fecha:</strong>
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                            Hora:</strong>
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                            Fotografo:</strong>
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                            Organizador:</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-12 my-3">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0 text-danger">Imagenes del Catalogo</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <input class="form-control" type="file" id="formFile">
                                <div class="row" style="margin-top:2px;">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <label for="precio" class="col-sm-2 col-form-label">Precio</label>
                                        <input type="precio" class="form-control" id="precio">
                                    </div>
                                    <div class="col-xs-64 col-sm-4 col-md-4">
                                        <label for="tipo" class="col-sm-2 col-form-label">Tipo</label>
                                        <select class="form-select mb-3" aria-label="Default select example" id="tipo">
                                            <option selected>---Escoja una opcion---</option>
                                            <option value="1">Publica</option>
                                            <option value="2">Privada</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-64 col-sm-4 col-md-4">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
