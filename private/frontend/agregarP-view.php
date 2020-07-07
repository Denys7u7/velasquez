<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/add.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Add-Product</title>
</head>
<body>
<section id="sideMenu">
      <h3 class="tittle">Ortopedia<span> Velasquez</span></h3>
      <nav>
        <a href="principal.php" class="active"><i class="fa fa-home" aria-hidden="true"></i>Inicio</a>
        <a href="productos.php"><i class="fa fa-cart-plus" aria-hidden="true"></i>Agregar Producto</a>
        <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Agregar Usuarios</a>
        <a href="#"><i class="fa fa-cog" aria-hidden="true"></i>Configuracion</a>
      </nav>
    </section>

    <header>
        <div class="search-area">
            <i class="fa fa-search" aria-hidden="true"></i>
            <input type="text" name="" id="">
        </div>
        <div class="user-area">
            <a href="agregarP.php" class="add">+ Agregar</a>
            <a href="cerrar.php">
                <div class="user-img"></div>
            </a>
        </div>
    </header>

    <section id="content-area">
        <div class="heading">
            <h1>Dashboard</h1>
            <p>Agregar Productos</p>
        </div>

        <div class="col-md-12">
            <div class="row">
                <form action="" method="post">
                    <input type="file" name="photo" id="inFile">
                    <div class="image-preview" id="imagePreview">
                        <img src="" alt="Image Preview" class="image">
                        <span class="default-text">Image Preview</span>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        const inpFile = document.getElementById("inFile");
        const previewContainer = document.getElementById("imagePreview");
        const previewImage = previewContainer.querySelector(".image");
    </script>
</body>
</html>