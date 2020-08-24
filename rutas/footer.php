<footer>

    <div id="contacto">

        <div class="row">

            <div class="col-12 col-md-6">

            <form method="POST" action="/rutas/contacto.php">

                        <div id="mail-status"></div>

                        <div class="form-group">

                            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre"

                                required>

                            <label for="nombre"></label>

                        </div>

                        <div class="form-group">

                            <input type="email" name="email" class="form-control" id="email" placeholder="Email"

                                required>

                            <label for="email"></label>

                        </div>

                        <div class="form-group">

                            <textarea class="form-control" name="mensaje" id="mensaje" placeholder="Mensaje..." rows="3"

                                required></textarea>

                            <label for="mensaje"></label>

                        </div>

                        <button class="btn btn-outline-light" name="submit" type="submit"

                            onClick="sendContact();">Enviar</button>

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



<script async src="../js/navbar.js"></script>

<script async src="../js/top.js"></script>

<script async src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script async>

    AOS.init();

</script>



<script async>

    const scroll = new SmoothScroll('a[href*="#"]', {

        speed: 500

    });

</script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script defer src="https://code.jquery.com/jquery-3.4.1.slim.min.js"

        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"

        crossorigin="anonymous"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"

        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"

        crossorigin="anonymous"></script>

    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"

        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"

        crossorigin="anonymous"></script>

    <script async src="https://kit.fontawesome.com/8de40d40f6.js" crossorigin="anonymous"></script>



    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

    <script async src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

    <!-- CSS -->

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <script async src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script async src="../js/mail.js"></script>

    <!-- Código de instalación Cliengo para www.acheyl.com.ar/ --> <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/5b8e8deee4b0e8d911a91bf0/5b8e8df0e4b0e8d911a91bf3.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>

</body>



</html>