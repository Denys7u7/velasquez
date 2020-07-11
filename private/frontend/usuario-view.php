<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Document</title>
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
            <a href="agregarU.php" class="add">+ Agregar</a>
            <a href="cerrar.php">
                <div class="user-img"></div>
            </a>
        </div>
    </header>

    <section id="content-area">
        <div class="heading">
            <h1>Dashboard</h1>
            <p>Usuarios Admin</p>
        </div>

        <div class="col-md-12">
            <div class="row">
                <table>
                    <thead>
                        <tr>
                            <th>
                                NOMBRE
                            </th>
                            <th>
                                CORREO
                            </th>
                            <th>
                                USUARIO
                            </th>
                            <th>
                                IMAGEN
                            </th>
                            <th>
                                ACCION
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="logo">1</span> Matthew Gaitan</td>
                            <td>ramosmatthew00@gmail.com</td>
                            <td>matt</td>
                            <td>Yo</td>
                            <td>
                                <a href="#" class="action green"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <a href="#" class="action red"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="logo">2</span> Geovany Marroquin</td>
                            <td>geovaGay2020@gmail.com</td>
                            <td>gay</td>
                            <td>El gay</td>
                            <td>
                                <a href="#" class="action green"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <a href="#" class="action red"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>