@extends('plantilla2')
<link rel="stylesheet" href="{{asset('css/login.css')}}">

@section('Titulo')
Registro | Indie
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

<h2 class="login">Registrarse</h2>

<form  method="POST" action="{{route('usuarios.store')}}">

	@csrf

	<div class="nombre">
	<input id="input_id" type="text" placeholder="Nombre" name="name">
	{!! $errors->first('name', '<small>:message</small><br>') !!}
	</div>

	<div class="email">
	<input id="input_id" placeholder="Email..." name="email">
	{!! $errors->first('email', '<small>:message</small><br>') !!}
	</div>

	<div class="contrasena">
	<input id="input_id" type="password" placeholder="Contraseña" name="password">	
	{!! $errors->first('password', '<small>:message</small><br>') !!}
	</div>
	
	<div class="contrasena">
	<input id="input_id" type="password" placeholder="Confirmar Contraseña" name="password_confirmar">	
	{!! $errors->first('password_confirmar', '<small>:message</small><br>') !!}
	</div>
	<br>

	<div class="btn">
	<button type="submit" class="btn">Registrarme</button>
	</div>

</form>
</section>
@endsection