<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.8/fullpage.min.css">
    <title>Productos</title>
</head>
<body>
    <!-- Nav -->
    <?php
        include_once('pag/header.php');
    ?>

    <div id="fullpage">
        <!-- Informacion introductoria -->
        <div class="section">
            <section class="about" >
                <div class="img">
                    <img src="img/1.jpg" alt="casco">
                </div>
                <div class="cont">
                    <h2 class="heading">Cascos para niños</h2>
                    <p class="txt">
                        Si estás buscando los mejores cascos a medida en Valencia, los encontrarás con  Ortopedia Velásquez. 
                        Contamos con un amplia experiencia ofreciendo atención personalizada y asesoramiento profesional. 
                        Disponemos de un amplio catálogo de productos de primera calidad, entre ellos destacamos los cascos de 
                        ortopedia infantil hechos totalmente a medida. Los cascos que ofrecemos están elaborados a partir de un escáner 
                        3D del cráneo del bebé, y su función es la de corregir la forma del cráneo y ayudarlo a desarrollarse con normalidad.
                    </p>
                    <br>
                    <a href="#" class="btn btn3">MAS INFO</a>
                </div>
            </section>
        </div>

        <!-- Productos -->
        <div class="section">
            <section class="prod">
                <h2 class="heading">Productos de Ortopedia Velásquez</h2>
                <div class="container">
                    <div class="prodBx">
                        <div>
                            <a href="#">
                                <img src="img/2.jpg" alt="">
                            </a>
                                <h2>Ortesis de cuello</h2>
                        </div>
                    </div>
                    <div class="prodBx">
                        <div>
                            <a href="#">
                                <img src="img/3.jpg" alt="">
                            </a>
                            <h2>Ortesis del tronco</h2>
                        </div>
                    </div>
                    <div class="prodBx">
                        <div>
                            <a href="">
                                <img src="img/4.jpg" alt="">
                            </a>
                            <h2>Ortesis miembro superior</h2>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php
            include_once('pag/footer.php');
        ?>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.8/fullpage.extensions.min.js"></script>
<script>
    var fp = new fullpage('#fullpage',{
        navigation: true,
    });
</script>
</html>