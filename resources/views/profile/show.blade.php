@extends('layouts.banner')
@section('title', 'perfil')

@section('main')

    <head>
        <link rel="stylesheet" href="{{ asset('css/img.css') }}">
    </head>
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
                            <form action="{{ route('profile.update_photo') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="p-3 card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <input class="form-control" type="file" id="formFile" name="file[]"
                                                multiple>

                                        </div>
                                        <div class="col-4 ">
                                            <button class="btn btn-secondary" type="submit">Guardar</button>
                                        </div>

                                        <div class="container2">
                                            @foreach ($foto_perfils as $foto_perfil)
                                                <label class="card2">
                                                    <input type="checkbox" name="category" id="category">
                                                    <div class="card2-content2">
                                                        <img src="{{ $foto_perfil->direccion_img }}" alt="">
                                                    </div>
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .container2 {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
        }

        .card2 {
            position: relative;
            height: 300px;
            width: 340px;
            margin: 10px;
        }

        .card2:active {
            transform: scale(0.96);
        }

        .card2 input:checked~.card2-content2 {
            border-color: #4580E5;
        }

        .card2 input {
            position: absolute;
            visibility: hidden;
            opacity: 0;
        }

        .card2 .card2-content2 {
            position: relative;
            cursor: pointer;
            height: 100%;
            width: 100%;
            overflow: hidden;
            border-radius: 12px;
            border: 3px solid #ffffff;
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.02);
        }

        .card2 img {
            position: relative;
            height: 100%;
            width: 400px;
            left: 50%;
            transform: translate(-50%, 0);
            transition: all ease 0.3s;
        }

        .card2:hover img {
            width: 100%;
            height: 240px;

        }

        .card2 input:checked~.card2-content2 img {
            filter: grayscale(0.4);
        }

        .content2 h4 {
            margin: 0 0 8px 0;
        }

        .content2 p {
            margin: 0;
            line-height: 1.5;
        }

        .content2 {
            position: absolute;
            bottom: -122px;
            width: 100%;
            padding: 12px;
            background-color: #ffffff;
            transition: all ease 0.3s;
        }

        .card2:hover .content2 {
            bottom: 0;
        }

        .card2 input:checked~.card2-content2::before,
        .card2 input:checked~.card2-content2::after {
            content: '';
            position: absolute;
            z-index: 1;
        }

        .card2-content2::before {
            height: 20px;
            width: 20px;
            top: 10px;
            right: 10px;
            border: 1px solid #ffffff;
            border-radius: 50%;
            background-color: #4580E5;
        }

        .card2-content2::after {
            height: 4px;
            width: 8px;
            top: 16px;
            right: 16px;
            border: 1px solid #ffffff;
            border-width: 0 0 2px 2px;
            transform: rotate(-45deg);
        }
    </style>
@endsection
