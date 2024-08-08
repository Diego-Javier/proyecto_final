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

                        <h1>Espaguetis al pesto</h1>
                        <p>
                            Los espaguetis al pesto, consisten en esta popular pasta, preparada con esta salsa de color verde. La albahaca, es el ingrediente que tornará a nuestros espaguetis de este susodicho color. El pesto es una salsa para pastas con mucha personalidad. Tanto por el color como por el sabor. El ajo y el queso le darán un toque potente mientras que la albahaca, le dará un toque anisado. Los ingredientes para preparar los espaguetis al pesto son:
                        </p>
                    </div>

                 <div class="img">
                 	<img src="imagenes/espagueti.jpg" alt="">
                 </div>

                 <div class="cont-2">
                	<div class="acm">
                	<h1>Ingredientes:</h1>
                	<img src="icon/food-menu.svg" alt="">

                	</div>
                	<ol>
                		<li>400g de espaguetis </li>
                        <li>150g de hojas de albahaca. No incluyas el tallo, que amarga</li>
                        <li>300g de queso parmesano</li>
                        <li>2 dientes de ajo</li>
                        <li>100g de piñones</li>
                        <li>200ml de aceite de oliva<li>
                        <li>Sal</li>
                	</ol>

                </div>


                <div class="cont-3">
                	<div class="acm">
                	<h1>Preparación:</h1>
                	<img src="icon/bowl.svg" alt="">

                	</div>
                	<ol>
                		<li>Cocemos los espagueti. Añadimos un puñadito de sal en una cazuela con abundante agua hirviendo. Después añadimos los espagueti y los removemos con frecuencia, especialmente los primeros minutos de la cocción. Para que no se peguen al fondo.</li><br>

                        <li>Mientras se cuecen, preparamos la salsa pesto. En un vaso batidor ponemos la albahaca, el queso parmesano (u otro de tu gusto pero, mejor que sea curado. Con sabor), los dientes de ajo, los piñones, que puedes sustituirlos por nueces o almendras y el aceite de oliva. Lo batimos bien hasta que nos quede una salsa verde y bastante densa.</li><br>

                        <li>Ponemos la salsa de los espaguetis al pesto en un bol grande. Y cuando los espaguetis estén al dente (tardarán unos 10 minutos de cocción), reservamos dos cucharones del caldo de la cocción. Unos 100ml. Y escurrimos los espaguetis del resto del agua.</li><br>

                        <li>Acto seguido, ponemos los espagueti en el bol donde habíamos puesto el pesto. Añadimos el caldo de la cocción, que darán a la salsa un toque más cremoso y sobre todo añadirá mucho sabor y con un tenedor mezclamos durante un par de minutos. Para que los espaguetis absorban bien toda la salsa.</li>
                	</ol>

                    <p>¡Y ya está listo para servir estos espaguetis al pesto! Es una receta muy fácil de hacer, con personalidad, muy sabrosa y también económica. Y más económica aún si sustituyes los piñones por otro fruto seco a tu elección. ¡Espero que te gusten!</p>

                </div>
    
                </div>
</div>

@endsection

