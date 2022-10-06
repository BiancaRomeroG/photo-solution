@extends('layouts.banner')
@section('title', 'perfil')

@section('main')

    <div class="px-2 container-fluid px-md-4">
        <div class="mt-4 page-header min-height-300 border-radius-xl"
            style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="mx-3 card card-body mx-md-4 mt-n6">
            <div class="mb-2 row gx-4">
                <div class="col-auto">
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ Auth::user()->name . ' ' . Auth::user()->apellido }}
                        </h5>
                        <p class="mb-0 text-sm font-weight-normal">

                        </p>
                    </div>
                </div>
                <div class="mx-auto mt-3 col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="p-1 nav nav-pills nav-fill" role="tablist">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="card card-plain h-100">
                            <div class="p-3 pb-0 card-header">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0">Informacion del Perfil</h6>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <a href="javascript:;">
                                            <i class="text-sm fas fa-user-edit text-secondary" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit Profile"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 card-body">
                                {{-- <p class="text-sm">
                        Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).
                      </p> --}}
                                <hr class="my-2 horizontal gray-light">
                                <ul class="list-group">
                                    <li class="pt-0 text-sm border-0 list-group-item ps-0"><strong
                                            class="text-dark">Nombre:</strong> &nbsp; {{ Auth::user()->name }}</li>
                                    <li class="text-sm border-0 list-group-item ps-0"><strong class="text-dark">Apellido
                                            Paterno:</strong> &nbsp; {{ Auth::user()->apellido }}</li>
                                    <li class="text-sm border-0 list-group-item ps-0"><strong class="text-dark">Carnet
                                            de Identidad:</strong> &nbsp; {{ Auth::user()->ci }}</li>
                                    <li class="text-sm border-0 list-group-item ps-0"><strong
                                            class="text-dark">Telefono:</strong> &nbsp; {{ Auth::user()->telefono }}
                                    </li>
                                    <li class="text-sm border-0 list-group-item ps-0"><strong
                                            class="text-dark">Email:</strong> &nbsp; {{ Auth::user()->email }}</li>
                                    <li class="pb-0 border-0 list-group-item ps-0">
                                        <strong class="text-sm text-dark">Social:</strong> &nbsp;
                                        <a class="py-0 mb-0 btn btn-facebook btn-simple ps-1 pe-2" href="javascript:;">
                                            <i class="fab fa-facebook fa-lg"></i>
                                        </a>
                                        <a class="py-0 mb-0 btn btn-twitter btn-simple ps-1 pe-2" href="javascript:;">
                                            <i class="fab fa-twitter fa-lg"></i>
                                        </a>
                                        <a class="py-0 mb-0 btn btn-instagram btn-simple ps-1 pe-2" href="javascript:;">
                                            <i class="fab fa-instagram fa-lg"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="my-3 card card-plain h-100">
                            <div class="p-3 pb-0 card-header">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0">Fotos de Perfil</h6>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <a href="javascript:;">
                                            <i class="text-sm fas fa-user-edit text-secondary" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit Profile"></i>
                                        </a>
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
    </div>



@endsection
