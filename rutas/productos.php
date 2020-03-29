<?php
require_once('header.php');
?>

<div id="containerCarouselProductos" class="container">
    <h1 class="text-center">PRODUCTOS</h1>
    <!-- Flickity HTML init -->
    <div class="carousel" data-flickity='{ "wrapAround": true }'>
        <div id="carouselProducto" class="carousel-cell">
            <div class="card" style="width: 18rem;text-align:center;">
                <img class="card-img-top" src="../img/productos/dispenser_jabon.png" alt="Card image cap">
                <div class="card-body" style="display:flex; flex-direction:column;height:30vh;justify-content: space-between; ">
                    <h5 class="card-title">DISPENSER JABON LIQUIDO</h5>
                    <p class="card-text">Acero inoxidable o plástico</p>

                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div id="carouselProducto" class="carousel-cell">
            <div class="card" style="width: 18rem;text-align:center;">
                <img class="card-img-top" src="../img/productos/dispenser_toallas.png" alt="Card image cap">
                <div class="card-body" style="display:flex; flex-direction:column;height:30vh;justify-content: space-between">
                    <h5 class="card-title">DISPENSER TOALLA</h5>
                    <p class="card-text">Toallas comunes o intercaladas </p>

                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div id="carouselProducto" class="carousel-cell">
            <div class="card" style="width: 18rem;text-align:center;">
                <img class="card-img-top" src="../img/productos/dispenser_toalla_ind.png" alt="Card image cap">
                <div class="card-body" style="display:flex; flex-direction:column;height:30vh;justify-content: space-between">
                    <h5 class="card-title">DISPENSER TOALLA CON PALANCA</h5>
                    <p class="card-text">Manija de accionamiento lateral</p>

                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div id="carouselProducto" class="carousel-cell">
            <div class="card" style="width: 18rem;text-align:center;">
                <img class="card-img-top" src="../img/productos/dispenser_higienico.png" alt="Card image cap">
                <div class="card-body" style="display:flex; flex-direction:column;height:30vh;justify-content: space-between">
                    <h5 class="card-title">DISPENSER PAPEL HIGIENICO</h5>
                    <p class="card-text">Acero inoxidable o plástico</p>

                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div id="carouselProducto" class="carousel-cell">
            <div class="card" style="width: 18rem;text-align:center;">
                <img class="card-img-top" src="../img/productos/dispenser_bobina.png" alt="Card image cap">
                <div class="card-body" style="display:flex; flex-direction:column;height:30vh;justify-content: space-between">
                    <h5 class="card-title">DISPENSER BOBINA 5kg</h5>
                    <p class="card-text"> De pie o pared</p>

                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div id="carouselProducto" class="carousel-cell">
            <div class="card" style="width: 18rem;text-align:center;">
                <img class="card-img-top" src="../img/productos/insumos.png" alt="Card image cap">
                <div class="card-body" style="display:flex; flex-direction:column;height:30vh;justify-content: space-between">
                    <h5 class="card-title">INSUMOS</h5>
                    <p class="card-text">Papel, toallas, jabón</p>

                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>


</div>


<?php
require_once('footer.php');
?>