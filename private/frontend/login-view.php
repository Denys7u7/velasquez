<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="user singinBx">
                <div class="imgBx">
                    <img src="img/ortopediaMovil.jpeg">
                </div>
                <div class="formBx">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <h2>Iniciar sesion</h2>
                        <input type="text" name="usuario" placeholder="Nombre Usuario">
                        <input type="password" name="clave" placeholder="Contraseña">
                        <?php if(!empty($error)): ?>
                        <div class="mensaje">
                            <?php echo $error; ?>
                        </div>
                        <?php endif; ?>
                        <input type="submit" value="Acceder">
                        <p class="signup">No tienes cuenta? <a href="register.php">Registrate</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>