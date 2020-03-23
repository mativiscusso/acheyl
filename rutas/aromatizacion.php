<?php
require_once('header.php');
?>

<h2 class="text-center py-5">AROMATIZACION</h2>
<div class="row">
    <div class="col-12 col-sm-12 col-md-6">
        <div id="carouselAroma" data-interval="4000" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../img/arom1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../img/arom2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../img/arom3.jpg" alt="Third slide">
                </div>
            </div>
        </div>
    </div>
    <div id="textoAroma" class="col-12 col-sm-12 col-md-6 px-3">
        <p><i>"Ofreceles a tus clientes, una experiencia diferente"</i></p>
        <p>SERVICIO DE AROMATIZACIÓN DE AMBIENTES</p>
        <p>DESODORIZANTE - AROMATIZANTE - BACTERICIDA</p>
        <ul>
            <li>Cada aparato cubre aprox una superficie de 40 m2.</li>
            <li>Instalación sin cargo</li>
            <li>Mantenimiento cada 15 días (Renovación de fragancias)</li>
            <li>Prueba gratuita por 48 horas</li>
            <li>Amplia variedad de fragancias</li>
        </ul>
        <span id="spanAroma">“CON UN ABONO MENSUAL, MANTENÉ TUS AMBIENTES AROMATIZADOS LAS 24 HORAS”</span><br>
        <a href="https://wa.me/5493415996988?texto=Hola!,%20me%20interesa%20" target="_blank">
        <button id="btnAroma" type="button" class="btn btn-dark my-5">PROBALO SIN CARGO</button>
        </a>
    </div>
</div>


<div data-aos="flip-right" class="my-5" id="banner2">
    <p>AMPLIA VARIEDAD EN FRAGANCIAS</p>
    <div class="slider">
        <div class="slide-track">
            <div class="slide">
                <img src="../img/fragancia.png" height="100" width="50" alt="" />
            </div>
            <div class="slide">
                <img src="../img/fragancia.png" height="100" width="50" alt="" />
            </div>
            <div class="slide">
                <img src="../img/fragancia.png" height="100" width="50" alt="" />
            </div>
            <div class="slide">
                <img src="../img/fragancia.png" height="100" width="50" alt="" />
            </div>
            <div class="slide">
                <img src="../img/fragancia.png" height="100" width="50" alt="" />
            </div>
            <div class="slide">
                <img src="../img/fragancia.png" height="100" width="50" alt="" />
            </div>
            <div class="slide">
                <img src="../img/fragancia.png" height="100" width="50" alt="" />
            </div>
            <div class="slide">
                <img src="../img/fragancia.png" height="100" width="50" alt="" />
            </div>
            <div class="slide">
                <img src="../img/fragancia.png" height="100" width="50" alt="" />
            </div>
            <div class="slide">
                <img src="../img/fragancia.png" height="100" width="50" alt="" />
            </div>
            <div class="slide">
                <img src="../img/fragancia.png" height="100" width="50" alt="" />
            </div>
            <div class="slide">
                <img src="../img/fragancia.png" height="100" width="50" alt="" />
            </div>
            <div class="slide">
                <img src="../img/fragancia.png" height="100" width="50" alt="" />
            </div>
        </div>
    </div>
    <a href="https://wa.me/5493415996988?texto=Hola!,%20me%20interesa%20" target="_blank">
    <button type="button" class="btn btn-dark my-5"">QUIERO CONTRATAR</button>
    </a>
</div>



<?php
require_once('footer.php');
require_once('../whatsapp.php');
?>