<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Tarjeta de Crédito Dinámico</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body>
    <div class="contenedor">

        <!-- Tarjeta -->
        <section class="tarjeta" id="tarjeta">
            <div class="delantera">
                <div class="logo-marca" id="logo-marca">
                    <!-- <img src="img/logos/visa.png" alt=""> -->
                </div>
                <img src="img/chip-tarjeta.png" class="chip" alt="">
                <div class="datos">
                    <div class="grupo" id="numero">
                        <p class="label">Número Tarjeta</p>
                        <p class="numero">#### #### #### ####</p>
                    </div>
                    <div class="flexbox">
                        <div class="grupo" id="nombre">
                            <p class="label">Nombre Tarjeta</p>
                            <p class="nombre">Jhon Doe</p>
                        </div>

                        <div class="grupo" id="expiracion">
                            <p class="label">Expiracion</p>
                            <p class="expiracion"><span class="mes">MM</span> / <span class="year">AA</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="trasera">
                <div class="barra-magnetica"></div>
                <div class="datos">
                    <div class="grupo" id="firma">
                        <p class="label">Firma</p>
                        <div class="firma">
                            <p></p>
                        </div>
                    </div>
                    <div class="grupo" id="ccv">
                        <p class="label">CCV</p>
                        <p class="ccv"></p>
                    </div>
                </div>
                <p class="leyenda">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus exercitationem,
                    voluptates illo.</p>
                <a href="#" class="link-banco">www.tubanco.com</a>
            </div>
        </section>

        <!-- Contenedor Boton Abrir Formulario -->
        <div class="contenedor-btn">
            <button class="btn-abrir-formulario" id="btn-abrir-formulario">
                <i class="fas fa-plus"></i>
            </button>
        </div>

        <!-- Formulario -->
        <form action="" id="formulario-tarjeta" class="formulario-tarjeta">
            <div class="grupo">
                <label for="inputNumero">Número Tarjeta</label>
                <input type="text" id="inputNumero" maxlength="19" autocomplete="off">
            </div>
            <div class="grupo">
                <label for="inputNombre">Nombre</label>
                <input type="text" id="inputNombre" maxlength="19" autocomplete="off">
            </div>
            <div class="flexbox">
                <div class="grupo expira">
                    <label for="selectMes">Expiracion</label>
                    <div class="flexbox">
                        <div class="grupo-select">
                            <select name="mes" id="selectMes">
                                <option disabled selected>Mes</option>
                            </select>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="grupo-select">
                            <select name="year" id="selectYear">
                                <option disabled selected>Año</option>
                            </select>
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                </div>

                <div class="grupo ccv">
                    <label for="inputCCV">CCV</label>
                    <input type="text" id="inputCCV" maxlength="3">
                </div>
            </div>
            {{-- <button type="submit" class="btn-enviar" href = "{{route('dashboard')}}">Pagar</button> --}}
            <div class="d-grid gap-2">
                <a class="btn btn-danger btn-lg" href="{{route('dashboard')}}" role="button">Pagar</a>
            </div>

        </form>
    </div>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

</html>
