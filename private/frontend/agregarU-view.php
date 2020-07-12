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
            <p>Agregar Usuarios</p>
        </div>

        <div class="col-md-12">
            <div class="row">
                <form class="form">
                    <h2>AGREGAR USUARIOS</h2>
                    <p type="Nombre:">
                        <input placeholder="Ingrese su nombre aqui..">
                    </p>
                    <p type="Usuario:">
                        <input placeholder="Ingrese su nombre de usuario..">
                    </p>
                    <p type="Email:">
                        <input placeholder="Ingrese su correo..">
                    </p>
                    <p type="Seleccione una imagen">
                        <input type="file" name="photo" id="inFile">
                        <div class="image-preview" id="imagePreview">
                            <img src="" alt="Image Preview" class="image">
                            <span class="default-text">Image Preview</span>
                        </div>
                    </p>
                    <p type="Ingrese contraseña">
                        <input type="password" name="" id="password" placeholder="Ingrese contraseña">
                        <div id="toggle" onclick="showHide();"></div>
                    </p>
                    <p type="Confirmar Contraseña:">
                        <input type="password" name="" id="password2" placeholder="Confirme contraseña">
                        <div id="toggle2" onclick="showHide2();"></div>
                    </p>
                    <button type="submit">Guardar</button>
                </form>
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