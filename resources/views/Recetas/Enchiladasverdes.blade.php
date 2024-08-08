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

                        <h1>Enchiladas</h1>
                        <p>
                            Quien no haya probado unas deliciosas enchiladas, no es mexicano. Este es uno de los platillos consentidos de nuestro país, ¡y nosotros tenemos la receta original! Aprende a prepararlas muy deliciosas.
							De costa a costa, de norte a sur, en todo México se conocen cómo un favorito del desayuno de los mexicanos. Solas, con crema y queso encima, con cilantro, rellenas de jamón o pollo, no importa el ingrediente... las enchiladas son las favoritas de millones de mexicanos.
							Un platillo que han preparado desde las tatara abuelas, hasta las nietas. Todas las generaciones de la familia tienen a un experto en enchiladas, ¿cierto? Tu tía, tu abuelita... y ahota tú. Aprende todo sobre las enchiladas  y conviértete en la experta que las prepara súper deliciosas.
                        </p>
                    </div>

                 <div class="img">
                 	<img src="imagenes/enchiladas.jpg" alt="">
                 </div>

                 <div class="cont-2">
                	<div class="acm">
                	<h1>Ingredientes:</h1>
                	<img src="icon/food-menu.svg" alt="">

                	</div>
                	<ol>
                		<li>1 pechuga de pollo deshebrada</li>
						<li>1 liter caldo de pollo</li>
						<li>12 tortillas</li>
						<li>8 tomates</li>
						<li>1 taza de cilantro</li>
						<li>1 chile serrano</li>
						<li>1 diente de ajo</li>
						<li>½ cebolla</li>
						<li>1 taza de queso doble crema</li>
						<li>½ taza de crema</li>
						<li>3 cebollas de cambray en aros</li>
						<li>½ taza de aceite</li>
						<li>3 cdas. de cilantro picado</li>
                	</ol>

                </div>


                <div class="cont-3">
                	<div class="acm">
                	<h1>Preparación:</h1>
                	<img src="icon/bowl.svg" alt="">

                	</div>
                	<ol>
                		<li>Hierve los tomates, chile serrano, ajo y cebolla en el caldo de pollo durante 10 minutos y licua con el cilantro. Salpimenta y conserva caliente.</li>
						
						<li>Fríe ligeramente las tortillas en el aceite caliente y escurre. Sumerge las tortillas en la salsa, rellena con el pollo y baña con más salsa. Decora con el queso, crema, cebolla cambray y cilantro picado.</li>
                	</ol>

                </div>
    
                </div>
</div>

@endsection

