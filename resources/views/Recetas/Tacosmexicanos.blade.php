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

                        <h1>Tacos Mexicanos</h1>
                        <p>
                            Los tacos mexicanos son una popular receta de este país americano. Consiste en carne, generalmente de ternera (o res como lo llaman allí) o de pollo, cocinada junto a tomate y después introducida dentro de una tortilla de maíz o trigo. Finalmente se adereza con pico de gallo, una salsa típica del país. Un plato con mucha personalidad y que sin duda sabe a méxico. Aquí, lo haremos con carne picada aunque, en realidad se hace con trozos de carne cortadas en tiras, cocinada durante dos horas o más. Así que se puede decir que aunque se parezca, no es 100% mexicana. Pero para acelerar el proceso que, todos tenemos unas vidas muy ajetreadas ¡haremos una versión mucho más rápida e igualmente sabrosa!
                        </p>
                    </div>

                 <div class="img">
                 	<img src="imagenes/tacos.jpg" >
                 </div>

                 <div class="cont-2">
                	<div class="acm">
                	<h1>Ingredientes:</h1>
                	<img src="icon/food-menu.svg" >

                	</div>
                	<ol>
                		<li>6 tortillas de trigo o de maíz</li>
                        <li>350g de carne picada de ternera o de pollo</li>
                        <li>4 dientes de ajo</li>
                        <li>500g de tomates</li>
                        <li>sal y pimienta</li>
                        <li>aceite</li>
                        <li>Opcionalmente puedes añadir algo de queso rallado a cada taco</li>
                	</ol>

                </div>


                <div class="cont-3">
                	<div class="acm">
                	<h1>Preparación:</h1>
                	<img src="icon/bowl.svg" alt="">

                	</div>
                	<ol>
                		<li>Para comenzar con nuestros tacos mexicanos, picamos los ajos y los cocinamos a fuego muy suave durante 1 minuto. Que no coja color.</li><br>

                        <li>Añadimos el medio kilo de tomates, ya pelados y troceados y subimos la potencia del fuego. Salpimentamos y cocinamos durante un rato. El tomate soltará agua, debe evaporarse toda que, puede tartar un rato. Una vez evaporada dejamos cocinar a fuego suave mientras removemos constantemente, durante 5 minutos más, para que coja buen sabor.</li><br>

                        <li>Mientras se evapora el agua de los tomates, preparamos el pico de gallo. El pico de gallo es una salsa que le viene al pelo a los tacos mexicanos. En un bol echamos toda la verdura de esta salsa bien picada. Añadimos el zumo de 1/2 lima o de medio limón y removemos bien. Dejamos reposar.</li><br>

                        <li>Cuando se haya cocinado un poco el tomate, añadimos la carne picada que hayamos elegido. Echamos su parte de sal y pimienta y cocinamos a fuego fuerte. Con una cuchara de madera, vamos removiendo todo y desmenuzando la carne picada, para que no que queden trozos grandes. De hecho, cuanto más finos queden mejor. Así que mezclamos con el tomate y el ajo, mientras la desmenuzamos y cocinamos la carne.</li><br>

                        <li>Una vez se haya cocinado, ¡ya está lista! Calentamos una a una las tortillas por sus dos caras en una sartén a fuego medio. Después ponemos encima unas cucharadas de la carne, aderezamos con un poco de pico de gallo, las envolvemos dándole la forma característica de taco ¡Y ya está listo!. Opcionalmente puedes espolvorear también queso rallado por encima.</li><br>
                	</ol>

                    <p>¡Y así de fácil y rápido tienes unos tacos mexicanos que están riquísimos! Puedes acompañarlos de una buena salsa guacamole u otra salsa mexicana a tu gusto. Por último, recalcar que los auténticos tacos se hacen con carne mechada que se ha dejado cocinar junto con el tomate durante más de dos horas. Pero esta es una versión rápida que también da muy buenos resultados. ¡Espero que te guste!</p>
                </div>
    
                </div>
</div>

@endsection

