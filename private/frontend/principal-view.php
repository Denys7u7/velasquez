<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
        <a href="cerrar.php">
          <div class="user-img"></div>
        </a>
      </div>
    </header>

    <section id="content-area">
      <div class="heading">
        <h1>Dashboard</h1>
        <p>Bienvenido a Ortopedia Velasquez Admin</p>
      </div>

      <div class="cards">
        <div class="col-md-4">
          <div class="card">
            <div class="user-img"></div>
            <span class="user-name">Matthew Gaitan</span>
            <span class="user-tittle">Administrador General</span>
            <hr>
            <div class="col-md-3">
              <span class="education">Email</span>
            </div>
            <div class="col-md-9">
              <span class="schools">gaitanramos00@gmail.com</span>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="calendar">
              <p id="monthName"></p>
              <p id="dayName"></p>
              <p id="dayNumber"></p>
              <p id="year"></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script>
      const lang = navigator.language;
      let date = new Date();

      let dayNumber = date.getDate();
      let month = date.getMonth();
      let dayName = date.toLocaleDateString(lang,{weekday: 'long'});
      let monthName = date.toLocaleDateString(lang, {month: 'long'});
      let year = date.getFullYear();

      document.getElementById('monthName').innerHTML = monthName;
      document.getElementById('dayName').innerHTML = dayName;
      document.getElementById('dayNumber').innerHTML = dayNumber;
      document.getElementById('year').innerHTML = year;
    </script>
  </body>
</html>