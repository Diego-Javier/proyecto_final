@extends('plantilla')
<link rel="stylesheet" href="css/login.css">
@section('Titulo')
Login/Indie
@endsection
@section('menu')
<nav class="menu-principal">
                <ul>
                    <li> <a href="/">INICIO</a></li>
                    <li> <a href="{{route('usuarios.alta')}}">REGISTRO</a></li>
                    <li> <a href="/login">LOGIN</a></li>
                </ul>
            </nav>
@endsection

@section('contenido')

<section class="formulario">

<h2 class="login">Iniciar Sesion</h2>

<form  method="POST" action="{{route('login')}}">

	@csrf

	<div class="email">
	<input id="input_id" placeholder="Email..." name="email">
	{!! $errors->first('email', '<small>:message</small><br>') !!}
	</div>

	<div class="contrasena">
	<input id="input_id" type="password" placeholder="Contraseña" name="password">	
	{!! $errors->first('password', '<small>:message</small><br>') !!}
	</div>
	<br>

	<div class="btn">
	<button type="submit" class="btn">Ingresar</button>
	</div>

</form>
</section>
@endsection