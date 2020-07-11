<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/add.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Add-User</title>
</head>
<body>
    <section id="sideMenu">
      <h3 class="tittle">Ortopedia<span> Velasquez</span></h3>
      <nav>
        <a href="principal.php" class="active"><i class="fa fa-home" aria-hidden="true"></i>Inicio</a>
        <a href="productos.php"><i class="fa fa-folder-open" aria-hidden="true"></i>Admin Producto</a>
        <a href="productos.php"><i class="fa fa-picture-o" aria-hidden="true"></i>Galeria</a>
        <a href="productos.php"><i class="fa fa-cart-plus" aria-hidden="true"></i>Agregar Producto</a>
        <a href="usuarios.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Agregar Usuarios</a>
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
                <div class="container">
                    <div class="form">
                        <form action="" method="post">
                            <h2>Registro de Productos</h2>
                            <div class="inputBx">
                                <input type="file" name="photo" id="inFile">
                                <div class="image-preview" id="imagePreview">
                                    <img src="" alt="Image Preview" class="image">
                                    <span class="default-text">Image Preview</span>
                                </div>
                            </div>
                            <div class="inputBx">
                                <input type="text" name="name" id="" placeholder="Nombre del Porducto">
                            </div>
                            <div class="inputBx">
                                <select name="category" id="">
                                    <option value="ortesis">Ortesis</option>
                                    <option value="ortesis">Protesis</option>
                                </select>
                            </div>
                            <div class="inputBx">
                                <input type="text" name="price" id="" placeholder="Precio">
                            </div>
                            <div class="inputBx">
                                <textarea name="description" id="" placeholder="Descripcion"></textarea>
                            </div>
                            <div class="inputBx">
                                <input type="submit" name="" value="Guardar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const inpFile = document.getElementById("inFile");
        const previewContainer = document.getElementById("imagePreview");
        const previewImage = previewContainer.querySelector(".image");
        const previewDefaultText = previewContainer.querySelector(".default-text");

        inpFile.addEventListener("change", function(){
            const file = this.files[0];

            if(file){
                const reader = new FileReader();

                previewDefaultText.style.display = "none";
                previewImage.style.display = "block";

                reader.addEventListener("load", function(){
                    previewImage.setAttribute("src", this.result);
                });

                reader.readAsDataURL(file);
            }
            else{
                previewDefaultText.style.display = null;
                previewImage.style.display = null;
                previewImage.setAttribute("src", "");
            }
        });
    </script>
</body>
</html>