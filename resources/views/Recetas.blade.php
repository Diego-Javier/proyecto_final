@extends('plantilla')
<link rel="stylesheet" href="css/recetas.css">

@section('Titulo')
RECETAS/Indie
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
<section class="buscar-contenido">
 <div class="buscar">
	<h1>RECETAS</h1>
	
</div> 
</section> 

<section class="body-2">

<div class="card">
    <div class="card_lan" style="--i:url(imagenes/enchiladas.jpg)">
        <h6>Enchiladas </h6>
    </div>
    <div class="card_inf">
        <div class="head">
            <p class="card-tittle">Enchiladas </p>
        <div class="card-descrip">
            <div class="item">
                <img src="icon/time.svg" class="icon">
                <p>30 min</p>
            </div>
            <div class="item">
                <img src="icon/user.svg" class="icon">
                <p>4</p>
            </div>
        </div>
        </div>

        <div class="content">
            <p class="card-tittle">Ingredientes:</p>
            <ul class="list">
                <li>1 pechuga de pollo deshebrada</li>
                <li>1 liter caldo de pollo</li>
                <li>12 tortillas</li>
                <li>8 tomates</li>
                <li>1 taza de cilantro</li>
                <li>1 chile serrano</li>
                <li>1 diente de ajo</li>
            </ul>     
        </div>

        <div class="action">
            <a href="/enchiladas" class="btn-rec">Ver receta</a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card_lan" style="--i:url(imagenes/tacos.jpg)">
        <h6>Tacos Mexicanos</h6>
    </div>
    <div class="card_inf">
        <div class="head">
            <p class="card-tittle">Tacos Mexicanos</p>
        <div class="card-descrip">
            <div class="item">
                <img src="icon/time.svg" class="icon">
                <p>50 min</p>
            </div>
            <div class="item">
                <img src="icon/user.svg" class="icon">
                <p>6</p>
            </div>
        </div>
        </div>

        <div class="content">
            <p class="card-tittle">Ingredientes:</p>
            <ul class="list">
                <li>6 tortillas de trigo o de maíz</li>
                <li>350g de carne picada de ternera o de pollo</li>
                <li>4 dientes de ajo</li>
                <li>500g de tomates</li>
                <li>sal y pimienta</li>
                <li>aceite</li>
            </ul>     
        </div>

        <div class="action">
            <a href="/tacos" class="btn-rec">Ver receta</a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card_lan" style="--i:url(imagenes/espagueti.jpg)">
        <h6>Espagueti</h6>
    </div>
    <div class="card_inf">
        <div class="head">
            <p class="card-tittle">Espagueti</p>
        <div class="card-descrip">
            <div class="item">
                <img src="icon/time.svg" class="icon">
                <p>40 min</p>
            </div>
            <div class="item">
                <img src="icon/user.svg" class="icon">
                <p>4</p>
            </div>
        </div>
        </div>

        <div class="content">
            <p class="card-tittle">Ingredientes:</p>
            <ul class="list">
                <li>400g de espaguetis</li>
                <li>150g de hojas de albahaca. No incluyas el tallo, que amarga</li>
                <li>300g de queso parmesano</li>
                <li>2 dientes de ajo</li>
                <li>100g de piñones</li>
                <li>200ml de aceite de oliva</li>
                <li>Sal</li>
            </ul>     
        </div>

        <div class="action">
            <a href="/espagueti" class="btn-rec">Ver receta</a>
        </div>
    </div>
</div>
</section>
<section class="body-2">
<div class="card">
    <div class="card_lan" style="--i:url(imagenes/lentejas.jpg)">
        <h6>Lentejas</h6>
    </div>
    <div class="card_inf">
        <div class="head">
            <p class="card-tittle">Lentejas</p>
        <div class="card-descrip">
            <div class="item">
                <img src="icon/time.svg" class="icon">
                <p>45 min</p>
            </div>
            <div class="item">
                <img src="icon/user.svg" class="icon">
                <p>4</p>
            </div>
        </div>
        </div>

        <div class="content">
            <p class="card-tittle">Ingredientes:</p>
            <ul class="list">
                <li>400g de lentejas</li>
                <li>1/2 puerro</li>
                <li>1/2 cebolla</li>
                <li>2 zanahorias</li>
                <li>1 patata mediana</li>
                <li>1 diente de ajo</li>
                <li>Una cucharadita de pimentón</li>
                <li>agua</li>
            </ul>     
        </div>

        <div class="action">
            <a href="/lentejas" class="btn-rec">Ver receta</a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card_lan" style="--i:url(imagenes/hamburguesa.jpg)">
        <h6>Hamburguesa</h6>
    </div>
    <div class="card_inf">
        <div class="head">
            <p class="card-tittle">Hamburguesa</p>
        <div class="card-descrip">
            <div class="item">
                <img src="icon/time.svg" class="icon">
                <p>30 min</p>
            </div>
            <div class="item">
                <img src="icon/user.svg" class="icon">
                <p>4</p>
            </div>
        </div>
        </div>

        <div class="content">
            <p class="card-tittle">Ingredientes:</p>
            <ul class="list">
                <li>4 panes de hamburguesa</li>
                <li>Unas hojas de lechuga</li>
                <li>4 rodajas finas de tomate</li>
                <li>4 lonchas de queso</li>
                <li>1 cebolla cortada en forma de aros</li>
                <li>ketchup, mahonesa, mostaza…. La salsa que más nos guste</li>
            </ul>     
        </div>

        <div class="action">
            <a href="/hamburguesas" class="btn-rec">Ver receta</a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card_lan" style="--i:url(imagenes/pollo.jpg)">
        <h6>Pollo</h6>
    </div>
    <div class="card_inf">
        <div class="head">
            <p class="card-tittle">Pollo</p>
        <div class="card-descrip">
            <div class="item">
                <img src="icon/time.svg" class="icon">
                <p>40 min</p>
            </div>
            <div class="item">
                <img src="icon/user.svg" class="icon">
                <p>4</p>
            </div>
        </div>
        </div>

        <div class="content">
            <p class="card-tittle">Ingredientes:</p>
            <ul class="list">
                <li>4 pechugas de pollo</li>
                <li>2 cebollas</li>
                <li>4 naranjas</li>
                <li>2 cucharadas de salsa de soja</li>
                <li>2 dientes de ajo</li>
                <li>1 chorrito de vinagre</li>
            </ul>     
        </div>

        <div class="action">
            <a href="/pollo" class="btn-rec">Ver receta</a>
        </div>
    </div>
</div> 

</section>
<script src="buscador.js"></script>



@endsection