<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="user singinBx">
                <div class="imgBx">
                    <img src="../img/ortopediaMovil.jpeg">
                </div>
                <div class="formBx">
                    <form action="">
                        <h2>Iniciar sesion</h2>
                        <input type="text" name="" placeholder="Nombre">
                        <input type="password" name="" placeholder="Password">
                        <input type="submit" value="Acceder">
                        <p class="signup">No tienes cuenta? <a href="#" onclick="toggleForm();">Registrate</a></p>
                    </form>
                </div>
            </div>

            <!-- Registro-->
            <div class="user singupBx">
                <div class="formBx">
                    <form action="">
                        <h2>Crear cuenta</h2>
                        <input type="text" name="" placeholder="Nombre">
                        <input type="email" name="" placeholder="Correo">
                        <input type="password" name="" placeholder="Password">
                        <input type="password" name="" placeholder="Confirme su password">
                        <input type="submit" value="Crear">
                        <p class="signup">Ya tienes cuenta? <a href="#" onclick="toggleForm();">Iniciar sesion</a></p>
                    </form>
                </div>
                <div class="imgBx">
                    <img src="../img/ortopediaMovil.jpeg">
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        function toggleForm() {
            var contenedor = document.querySelector('.container');
            contenedor.classList.toggle('active');
        }
    </script>
</body>
</html>