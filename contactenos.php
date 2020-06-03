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
    <title>Contactanos</title>
</head>
<body>
    <?php
        include_once('pag/header.php');
    ?>

    <div id="fullpage">
        <!--Contactanos-->
        <div class="section">
            <section class="cont">
                <h2 class="heading">Puedes comunicarte o encontrarnos en</h2>
                <div class="contact-info">
                    <div class="card">
                        <i class="icon fas fa-envelope"></i>
                        <div class="card-content">
                            <h3>Comunicate</h3>
                            <span>ortopediavelasquez@gmail.com</span>
                        </div>
                    </div>
            
                    <div class="card">
                        <i class="icon fas fa-phone"></i>
                        <div class="card-content">
                            <h3>Telefono</h3>
                            <span>Telf: 640231023</span>
                        </div>
                    </div>
            
                    <div class="card">
                        <i class="icon fas fa-map-marker-alt"></i>
                        <div class="card-content">
                            <h3>Ubicacion</h3>
                            <span>2 Avenida Cr Tomás Sala con Calle Soria. 46017 València Valencia</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="section">
            <section class="about">
                <div class="img2"></div>
                <div class="cont2">
                    <h2 class="heading2">Contactanos</h2>
                    <div class="form">
                        <div class="inputBx">
                            <input type="text" name="" placeholder="Nombre completo">
                        </div>
                        <div class="inputBx">
                            <input type="text" name="" placeholder="Correo Electronico">
                        </div>
                        <div class="inputBx">
                            <input type="text" name="" placeholder="Telefono">
                        </div>
                        <div class="inputBx">
                            <textarea name="" placeholder="Comentario"></textarea>
                        </div>
                        <div class="inputBx">
                            <input type="submit" name="" value="Enviar Ahora">
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