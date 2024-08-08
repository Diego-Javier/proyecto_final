@extends('plantilla2')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@section('Titulo')
Inicio/Indie
@endsection

@section('menu')
<nav class="menu-principal">
                <ul>
                    <li> <a href="/">INICIO</a></li>
                    <li> <a href="/nosotros">NOSOTROS</a></li>
                    <li> <a href="/servicios">SERVICIOS</a></li>
                </ul>
            </nav>
@endsection
@section('contenido')
<h1>Edicion de Usuario</h1>
    <section class="formulario">

<form  method="POST" action="{{route('usuarios.update', $id)}}">

    @csrf @method('PATCH')

    <div class="nombre">
    <input id="input_id" type="text" placeholder="Nombre" name="name" value="{{$id->nombre}}">
    {!! $errors->first('name', '<small>:message</small><br>') !!}
    </div>

    <div class="email">
    <input id="input_id" placeholder="Email..." name="email" value="{{$id->email}}">
    {!! $errors->first('email', '<small>:message</small><br>') !!}
    </div>

    <div class="contrasena">
    <input id="input_id" type="password" placeholder="Contraseña" name="password" value="{{$id->contraseña}}">  
    {!! $errors->first('password', '<small>:message</small><br>') !!}
    </div>
    <br>


    <div class="btn">
    <button type="submit" class="btn">Guardar</button>
    </div>

</form>
</section>
@endsection