<?php
require_once('header.php');
?>

<div class="container-fluid my-5">
    <h1 class="text-center">PRODUCTOS</h1>
    <div class="container my-5" style="text-align: -webkit-center;">

        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../img/bobinas.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../img/bobinas.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../img/bobinas.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>


            </div>

        </div><br>
        <!-- If we need pagination -->
        <div id="paginacionProductos" class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div id="btnProductos" class="swiper-button-prev"></div>
        <div id="btnProductos" class="swiper-button-next"></div>


    </div>
</div>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
<script src="../js/swiper.js"></script>
</div>


<?php
require_once('footer.php');
require_once('../whatsapp.php');
?>