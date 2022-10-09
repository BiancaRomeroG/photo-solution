@extends('layouts.banner')
@section('title', 'banner')

@section('main')

    <!-- Sale & Revenue Start -->
    <div class="px-4 pt-4 container-fluid">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="p-4 rounded bg-light d-flex align-items-center justify-content-between">
                    <i class="fa fa-chart-line fa-3x text-dark"></i>
                    <div class="ms-3">
                        <p class="mb-2">Vistas de Catalogo</p>
                        <h6 class="mb-0">1.2 M</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="p-4 rounded bg-light d-flex align-items-center justify-content-between">
                    <i class="fa fa-chart-bar fa-3x text-dark"></i>
                    <div class="ms-3">
                        <p class="mb-2">Ventas de Fotografias</p>
                        <h6 class="mb-0">$580</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="p-4 rounded bg-light d-flex align-items-center justify-content-between">
                    <i class="fa fa-chart-area fa-3x text-dark"></i>
                    <div class="ms-3">
                        <p class="mb-2">Eventos Realizados</p>
                        <h6 class="mb-0">25</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="p-4 rounded bg-light d-flex align-items-center justify-content-between">
                    <i class="fa fa-chart-pie fa-3x text-dark"></i>
                    <div class="ms-3">
                        <p class="mb-2">Ganancias Finales</p>
                        <h6 class="mb-0">$1234</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <!-- Calendar -->
    <div class="col-sm-12 col-md-6 col-xl-4">
        <div class="h-100 bg-light rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Calendario</h6>
            </div>
            <div id="calender"></div>
        </div>
    </div>

    

            
        </div>
    </div>

@endsection
