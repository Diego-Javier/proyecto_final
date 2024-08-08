@extends('plantilla')
<link rel="stylesheet" type="text/css" href="css/crud.css">

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
<section>
<div>
<h3>Administracion de Usuarios</h3>
</div>
<br><br>
{{-- <div class="wrapper">
    <div class="main-div main-div2">
      <h1>Edición</h1>
    </div>
    <div class="main-div main-div3">
      <h1>Eliminación</h1>
    </div>
  </div> --}}

<div>
<h3>Lista de usuarios</h3>
</div>
    <br><br>

    <table class="table">
        
        @if ($var_usuarios)
        @foreach($var_usuarios as $i)
        <tr><td><a href="{{route('usuarios.show', $i)}}"> {{ $i->nombre}}</a><br>
        </td></tr>
        @endforeach
        @else
        <p>No hay materias para mostrar</p>
        @endif
              
    </table>

    <script src="js/palabra.js"></script>
</section>
@endsection