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

                        <h1>Hamburguesa Casera</h1>
                        <p>
                            La hamburguesa casera es probablemente la receta más popular del mundo. Las hamburguesas no son más que un filete de carne picada, al que se le echan varios ingredientes al gusto y después se ligan entre sí. Hoy en día esta receta se suele atribuir a la cultura estadounidense pero, ya los patricios romanos tenían una versión de la hamburguesa. Mucho más tarde, los alemanes la llevaron a Estados Unidos y fueron éstos quienes las comercializaron por todo el mundo. Aquí, vamos a hacer una hamburguesa estándar, con los ingredientes más básicos, incluidos los que pondremos en el pan. Ten en cuenta que después podrás añadir o eliminar a tu gusto. Veamos como hacer unas hamburguesas caseras.
                        </p>
                    </div>

                 <div class="img">
                 	<img src="imagenes/hamburguesa.jpg" alt="">
                 </div>

                 <div class="cont-2">
                	<div class="acm">
                	<h1>Ingredientes:</h1>
                	<img src="icon/food-menu.svg" alt="">
                	</div>
                    <h5>Para hacer la hamburguesa:</h5>
                	<ol>
                		<li>250g de carne picada de vacuno y 250g de carne picada de cerdo</li>
                        <li>2 huevos</li>
                        <li>40g de pan rallado</li>
                        <li>1 cucharada de mostaza (puedes añadir otra de salsa de tomate, si lo deseas)</li>
                        <li>2 dientes de ajo y 1/4 de cebolla, picados y previamente pasados por la sartén</li>
                        <li>sal y pimienta</li>
                	</ol>

                    <h5>Para montar la hamburguesa:</h5>
                    <ol>
                        <li>4 panes de hamburguesa</li>
                        <li>Unas hojas de lechuga</li>
                        <li>4 rodajas finas de tomate</li>
                        <li>4 lonchas de queso</li>
                        <li>1 cebolla cortada en forma de aros</li>
                        <li>ketchup, mahonesa, mostaza…. La salsa que más nos guste</li>
                    </ol>

                </div>


                <div class="cont-3">
                	<div class="acm">
                	<h1>Preparación:</h1>
                	<img src="icon/bowl.svg" alt="">

                	</div>
                	<ol>
                		<li>En un bol mezclamos los ingredientes de las hamburguesas caseras. Los huevos, les darán un toque de cremosidad extra mientras que el pan rallado que, como ves es poca cantidad para que mantengan dicha cremosidad, darán un toquecito de crujir. El ajo y la cebolla, las pocho previamente, para que no tenga un sabor demasiado salvaje aunque, si lo prefieres, puedes añadirlo en crudo. Mezclamos con las manos limpias.</li><br>

                        <li>Ahora dividimos la masa e 4 porciones iguales. Las amasamos una a una, pasándola rápidamente de una mano a otra (así, logramos que se desarrolle la proteína de la carne, evitando que la hamburguesa se deshaga durante la cocción) y después, las aplastamos un poco, dándole la forma de hamburguesa.</li><br>

                        <li>Las cocinamos. En una sartén antiadherente, ponemos tan solo una gotita de aceite, a fuego medio y colocamos sobre ella las hamburguesas. El tiempo exacto de cocción dependerá del punto deseado de la carne. Si la queremos poco hecha, con 3 minutos por cada una de sus caras será suficiente. Si la queremos más hecha, el doble de tiempo. Cuando le demos la vuelta, ponemos una loncha de queso encima de la hamburguesa, para que se vaya fundiendo.</li><br>

                        <li>Una vez hechas, montamos las hamburguesas. Ponemos en el pan, al cual previamente lo hemos pasado un poco por la sartén para que esté caliente, una base de lechuga y encima una rodaja de tomate. Encima colocamos las hamburguesas caseras con la loncha de queso y encima, unos aros de cebolla. Terminamos aderezando con nuestra salsa favorita.</li><br>
                	</ol>
                    <p>¡Y listo! ¡Ya tendremos nuestra hamburguesa casera hecha! Una comida de restaurante de comida rápida, hecha en casa casa que, siempre es de agradecer. A la hora del montado, por supuesto, puedes añadirle todos los ingredientes que desees; jamón york, un huevo frito… Y puedes acompañarla de unas buenas patatas fritas. ¡Espero que te guste!</p>

                </div>
    
                </div>
</div>

@endsection

