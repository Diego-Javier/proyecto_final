@extends('plantilla')
<link rel="stylesheet" href="css/nosotros.css">
@section('alerta')
<!--Alerta que indica en que pagina estas -->
<script>
        alert("Has sido dirigido al apartado de NOSOTROS");
</script>
@endsection

@section('Titulo')
Nosotros/Indie
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
<!--Seccion de inicio-->
    <section class="hero-nos">
        <div class="container">
            <h2 class="h2-sub">
                <span class="fil">B</span>ienvenido
            </h2>
            <h1 class="head">Soy Indie</h1>
            <div class="he-des">
                <h5>NOSOTROS</h5>
                
            </div>
        </div>
        
    </section>
        
     <!--Apartado para cononer los objetivos-->
    <section>
            <div class="nosotros">
                <div class="text">
                    <div class="tit">
                        <h1>Objetivos</h1>
                        <p>
                            El objetivo que tiene nuestro proyecto es el generar
                            ayuda social utilizando las tecnologías de la información,
                            ya que dentro de “Soy Indie” se pretende ser una guía y apoyo
                            para las personas foráneas y próximas a independizarse,
                            ya que al ser una experiencia nueva y retadora creemos que
                            brindar ayuda es importante y significativo, puede ser la diferencia
                            entre el fracaso y el éxito para la vivencia en ésta nueva etapa.
                        </p>
                    </div>
    
                </div>
                <div class="img">
                    <img src="imagenes/nosotros1.png" alt="Foraneos">
                </div>
            </div>
    
    
            <div class="video">
    
                <div class="vd">
                    <iframe width="727" height="409" src="https://www.youtube.com/embed/lODdMoEjEpE" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="text">
                    <div class="tit">
                        <h1>Nuestra Historia</h1>
                        <p>
                            La idea de éste proyecto surgió en el segundo cuatrimestre
                            Enero-Abril 2022, con la materia de Metodología y Modelado
                            de Desarrollo de Software, materia donde se vieron diferentes
                            metodologías para la creación de proyectos y su gestión, por
                            lo mismo, se tuvo que crear uno, a la par que creamos una empresa
                            conformada por nosotros como equipo; dentro de aquella materia se
                            estableció la idea, además de que se trabajó con Task Spring Goals,
                            un Vision Board, en general con la metodología de Scrum y finalizamos
                            realizando un documento IEEE-830 para el proyecto “Soy Indie”.
                        </p>
                    </div>
    
                </div>
            </div>
    
        </section>

    <!--Ancla de regreso al menu-->
    <section>
        <center>
            <a href="#Inicio"><img src="imagenes/ancla.png" width="50px" height="50px"></a>
           </center>
    </section>
@endsection