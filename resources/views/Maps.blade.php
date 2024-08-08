@extends('plantilla')

@section('alerta')
<!--Alerta que indica en que pagina estas -->
<script>
        alert("Has sido dirigido al apartado de Google Maps");
</script>
@endsection
@section('Titulo')
Geolocalización/Indie
@endsection

@section('menu')
<nav class="menu-principal">
                <ul>
                    <li> <a href="/">INICIO</a></li>
                    <li> <a href="/recetas">RECETAS</a></li>
                </ul>
            </nav>
@endsection

@section('contenido')
<section class="mapa">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7428.022975286624!2d-104.89646243421146!3d21.42879345853131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84273123eaaaf2b9%3A0x16adf6ada41de099!2sUniversidad%20Tecnol%C3%B3gica%20de%20Nayarit!5e0!3m2!1ses!2smx!4v1678844470698!5m2!1ses!2smx" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
@endsection