<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.8/fullpage.min.css">
</head>
<body>
    <?php
        include_once('pag/header.php');
    ?>

    <div id="fullpage">
        <!--Codigo de shit-->

        <div class="section s1">
            <div class="bienvenida">
                <img src="img/logo.png" alt="">
                <p> <span>Ortopedia</span> Velasquez </p>
                <hr>
                <p> Carrer de l'Enginyer José Sirera 2 Avenida Cr Tomás Sala con Calle Soria. 46017 València Valencia</p>
                <hr>
                <p> 960 05 57 68</p>
            </div>
        </div>

        <div class="section">
            <div class="logo">
                <p> Ortopedia Velasquez </p>
                <hr>
                <p> Carrer de l'Enginyer José Sirera 2 Avenida Cr Tomás Sala con Calle Soria. 46017 València Valencia</p>
                <hr>
                <p> 960 05 57 68</p>
            </div>
        </div>
        
        <!--Fin codigo de shit-->
    </div>

    <?php
        include_once('pag/footer.php');
    ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.8/fullpage.extensions.min.js"></script>
<script>
    var fp = new fullpage('#fullpage',{
        navigation: true,
    });
</script>
</html>

