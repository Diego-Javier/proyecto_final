@extends('plantilla')
<link rel="stylesheet" href="css/servicios.css">
@section('alerta')
<!--Alerta que indica en que pagina estas -->
<script>
    alert("Has sido dirigido al apartado de SERVICIOS");
</script>
@endsection
@section('Titulo')
Servicios/Indie
@endsection

@section('menu')
<nav class="menu-principal">
                <ul>
                    <li> <a href="/">INICIO</a></li>
                    <li> <a href="/nosotros">NOSOTROS</a></li>
                    <li> <a href="/servicios">SERVICIOS</a></li>
                    <li> <a href="{{route('usuarios.alta')}}">REGISTRO</a></li>
                </ul>
            </nav>
@endsection

@section('contenido')
 <!--Apartado de inicio-->
    <section class="hero">
        <div class="container">
            <h2 class="h2-sub">
                <span class="fil">B</span>ienvenido
            </h2>
            <h1 class="head">Soy Indie</h1>
            <div class="he-des">
                <h5>Servicios</h5>
                
            </div>
        </div>
        <a href="#contenedor" class="cta">Servicios brindados</a>
    </section>

<section class="contenedor-1">
        <br>
        <a name="contenedor"></a>
        <h2 class="subtitulo">Servicios que brinda Soy Indie</h2>
        <p class="para">Nosotros te ayudamos a que tengas una mejor experiencia </p>
        <div class="main">
             <article class="icons">
                <a href="/maps"><img src="icon/mapa.svg" class="icon"></a>
                <h3 class="titulo">SUCURSAL</h3>
                <p class="para">Da click aquí para conocer la hubicación de nuestra sucursal. ¿Te gustaría visitarnos?</p>
            </article>

            {{--
            <article class="icons">
                <img src="icon/mapa.svg" class="icon">
                <h3 class="titulo">###</h3>
                <p class="para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt minus commodi laborum 
                    cupiditate a error sunt nesciunt reprehenderit animi sapiente totam consequatur amet vero delectus hic, explicabo perspiciatis blanditiis nihil?</p>
            </article> 
            --}}


            <article class="icons">
                <a href="/recetas"><img src="icon/recetas.svg" class="icon"></a>
                <h3 class="titulo">RECETAS</h3>
                <p class="para">En este apartado podras descubrir un gran número
                de recetas que son sencillas de preparar y a un bajo costo.</p>
            </article>
        </div>
        
    </section>
    
    <!--Apartado de preguntas frecuentes-->
    <section class="preguntas">
        <h2 class="subtitulo">Preguntas frecuentes</h2>
        <p class="para">En esta sección podras encontrar las preguntas que se realizan con mayor frecuencia, derivadas de nuestros servicios.</p>

        <section class="preguntas_">
            <article class="padding">
                <div class="questions">
                    <h3 class="titulo_preg">¿Como puedo comunicarme con ustedes? 
                        <span class="preguntas_flec"> 
                            <img src="./icon/flecha.svg" class="test_img">
                        </span>
                    </h3>
                    <p class="paras">Soy Indie te muestra nuestras redes sociales y correo electronico en la parte inferior de nuestra pagina, donde podrás contactarnos.</p>
                </div>
            </article>
        </section>

        <div class="preguntas_">
            <article class="padding">
                <div class="questions">
                    <h3 class="titulo_preg">¿Han probado todas sus recetas? 
                        <span class="preguntas_flec"> 
                            <img src="./icon/flecha.svg" class="test_img">
                        </span>
                    </h3>
                    <p class="paras">Claro que si! Son deliciosas y algunas hasta entretenidas de preparar. Un dato curioso: nosotros los desarrolladores preferimos las enchiladas con queso.</p>
                </div>
            </article>
        </div>

        <div class="preguntas_">
            <article class="padding">
                <div class="questions">
                    <h3 class="titulo_preg">¿Cual ha sido la receta más rara que han creado? 
                        <span class="preguntas_flec"> 
                            <img src="./icon/flecha.svg" class="test_img">
                        </span>
                    </h3>
                    <p class="paras">Esa es una anécdota divertida, pero en resumen a uno de nosotros le pareció buena idea ponerle gomitas panditas a su café... </p>
                </div>
            </article>
        </div>
    </section>
        <script src="js/questions.js"></script>

        <section>
            <center>
                <a href="#Inicio"><img src="imagenes/ancla.png" width="50px" height="50px"></a>
               </center>
        </section>
@endsection