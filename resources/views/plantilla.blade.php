<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="icon" href="{{asset('imagenes/LogoSI.png')}}">
	<title>@yield('Titulo','/Indie')</title>
    <style>
        
        html{
            scroll-behavior: smooth;
        }

        .mapa{

    margin:100px;
}
@media screen and (min-width: 480px){
    .buscar:hover > .buscar-texto{
        width: 200px;
    }
}

@media screen and (min-width: 768px){
    .buscar:hover > .buscar-texto{
        width: 300px;
    }
}
#input_id::placeholder {
  color:white;
}
#buscador::placeholder {
  color:white;
}
.body-2{
    background-image: linear-gradient(rgba(0,0,0,0.5),
    rgba(0,0,0,0.5)), url(imagenes/fondo-buscar.jpg);
    height: 100vh;
    background-size: cover;
    display:flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.card .card_lan{
    position: relative;
    width: 100%;
    height: 100%;
    box-shadow: 0 5px 10px #000;
    background: linear-gradient(transparent 80%, #000), var(--i);
    background-position: center;
    background-size:cover;
    z-index: 100;

}

        .header
{
    
    background-image: url(imagenes/39906.jpg);
    background-size: 100%;
    background-repeat: no-repeat;
}


.notificaciones
{
    height: auto;
    overflow: hidden;
    background-image: url(imagenes/39906.jpg);
    background-size: 100%;
    background-repeat: no-repeat;
    padding: 80px 0px;
    color: #fff;
}
.pie-pagina {
    width: 100%;
    background-image: url(imagenes/39906.jpg);
}
.hero-nos {
    padding-top: 50px;
    width: 100%;
    height: 70vh;
    background: url(imagenes/uni.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
    
}
.hero {
   padding-top: 50px;
   width: 100%;
   height: 70vh;
   background-image: linear-gradient(180deg, #0000008c 0%, #0000008c 100% ), url('imagenes/servicios.jpg');
   background-repeat: no-repeat;
   background-size: cover;
   text-align: center;
   clip-path: polygon(0 0, 100% 0, 100% 80%, 50% 90%, 0 80%);
   
}
.subtitulo{
   color: #1181E6;
   font-size: 2rem;
   margin-bottom: 25px;
}
.h2-sub {
    padding-top: 100px;
    font-size: 3rem;
    font-family: 'Poppins', sans-serif;
    color: #1181E6;
    font-weight: 600;
    line-height: .4;
    
}

.fil {
    text-transform: uppercase;
    font-size: 3rem;
    
}

.head {
    color: #fff;
    font-size: 3.7rem;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    font-weight: 900;
    letter-spacing: .5rem;
}

.he-des h5 {
    color: #fff;
    font-size: 1.4rem;
    font-weight: 100;
    text-transform: uppercase;
    margin-bottom: 1.2rem;
    letter-spacing: 3px;
    margin-right: -3px;
}
.subtitul
    {
        color: beige;
    }
    </style>
</head>

@yield('alerta')

<body>

	<header class="bloque header">
        <a name="Inicio"></a>
        <div class="centrar">
            <div class="logo">
            <a href="/" style="text-decoration: none" class="link-index"><H2 class="logofont-2">Soy Indie</H2> </a>
            </div>
            @yield('menu')
            @yield('menu2')
            
    </header>


    <section>
    	@yield('contenido')
    </section>
    <section>
        @yield('ancla2')
    </section>

    <footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="/">
                    <img src="{{asset('Imagenes/LogoSI.png')}}" alt="Logo de SLee Dw" height ="200px">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>SOBRE NOSOTROS</h2>
            <p>Soy Indie es un proyecto el cual pretende crear una aplicación y página
                web con el objetivo de ser un apoyo y guía para las personas foráneas y próximas
                a independizarse, ya que al ser una experiencia nueva y retadora creemos que brindar
                ayuda no está de más.</p>
           
        </div>
        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="https://www.facebook.com/profile.php?id=100088216321388&mibextid=ZbWKwL"> <img src="{{asset('icon/facebook.svg')}}" class="icon" ></a>
                <a href="https://instagram.com/soy.indie_?igshid=YmMyMTA2M2Y="> <img src="{{asset('icon/instagram.svg')}}" class="icon"></a>
                <a href="https://www.youtube.com/channel/UCOW0SGtjKD1nSfqGRER2cog"> <img src="{{asset('icon/youtube.svg')}}" class="icon"></a>
                <a href=""> <img src="{{asset('icon/twitter.svg')}}" class="icon"></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2023 <b>Soy Indie</b> - Todos los Derechos Reservados.</small>
    </div>
</footer>

</body>
</html>