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

                        <h1>Pollo a la Naranja</h1>
                        <p>
                            El pollo a la naranja es una comida típica de Asia. No tiene nada que ver con el pato al horno a la naranja, plato típico francés. En este caso, se trata de unas pechugas de pollo cocinadas junto a una salsa hecha a base de zumo de naranja. Se puede acompañar de un arroz blanco, que le va a venir «al pelo» a este plato. Es muy fácil y rápido de hacer, como casi todo lo que el vitoriano Gorka Barredo propone en esta web. Lo tendrás listo en cuestión de 30 minutos. O menos. Una receta de pollo deliciosa. Para preparar tu pollo ala naranja necesitarás:
                        </p>
                    </div>

                 <div class="img">
                 	<img src="imagenes/pollo.jpg" alt="">
                 </div>

                 <div class="cont-2">
                	<div class="acm">
                	<h1>Ingredientes:</h1>
                	<img src="icon/food-menu.svg" alt="">

                	</div>
                	<ol>
                		<li>4 pechugas de pollo</li>
                        <li>2 cebollas</li>
                        <li>4 naranjas</li>
                        <li>2 cucharadas de salsa de soja</li>
                        <li>2 dientes de ajo</li>
                        <li>1 chorrito de vinagre</li>
                        <li>1 cucharada de azúcar</li>
                        <li>2 cucharadas de maizena</li>
                        <li>sal y pimienta</li>
                        <li>aceite de oliva</li>
                        <li>Perejil fresco</li>
                	</ol>

                </div>


                <div class="cont-3">
                	<div class="acm">
                	<h1>Preparación:</h1>
                	<img src="icon/bowl.svg" alt="">

                	</div>
                	<ol>
                		<li>Preparamos la salsa. Para ello, exprimimos las naranjas en un bol. Añadimos la salsa de soja, los dientes de ajo picados, el chorrito de vinagre, el azúcar, la maizena, que espesará la salsa en la cocción y un poco de sal y de pimienta negra recién molida. Puedes añadir aquí el pollo y dejarlo macerar durante una hora o, puedes pasar directamente al siguiente paso. </li><br>

                        <li>En una sartén a fuego medio, añadimos un chorrito de aceite. Cuando esté caliente añadimos la cebolla picada muy finamente. Salpimentamos y dejamos cocinar 5 minutos, mientras removemos de vez en cuando con una cuchara de palo.</li><br>

                        <li>Seguimos con la receta del pollo a la naranja. Pasado el tiempo, subimos la potencia del fuego y añadimos las pechugas de pollo, que ya están previamente cortadas en tamaño de bocado y salpimentadas. Mezclamos con la cebolla y sellamos los taquitos durante un par de minutos.</li><br>

                        <li>Hecho esto, añadimos la salsa que habíamos preparado al principio. Bajamos la potencia del fuego y vamos cocinando a fuego suave, mientras mezclamos con la cuchara. La salsa irá reduciéndose un poco mientras también se va espesando por efecto de la maizena. Finalmente, puedes espolvorear con perejil fresco.</li><br>
                	</ol>
                    <p>Como decía al principio, en menos de media hora, tendrás listo este pollo a la naranja ¡Es muy rápido de hacer y su resultado es más que aceptable! Puedes acompañarlo con un arroz blanco recién cocinado. Si quieres otra receta de pollo igual de buena y sabrosa que esta, no te pierdas esta de pollo agridulce.</p>

                </div>
    
                </div>
</div>

@endsection

