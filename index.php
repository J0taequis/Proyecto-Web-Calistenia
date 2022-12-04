<?php
    session_start();
    if(isset($_SESSION['usuario'])) {
        header("location: inicio.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/styleSession.css">
    <script src="js/datos.js"></script>
    <title>XD</title>
</head>
<body>
    

    <main>
        <div class="container">

            <div class="back__box">

                <div class="back__box-login">
                    <h3>¿No tienes cuenta?</h3>
                    <p>Inicia sesión para entrar a la página</p>
                    <button id="btn__log-in">Iniciar sesión</button>
                </div>

                <div class="back__box-register">
                    <h3>¿Aún no tienes cuenta?</h3>
                    <p>Registrate aquí</p>
                    <button id="btn__sign-in">Registrarse</button>
                </div>

            </div>

            <div class="container__login-register">

                <form action="login.php" id="form__login" class="form__login" method="post">
                    <h2>Iniciar sesión</h2>
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Contraseña">
                    <button>Iniciar sesión</button>
                </form>

                <form id="form__register" class="form__register" method="post">
                    <h2>Registrarse</h2>
                    <input type="text" name="name" placeholder="Nombre de usuario">
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Contraseña">
                    <button type="submit">Registrarse</button>
                </form>

            </div>

        </div>
    </main>

    <script src="js/script.js"></script>
    <script src="js/variables.js"></script>

</body>
</html>