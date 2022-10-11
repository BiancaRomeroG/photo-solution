@extends('layouts.banner')
@section('title', 'banner')

@section('main')
    <div class="px-2 my-3 container-fluid px-md-5">
        <div class="card">
            <div class="p-4 pb-2 card-header">
                <div class="row justify-content-between">
                    <div class="col col-sm-6">
                        <h4 class="text-dark" class="card-title">Eventos</h4>
                    </div>
                    <div class="col-6 col-md-auto col-sm-6">
                        @role('Organizador')
                        <a href="{{ route('fotografo.index') }}" class="btn btn-sm btn-dark">Agregar nuevo evento</a>
                        @endrole
                    </div>
                </div>
            </div>
            <hr class="m-0">
            <div class="col-12">
                <div class="p-4 rounded bg-light h-100">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nº</th>
                                    <th scope="col">Nombre del Evento</th>
                                    <th scope="col">Direccion</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Hora</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($eventos as $evento)
                                    <tr>
                                        <td class="text-center align-center">
                                            <div class="px-2 py-1 d-flex">
                                                <span>&nbsp;&nbsp;{{ ++$i }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-1 d-flex">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <span scope="col">{{ $evento->nombre_evento }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-1 d-flex">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <span scope="col">{{ $evento->direccion }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-1 d-flex">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <span scope="col">{{ $evento->fecha }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-1 d-flex">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <span scope="col">{{ $evento->hora }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            @if ($evento->estado == 'En proceso')
                                                <span class="badge"
                                                    style="background-color: rgb(255, 68, 0)">{{ $evento->estado }}</span>
                                            @endif
                                            @if ($evento->estado == 'Sin pagar')
                                            <span class="badge"
                                                    style="background-color: rgb(187, 210, 13)">{{ $evento->estado }}</span>
                                            @endif
                                            @if ($evento->estado == 'Pagado')
                                            <span class="badge"
                                                    style="background-color: rgb(5, 185, 74)">{{ $evento->estado }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('catalogo.show', $evento->catalogo->id)}}">
                                                <button class="m-auto btn btn-icon btn-sm btn-secondary" type="button">
                                                    <span class="material-icons"><i
                                                            class="bi bi-images me-2"></i>Catalogo</span>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->

@endsection
