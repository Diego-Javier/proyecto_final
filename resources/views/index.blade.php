@extends('plantilla')
@section('alerta')
<script>
        alert("Bienvenid@ a SOY INDIE");
</script>
@endsection
@section('Titulo')
Inicio/Indie
@endsection

@section('menu')
<nav class="menu-principal">
                <ul>
                    <li> <a href="/">INICIO</a></li>
                    <li> <a href="/nosotros">NOSOTROS</a></li>
                    <li> <a href="/servicios">SERVICIOS</a></li>
                    <li> <a href="{{route('usuarios.alta')}}">REGISTRO</a></li>
                    <li> <a href="{{route('usuarios.index')}}">ADMINISTRACIÓN</a></li>

                </ul>
            </nav>
@endsection
@section('menu2')
            <div class="centrar">
                <div class="izquierda">
                    <h4 class="subtitul">Me dijeron "Estudia que llegarás lejos" y aqui estoy a 2300 KM de casa</h4> <br>
                    <h4 class="logofont">El secreto del EXITO es ordenar tu tiempo</h4>
    
                <br>
                <br>
                </div>
                <div class="derecha">
                    <img src="Imagenes/estudiantes1.png" class="img-pres">
                </div>
            </div>
@endsection
@section('contenido')
<div class="bloque elegir">
        <div class="centrar">
            <div class="izquierda">
                <img src="Imagenes/estudiantes2.png" class="img-elige">
            </div>
            <div class="derecha elegir">
                <h4 class="texto-naranja">AYUDEMOS A LOS FORANEOS</h4>
        <br>
                <h1>¿POR QUÉ ELEGIRNOS? </h1>
                <br>
                <P>Soy Indie es un proyecto el cual pretende ser un apoyo y guía para las personas foráneas y próximas a independizarse,
                    ya que al ser una experiencia nueva y retadora creemos que brindar ayuda no está de más.
                </p>
                    
                    <br>
                    <br>
                    Ayudar y mejorar la vivencia de una persona que se muda a otra ciudad u otro pais.
                    
                </P>
                <br> <br>
        
                <div class="opciones">
                   
                    <div class="opcion">
                        <img src="imagenes/profesional.png" class="img-opciones">
                        <h4 class="texto-opciones">Profesionalismo</h4>
                    </div>
                    <div class="opcion">
                        <img src="imagenes/capacitacion.png" class="img-opciones">
                        <h4 class="texto-opciones">Personal Capacitado</h4>
                    </div>
                    <div class="opcion">
                        <img src="imagenes/comprometidos-negocio.png" class="img-opciones">
                        <h4 class="texto-opciones">Comprometidos</h4>
                    </div>
                    <div class="opcion">
                        <img src="imagenes/responsabilidad.png" class="img-opciones">
                        <h4 class="texto-opciones">Responsabilidad</h4>
                    </div>
        
        
                </div>
        
            </div>
        </div>
        </div>

        {{--
        <div class="bloque notificaciones">
            <div class="centrar">
                <h4>¿Tienes algún inconveniente?</h4> <br>
                <h1>Contactanos ahora para obtener atención lo más pronto posible!</h1> <br>
        
                <div class="form-notificaciones">
                    <input type="text" name="nombre" class="entrada-not" placeholder="Nombre">
                    <input type="email" name="correo" class="entrada-not" placeholder="E-Mail">
                    <input type="submit" name="enviar" value="CONTACTANOS" class="boton-not">
                </div>
            </div>
          </div>
        --}}
          <div class="bloque servicios">
            <div class="centrar">
              <h4 class="texto-naranja"> LISTA DE SERVICIOS </h4>
              <H1 class="principal-servicios"> NUESTROS SERVICIOS</H1>
            </div>
            <div class="centrar contenedores">
        
              <div class="contenidos">
                <img src="Imagenes/vivienda.png" class="img-servicios">
                <h4 class="titulo-servicio">Registro</h4>
                <P class="parrafo">No te pierdas el ser parte de esta gran familia independiente y recuerda nuestro lema "Soy Independiente Siendo Fuerte, Soy Inide".
                </P>
              </div>
        
              <div class="contenidos">
                <img src="Imagenes/alimentos.png" class="img-servicios">
                <h4 class="titulo-servicio">ALIMENTOS</h4>
                <P class="parrafo">Tenemos todo tipo de alimento para tu salud y bienestar. Alimento de la más alta pureza para que mantenerte sano y con gran energía.
                </P>
              </div>
        
              <div class="contenidos">
                <img src="Imagenes/geol.png" class="img-servicios">
                <h4 class="titulo-servicio">GEOLOCALIZACIÓN</h4>
                <P class="parrafo">Conoce nuestra sucursal, el lugar donde esta página y demás proyectos se realizaron.
                </P>
              </div>
        
              <div class="contenidos">
                <img src="Imagenes/dudas.png" class="img-servicios">
                <h4 class="titulo-servicio">SUGERENCIAS</h4>
                <P class="parrafo">Ayudanos a mejorar nuestra pagina oficial de SoyIndie, Las mejores sugerencias para todo aquello que la necesite .
                </P>
              </div>
        
            </div>
          </div >

         {{--  <div class="bloque planes">
            <div class="centrar">
          <h4 class="texto-naranja">LISTA DE PLANES </h4>
          <h1 class="principal-servicios">NUESTROS PLANES</h1>
            </div>
          <div class="centrar contenedor-planes">
            
    
          
            <div class="plan ">
                <div class="titulo-plan"> GENERAL</div>
                <img src="Imagenes/doc.png" class="img-plan">
                <h2>$</h2>
                
                <input type="submit" name="" class="boton-planes">
              </div>

              <div class="plan ">
                <div class="titulo-plan"> ESTUDIANTE</div>
                <img src="Imagenes/est1.png" class="img-plan">
                <h2>$</h2>
                
                <input type="submit" name="" class="boton-planes">
              </div>


            <div class="plan ">
              <div class="titulo-plan"> TRABAJADOR</div>
              <img src="Imagenes/esmpre1.png" class="img-plan">
              <h2>$</h2>
              
              <input type="submit" name="" class="boton-planes">
            </div>
          
           
          
          </div>
          </div> --}}
@endsection
@section('ancla2')
<center>
 <a href="#Inicio"><img src="imagenes/ancla.png" width="50px" height="50px"></a>
</center>
@endsection
