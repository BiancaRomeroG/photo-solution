@extends('layouts.banner')
@section('title', 'card-fotografo')

@section('main')
<body>
    <!--   Tarjetas-->
    <div class="title-cards">
        <h2 class="strong">Fotografos disponibles</h2>
    </div>
    <div class="container-card">
        @foreach ($fotografos as $fotografo)
            <div class="card">
                
                <div class="contenido-card">
                    <h3>{{ $fotografo->user->name }} {{ $fotografo->user->apellido }}</h3>
                    <p>Correo: {{ $fotografo->user->email }}</p>
                    <p>Telefono: {{ $fotografo->user->telefono }}</p>
                    <p>Carnet de identidad: {{ $fotografo->user->ci }}</p>
                    <p>Foto Estudio: {{ $fotografo->nombre_studio }}</p>
                    <a href="{{route('evento.create', $fotografo->id)}}">Reservar</a>
                    <a href="{{route('paquete.show', $fotografo->id)}}">Ver Paquetes</a>
                </div>
            </div>
        @endforeach
    </div>
    <!--Fin   Tarjetas-->
</body>
 <!--Estilos del Css -->
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}
/*Cards*/
.container-card{
	width: 100%;
	display: flex;
	max-width: 1100px;
	margin: auto;
    flex-wrap: wrap;
}
.title-cards{
	width: 100%;
	max-width: 1080px;
	margin: auto;
	padding: 20px;
	margin-top: 20px;
	text-align: center;
	color: #7a7a7a;
}
.card{
	width: 100%;
	margin: 20px;
	border-radius: 6px;
	overflow: hidden;
	background:#fff;
	box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
	transition: all 400ms ease-out;
	cursor: default;
    flex: 0 0 29%;
}
.card:hover{
	box-shadow: 5px 5px 20px rgba(0,0,0,0.4);
	transform: translateY(-3%);
}
.card img{
	width: 100%;
	height: 210px;
}
.card .contenido-card{
	padding: 15px;
	text-align: center;
}
.card .contenido-card h3{
	margin-bottom: 15px;
	color: #7a7a7a;
}
.card .contenido-card p{
	line-height: 1.8;
	color: #6a6a6a;
	font-size: 14px;
	margin-bottom: 5px;
}
.card .contenido-card a{
	display: inline-block;
	padding: 10px;
	margin-top: 10px;
	text-decoration: none;
	color: #2fb4cc;
	border: 1px solid #2fb4cc;
	border-radius: 4px;
	transition: all 400ms ease;
	margin-bottom: 5px;
}
.card .contenido-card a:hover{
	background: #2fb4cc;
	color: #fff;
}

@media only screen and (min-width:320px) and (max-width:768px){
	.container-card{
		flex-wrap: wrap;
	}
	.card{
		margin: 15px;
	}
}
</style>
@endsection
