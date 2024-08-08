@extends('plantilla2')
<link rel="stylesheet" href="css/comidas.css">
@section('Titulo')
ENCHILADAS VERDES/Receta
@endsection

@section('menu')
<nav class="menu-principal">
                <ul>
                    <li> <a href="/">INICIO</a></li>
                    <li> <a href="/recetas">RECETAS</a></li>
                    <li> <a href="/maps">MAPS</a></li>
                </ul>
            </nav>
@endsection

@section('contenido')
<div class="list-recetas">
				<div class="tabla">
                        <a href="/recetas"><button class="btn-rec">Volver a recetas</button></a>
                </div>

                <div class="contenido-receta">
                    <div class="tit">

                        <h1>Lentejas</h1>
                        <p>
                            Las lentejas con verduras es una de las recetas de cocina básica, más fácil, barata y sana de todas las que existen. Tiene tan solo un puñado de ingredientes (a variar según gustos) y todos muy baratos. Además, bien son sabidos los beneficios de las recetas de legumbres en el organismo, sumado a las verduras. Así que, esta receta de cocina lo tiene todo para ser de esas recetas «perfectas». Buena, bonita y barata. Veamos a continuación como preparar de forma fácil y rápida unas deliciosas lentejas con verduras:
                        </p>
                    </div>

                 <div class="img">
                 	<img src="imagenes/lentejas.jpg" alt="">
                 </div>

                 <div class="cont-2">
                	<div class="acm">
                	<h1>Ingredientes:</h1>
                	<img src="icon/food-menu.svg" alt="">

                	</div>
                	<ol>
                		<li>400g de lentejas</li>
                        <li>1/2 puerro</li>
                        <li>1/2 cebolla</li>
                        <li>2 zanahorias</li>
                        <li>1 patata mediana</li>
                        <li>1 diente de ajo</li>
                        <li>Una cucharadita de pimentón</li>
                        <li>agua</li>
                        <li>1 hoja de laurel</li>
                        <li>sal y pimienta</li>
                        <li>Tres cucharadas de aceite de oliva</li>
                	</ol>

                </div>


                <div class="cont-3">
                	<div class="acm">
                	<h1>Preparación:</h1>
                	<img src="icon/bowl.svg" alt="">

                	</div>
                	<ol>
                		<li>Hacer unas lentejas con verduras es una receta de cocina fácil, donde las haya. Primero pelamos y lavamos la patata y la zanahoria. Pelamos también la cebolla. Después cortamos el resto de la verdura en trocitos.</li><br>


                        <li>Ahora, metemos todos los ingredientes de nuestras lentejas con verduras en una cazuela alta. Los cubrimos bien de agua (dependerá de lo espesas que queramos las lentejas. A mí, que me gustan algo caldositas, agua hasta que cubra todos los ingredientes unos 3 dedos por encima) y los llevamos a ebullición.</li><br>


                        <li>Cuando haya roto a hervir, lo tapamos y dejamos que se cocine unos 20 minutos. Lo mejor es ir probando ya que no todas las lentejas tardan lo mismo en hacerse pero, pasados entre 20-30 minutos, lo probamos. Cuando estén blanditas, estarán listas para comer.</li><br>
                	</ol>

                    <p>Y todo esto es lo que hay que hacer para preparar este plato tan básico en casa. ¡Prepara con frecuencia estas lentejas con verduras en casa y sorprende a todos con este plato tan nutritivo y saludable!</p>
                </div>
    
                </div>
</div>

@endsection

