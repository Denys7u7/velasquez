<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/add.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Agregar ususarios</title>
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
                            <h2>Registro de Usuarios</h2>
                            <div class="inputBx">
                                <input type="text" name="name" id="" placeholder="Ingrese su email">
                            </div>
                            <div class="inputBx">
                                <input type="text" name="user" id="" placeholder="Ingrese su email">
                            </div>
                            <div class="inputBx">
                                <input type="email" name="email" id="" placeholder="Ingrese su email">
                            </div>
                            <div class="inputBx">
                                <input type="password" name="" id="password" placeholder="Ingrese contraseña">
                                <div id="toggle" onclick="showHide();"></div>
                            </div>
                            <div class="inputBx">
                                <input type="password" name="" id="password2" placeholder="Ingrese contraseña">
                                <div id="toggle2" onclick="showHide2();"></div>
                            </div>
                            <div class="inputBx">
                                <input type="file" name="photo" id="inFile">
                                <div class="image-preview" id="imagePreview">
                                    <img src="" alt="Image Preview" class="image">
                                    <span class="default-text">Image Preview</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        /*Show and hide password*/
        const password = document.getElementById('password');
        const password2 = document.getElementById('password2');
        const toggle = document.getElementById('toggle');
        const toggle2 = document.getElementById('toggle2');

        function showHide(){
            if(password.type === 'password'){
                password.setAttribute('type', 'text');
                toggle.classList.add('hide');
            }
            else{
                password.setAttribute('type', 'password');
                toggle.classList.remove('hide');
            }
        }

        function showHide2(){
            if(password2.type === 'password'){
                password2.setAttribute('type', 'text');
                toggle2.classList.add('hide2');
            }
            else{
                password2.setAttribute('type', 'password');
                toggle2.classList.remove('hide2');
            }
        }
    </script>
</body>
</html>