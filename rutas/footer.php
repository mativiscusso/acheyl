<footer>
    <div id="contacto">
        <div class="row">
            <div class="col-12 col-md-6">
                <form method="POST" action="contacto.php">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1"
                            placeholder="Mensaje..." rows="3" required></textarea>
                    </div>
                    <button class="btn btn-outline-light" type="submit">Enviar</button>
                </form>
            </div>
            <div id="infoFooter" class="col-12 col-md-3">
                <span>
                    <ion-icon size="large" name="pin"></ion-icon>Presidente Roca 2921
                </span>
                <span>
                    <ion-icon size="large" name="earth"></ion-icon>S2000 Rosario, Santa Fe
                </span>
                <span>
                    <ion-icon size="large" name="call-sharp"></ion-icon>0810 444 0209 / 341 5 996988
                </span>
                <span>
                    <ion-icon size="large" name="today-sharp"></ion-icon>Lunes a Viernes
                </span>
                <span>
                    <ion-icon size="large" name="alarm"></ion-icon>08 hs a 17 hs
                </span>

            </div>
            <div class="col-12 col-md-3" id="redes">
                <span>
                    <ion-icon size="large" name="logo-facebook"></ion-icon><a
                        href="https://www.facebook.com/acheylrosario">/acheylrosario</a>
                </span>
                <span>
                    <ion-icon size="large" name="logo-instagram"></ion-icon><a
                        href="https://www.instagram.com/acheylrosario/?hl=es-la">@acheylrosario</a>
                </span>
                <span>
                    <ion-icon size="large" name="mail-open"></ion-icon><a href="">contacto@acheyl.com.ar</a>
                </span>
            </div>
        </div>
    </div>

    <a id="posicionador" href="https://somosmarea.com" target="_blank">
        <div class="marea">
            <img src="../img/logoMarea.png" alt="" id="left">
            <div id="right">
                <span>MAREA</span>
                <span>Marketing Digital</span>
                <span>Desarrollo Web</span>
            </div>
        </div>
    </a>

    <button title="Back to top" class="scroll">
        <ion-icon size="large" name="arrow-up-outline"></ion-icon>
    </button>

</footer>

<script src="../js/navbar.js"></script>
<script src="../js/top.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script>
    const scroll = new SmoothScroll('a[href*="#"]', {
        speed: 500
    });
</script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/8de40d40f6.js" crossorigin="anonymous"></script>
    <link href="../css/style.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>

</html>