<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Photo Solution</title>


    <!-- Favicons -->
    <link href="{{ asset('import/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('import/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('import/assets/vendor/aos/aos.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('import/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('import/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('import/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('import/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Template Main CSS File -->
    <link href="{{ asset('import/assets/css/style.css') }}" rel="stylesheet" type="text/css">

</head>

<body>



    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">Photo Solution</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
                    <li><a class="nav-link scrollto" href="#about">Sobre Nosotros</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portafolio</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Planes</a></li>
                    <li><a class="nav-link scrollto" href="#team">Equipo</a></li>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                        @else
                            <li><a href="{{ route('login') }}" class="ml-4 text-sm">Iniciar Sesion</a></li>
                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}" class="ml-4 text-sm">Registrate</a></li>
                            @endif
                        @endauth
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
            <h1>Bienvenido a Photo Solution</h1>
            <h2>Photo Solution Pro es la única herramienta del mercado que te permite gestionar tus fotos a nivel
                global; en cualquier momento, en cualquier lugar, y con ello sacar un mayor rendimiento ágilmente. </h2>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="order-1 col-lg-6 order-lg-2" data-aos="fade-left">
                        <img src="{{ asset('import/assets/img/about.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="order-2 pt-4 col-lg-6 pt-lg-0 order-lg-1 content" data-aos="fade-right">
                        <h3>¿QUÉ ES?</h3>
                        <p class="fst-italic">
                            Photo Solution Pro es la única plataforma de gestión diseñada por fotógrafos y concebida
                            exclusivamente para fotógrafos
                            Photo Solution Pro te permite gestionar tu empresa a nivel global; en cualquier momento y en
                            cualquier lugar, para sacar el máximo rendimiento de tus proyectos.
                        </p>
                        <p class="fst-italic">
                            Todas sus funciones están adaptadas al desarrollo de la actividad fotográfica, facilitando
                            el control en todas las fases del trabajo, permitiendo el control total de tu empresa.
                            En definitiva: reducir costes, aumentar tus ventas y ganar en eficacia.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Ganar Dinero</li>
                            <li><i class="bi bi-check-circle"></i> Reduce Estres</li>
                            <li><i class="bi bi-check-circle"></i> Aporta Valor</li>
                            <li><i class="bi bi-check-circle"></i> Vende Calidad</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <section>
                <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
                    <h1 style="color: #B22222">¡Photo Solution es el programa de gestión líder para fotógrafos!</h1>
                </div>
                <div class="container">
            </section>
            <div class="row">

                <div class="col-lg-4" data-aos="fade-up">
                    <div class="box">
                        <span>01</span>
                        <h4>REGISTRATE</h4>
                        <p>Ahora solo tienes que registrar los datos necesarios, ya seas empresa o autónomo, sube tu
                            logo y crea los accesos de tus usuarios. </p>
                    </div>
                </div>

                <div class="mt-4 col-lg-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
                    <div class="box">
                        <span>02</span>
                        <h4>ACCEDE</h4>
                        <p>Identificate para acceder a tu perfil, donde también tendrás opciones de modificar tus datos,
                            foto de perfil, etc</p>
                    </div>
                </div>

                <div class="mt-4 col-lg-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="box">
                        <span>03</span>
                        <h4> GESTIONA</h4>
                        <p>Disfruta de tu empresa on line, solo te hace falta un navegador web y una conexión a internet
                            para poder disfrutar de todos nuestros beneficios.</p>
                    </div>
                </div>

            </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">

                <div class="row d-flex align-items-center">

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{ asset('assets/img/clients/client-1.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{ asset('assets/img/clients/client-2.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{ asset('assets/img/clients/client-3.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{ asset('assets/img/clients/client-4.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{ asset('assets/img/clients/client-5.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{ asset('assets/img/clients/client-6.png') }}" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->





        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <span>Portafolio</span>
                    <h2>Portafolio</h2>
                    <p>Consigue tu carta de presentacion profesional con tus mejores fotografias para tus clientes</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('import/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <a href="{{ asset('import/assets/img/portfolio/portfolio-1.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="App 1"><i class="bx bx-plus"></i></a>
                            {{-- <a href="{{ asset('portfolio-details.html" class="details-link')}}" title="More Details"><i class="bx bx-link"></i></a> --}}
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('import/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="{{ asset('import/assets/img/portfolio/portfolio-2.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('import/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <a href="{{ asset('import/assets/img/portfolio/portfolio-3.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{ asset('import/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <a href="{{ asset('impot/assets/img/portfolio/portfolio-4.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Card 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link')}}" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('import/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href="{{ asset('import/assets/img/portfolio/portfolio-5.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('import/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <a href="{{ asset('import/assets/img/portfolio/portfolio-6.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="App 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{ asset('import/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href="{{ asset('import/assets/img/portfolio/portfolio-7.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Card 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{ asset('import/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <a href="{{ asset('import/assets/img/portfolio/portfolio-8.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Card 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('import/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="{{ asset('import/assets/img/portfolio/portfolio-9.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="section-title">
                    <span>Planes</span>
                    <h2>Planes</h2>
                    <p>Todos nuestros planes a tu disposición para que tu elijas como comenzar y avanzar con nosotros.
                    </p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="150">
                        <div class="box">
                            <h3>Pago Mensual</h3>
                            <h4><sup>$</sup>20<span> / por mes</span></h4>
                            <ul>
                                <li>Publicidad</li>
                                <li>Catalogo</li>
                                <li>Almacenamiento de 1GB</li>
                                <li>Invitacion por Qr</li>
                                <li>Actualizaciones</li>

                            </ul>
                            <div class="btn-wrap">
                                <a href="{{route('register-fotografo')}}" class="btn-buy">Comprar</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 col-lg-4 col-md-6 mt-md-0" data-aos="zoom-in">
                        <div class="box featured">
                            <h3>Pago Semestral</h3>
                            <h4><sup>$</sup>15<span> / por mes</span></h4>
                            <ul>
                                <li>Publicidad</li>
                                <li>Catalogo</li>
                                <li>Almacenamiento de 2GB</li>
                                <li>Invitacion por Qr</li>
                                <li>Actualizaciones</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="{{route('register-fotografo')}}" class="btn-buy">Comprar</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 col-lg-4 col-md-6 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                        <div class="box">
                            <h3>Plan Anual</h3>
                            <h4><sup>$</sup>9<span> / por mes</span></h4>
                            <ul>
                                <li>Publicidad</li>
                                <li>Catalogo</li>
                                <li>Almacenamiento de 5GB</li>
                                <li>Invitacion por Qr</li>
                                <li>Actualizaciones</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="{{route('register-fotografo')}}" class="btn-buy">Comprar</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <span>Equipo</span>
                    <h2>Equipo</h2>
                    <p>Nuestros mejores profesionales a tu servicio.</p>
                </div>

                <div class="row">
                    <div class="d-flex justify-content-center" data-aos="zoom-in">
                        <div class="member">
                            <img src="{{ asset('import/assets/img/team/team-1.jpg') }}" width="320"
                                height="255">
                            <h4>Bianca Romero Guzman</h4>
                            <span>Ingeniera en Sistemas</span>
                            <p>
                                Creadora del Software Photo Solution
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Photo Solution</h3>
                            <p>
                                Santa Cruz de la Sierra <br>
                                <strong>Telefono:</strong> +591 78432632<br>
                                <strong>Correo:</strong> bianca.romero@ficct.uagrm.edu.bo<br>
                            </p>
                            <div class="mt-3 social-links">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Servicios</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre Nosotros</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Portafolio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Precios</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Equipo</a></li>
                        </ul>
                    </div>


                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Contactanos</h4>
                        <p>Envianos tu Correo!</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('import/assets/vendor/aos/aos.js ') }}"></script>
    <script src="{{ asset('import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('import/assets/vendor/glightbox/js/glightbox.min.js ') }}"></script>
    <script src="{{ asset('import/assets/vendor/isotope-layout/isotope.pkgd.min.js ') }}"></script>
    <script src="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.js ') }}"></script>
    <script src="{{ asset('import/assets/vendor/php-email-form/validate.js ') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('import/assets/js/main.js') }}"></script>

</body>

</html>