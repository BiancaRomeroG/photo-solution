<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="p-0 m-0 bg-white container-fluid position-relative d-flex">
        <!-- Spinner Start -->
        <div id="spinner"
            class="bg-white show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="pb-14 sidebar pe-auto">
            <nav class="navbar bg-light navbar-light">
                <div class="mb-4 d-flex align-items-center ms-4">
                    <h5 class="text-dark"><i class="fa fa-hashtag me-2"></i>PHOTO SOLUTION</h5>
                </div>

                <div class="w-100 navbar-nav">
                    <a href="{{route('dashboard')}}" class="nav-item nav-link active"><i
                            class="fa fa-tachometer-alt me-2"></i>Home</a>
                    <div class="nav-item">
                        <a href="{{ route('fotografo.index') }}" class="nav-link "><i
                                class="fa fa-laptop me-2"></i>Fotografos</a>
                    </div>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Mis Eventos</a>
                    <a href="{{route('paquetes.index')}}" class="nav-item nav-link"><i class="bi bi-folder-fill me-2"></i>Mis Paquetes</a>
                    <a href="form.html" class="nav-item nav-link"><i class="bi bi-camera-fill me-2"></i>Catalogo</a>
                    <a href="table.html" class="nav-item nav-link"><i class="bi bi-credit-card-2-back-fill me-2"></i>Planes de Pago</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="px-4 py-0 navbar navbar-expand bg-light navbar-light sticky-top">
                <form class="d-none d-md-flex ms-4">
                    <input class="border-0 form-control" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Mensajes</span>
                        </a>

                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificaciones</span>
                        </a>

                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('img/avatar/avatar-face-02.png') }}"
                                alt="" style="width: 40px; height: 40px;">
                            <span
                                class="d-none d-lg-inline-flex">{{ Auth::user()->name . ' ' . Auth::user()->apellido }}</span>
                        </a>
                        <div class="m-0 border-0 dropdown-menu dropdown-menu-end bg-light rounded-0 rounded-bottom">
                            <form action="{{ route('profile.show') }}" method="GET" name="profilebutton">
                                <a class="dropdown-item" onclick="profile()">
                                    <i data-feather="user" aria-hidden="true"></i>
                                    <span>Perfil</span>
                                </a>
                            </form>
                            <form action="{{ route('logout') }}" method="POST" name="submitbutton"> @csrf
                                <a class="dropdown-item" onclick="submit()">
                                    <i data-feather="log-out" aria-hidden="true"></i>
                                    <span>Log out</span>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <!-- ! Main -->
            <main>
                <div>
                    @section('main')

                    @show
                </div>
            </main>


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main-dash.js') }}"></script>

    <script>
        function submit() {
            submitbutton.submit();
        }
    </script>
    <script>
        function profile() {
            profilebutton.submit();
        }
    </script>
</body>

</html>