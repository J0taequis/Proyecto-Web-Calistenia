<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/styleparques.css">
    <script src="js/crudrutina.js"></script>
    <title>Parques de calistenia</title>
</head>
<body>


    <!--Barra de navegación-->

    <header>
        <nav id="header-nav">
            <a id="login-button" href = "sessionDestroy.php">Cerrar sesión</a>
            <ul class="ul-flex-row">
                <li><a href="index.php">Inicio / Home</a></li>
                <li><a href="parques.php">Buscar Parques</a> </li>
                <li><a href="ejercicios.html">Ejercicios</a> </li>
                <li class="QS"><a>Quienes Somos</a>
                    <ul class="ul-dropdown">
                        <li><a href="historia.html">Historia</a></li>
                        <li><a href="equipo.html">Equipo</a></li>
                    </ul>
                </li>
                <li><a href="contacto.html">Contacto</a> </li>
            </ul>
        </nav>
    </header>


    <!--Contenido general de la página-->
    <main>
        <div class="main-div">
            <div class="filter"> <!--div de los filtros-->
                <div class="div-input-filter">
                    <h2>RUTINA DE EJERCICIOS</h2>

                    <!--Toda la logica correspondiente al crud-->

                    <h3>Agregar Ejercicio</h3>
                    <!--Agregar ejercicio-->
                    <div>
                        <form action="" id="agregar-ejercicio-form"></form>
                        <div>
                            <input class="input-agregar-ejercicio" name="ejercicio" type="text" form="agregar-ejercicio-form">
                            <label for="ejercicio">nombre del ejercicio</label>
                        </div>
                        <div>
                            <input class="input-agregar-ejercicio" name="cantrepeticiones" type="text" form="agregar-ejercicio-form">
                            <label for="cantrepeticiones">cantidad repeticiones</label>
                        </div>
                        <div>
                            <input class="input-agregar-ejercicio" name="cantseries" type="text" form="agregar-ejercicio-form">
                            <label for="cantseries">cantidad de series</label>
                        </div>
                        <div>
                            <textarea class="input-agregar-ejercicio" name="comentario" id="comentario" form="agregar-ejercicio-form"></textarea>
                            <label for="comentario">comentario del ejercicio</label>
                        </div>
                        <div>
                            <input type="submit" form="agregar-ejercicio-form">
                        </div>
                    </div>
                    <h3>eliminar Ejercicio</h3>
                    <!--eliminar ejercicio-->
                    <div>
                        <form action="" id="eliminar-ejercicio-form" method="post"></form>
                        <div>
                            <input type="text" name="eliminar-ejercicio" form="eliminar-ejercicio-form">
                            <label for="eliminar-ejercicio">id del ejercicio a eliminar</label>
                        </div>
                        <div>
                            <input type="submit" form="eliminar-ejercicio-form">
                        </div>
                    </div>

                    <!--Editar ejercicio-->
                    <h3>Editar Ejercicio</h3>
                    <div>
                        <form action="" id="editar-ejercicio-form"></form>
                        <div>
                            <input class="input-agregar-ejercicio" name="idejercicio" type="text" form="editar-ejercicio-form">
                            <label for="idejercicio">id del ejercicio a editar</label>
                        </div>
                        <div>
                            <input class="input-agregar-ejercicio" name="ejercicio-editar" type="text" form="editar-ejercicio-form">
                            <label for="ejercicio-editar">nombre del ejercicio editado</label>
                        </div>
                        <div>
                            <input class="input-agregar-ejercicio" name="cantrepeticiones-editar" type="text" form="editar-ejercicio-form">
                            <label for="cantrepeticiones-editar">cantidad repeticiones editado</label>
                        </div>
                        <div>
                            <input class="input-agregar-ejercicio" name="cantseries-editar" type="text" form="editar-ejercicio-form">
                            <label for="cantseries-editar">cantidad de series editado</label>
                        </div>
                        <div>
                            <textarea class="input-agregar-ejercicio" name="comentario-editar" id="comentario-editar" form="editar-ejercicio-form"></textarea>
                            <label for="comentario-editar">comentario del ejercicio editado</label>
                        </div>
                        <div>
                            <input type="submit" form="editar-ejercicio-form">
                        </div>
                    </div>

                    <!--mostrar ejercicios-->
                    <h3>Mostrar/Recargar Ejercicios</h3>
                    <div>
                        <div>
                            <button id="mostrar-rutina">Mostrar Todo</button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="park"> <!--div de los parques a mostrar-->
                <div class="grid-div-park"><!--debe haber un div padre para cada publicacion-->
                    <div class="park-img">
                        <!--aqui se agregará la imagen correspondiente al parque-->
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!--footer de la página-->
    <footer>
        <nav id="footer-nav">
            <ul class="footer-ul">
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Youtube</a></li>
                <li><a href="contacto.html">contacto</a></li>
            </ul>
        </nav>
    </footer>


    <!--Script de javascript al final del body-->
    <script src="js/variablesrutinas.js"></script>
</body>
</html>