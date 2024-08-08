@extends('plantilla2')
<link rel="stylesheet" href="{{asset('css/usuarios.css')}}">
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
<br/>
<h1>Usuario: {{$i->nombre}}</h1>

<table class="table">
  <tr>

    <td>Usuario:</td>
    <td>Correo Electronico:</td>
    <td>Contraseña:</td>
    <td>Fecha de Registro:</td>

  </tr>

  <tr>
    <td>{{$i->nombre}}</td>
    <td>{{$i->email}}</td>
    <td>{{$i->contraseña}}</td>
    <td>{{$i->created_at}}</td>

  </tr>

</table>

<div class="crud">
<form method="post">
        @csrf @method('DELETE')
        <button class="btn-crud">Eliminar Usuario <img class="Eliminar"></button>
    </form>
    <button class="btn-crud"><a href="{{route('usuarios.edit', $i)}}">Editar usuario</a></button>
</div>

<br><br><br>
@endsection