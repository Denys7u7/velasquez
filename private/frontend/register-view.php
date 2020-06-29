<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
    <title>Register</title>
</head>
<body>
    <section>
        <div class="container">
            <!-- Registro-->
            <div class="user singupBx">
                <div class="formBx">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="POST">
                        <h2>Crear cuenta</h2>
                        <input type="email" name="correo" placeholder="Correo">
                        <input type="text" name="usuario" placeholder="Nombre Usuario">
                        <input type="password" name="clave" placeholder="Contraseña">
                        <input type="password" name="clave2" placeholder="Confirmar contraseña">
                        <?php if(!empty($error)): ?>
                        <div class="mensaje">
                            <?php echo $error; ?>
                        </div>
                        <?php endif; ?>
                        <input type="submit" value="Crear">
                        <p class="signup">Ya tienes cuenta? <a href="login.php">Inicia sesion</a></p>
                    </form>
                </div>
                <div class="imgBx">
                    <img src="img/ortopediaMovil.jpeg">
                </div>
            </div>
        </div>
    </section>
</body>
</html>