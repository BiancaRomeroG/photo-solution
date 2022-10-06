@extends('layouts.banner')
@section('title', 'banner')

@section('main')
    <div class="px-2 container-fluid px-md-3">
        <div class="card">
            <div class="p-4 pb-2 card-header">
                <div class="row justify-content-between">
                    <div class="col col-sm-6">
                        <h4 class="text-dark" class="card-title">Eventos</h4>
                    </div>
                    <div class="col-6 col-md-auto col-sm-6">
                        {{-- @can('Crear areas') --}}
                        <a href="{{route('fotografo.index')}}" class="btn btn-sm btn-dark">Agregar nuevo evento</a>
                        {{-- @endcan --}}
                    </div>
                </div>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <div class="bg-gray-100 shadow-lg card">
                    <div class="table-responsive">
                        <table class="table mb-0 align-items-center" id="tabla">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nº
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nombre del Evento</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Direccion</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Fecha</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Hora</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Opciones</th>
                                </tr>
                            </thead>
                        <tbody>
                            @foreach ($eventos as $evento )
                            <tr>
                                <td class="text-center align-center">
                                    <div class="px-2 py-1 d-flex">
                                        <span
                                            class="text-xs text-secondary font-weight-normal">1</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-1 d-flex">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h4 class="mb-0 text-xs">{{ $evento->nombre_evento }}
                                            </h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-1 d-flex">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h4 class="mb-0 text-xs">{{ $evento->direccion }}
                                            </h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-1 d-flex">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h4 class="mb-0 text-xs">{{ $evento->fecha }}
                                            </h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-1 d-flex">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h4 class="mb-0 text-xs">{{ $evento->hora }}
                                            </h4>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </div>
                </div>

            @endsection
