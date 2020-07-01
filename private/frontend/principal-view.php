<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sidebar Dashboard Template</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap" rel="stylesheet">
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Ortopedia <span>Velasquez</span></h3>
      </div>
      <div class="right_area">
        <a href="cerrar.php" class="logout_btn"><img src="img/logout.png" alt=""></a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="img/doctor.png" class="profile_image" alt="">
        <h4>Matthew</h4>
      </center>
      <a href="principal.php"><i class="fas fa-desktop"></i><span>Inicio</span></a>
      <a href="#"><i class="fas fa-cogs"></i><span>Eliminar productos</span></a>
      <a href="#"><i class="fas fa-history "></i><span>Actualizar productos</span></a>
      <a href="#"><i class="fas fa-upload"></i><span>Agregar productos</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Configuracion</span></a>
    </div>
    <!--sidebar end-->

    <div class="content"></div>

  </body>
</html>