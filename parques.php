<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/styleparques.css">
    <script src="js/datos.js"></script>
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
                    <div class="search-div">
                        <input type="search" placeholder="Buscar parque..." id="search-input">
                        <button id="search-button">Buscar</button>
                    </div>
                    <label for="city">Ubicación Geografica</label>
                    <select name="ciudad" id="city">
                        <option value="">Temuco</option>
                        <option value="">Padre Las Casas</option>
                        <option value="">Valdivia</option>
                        <option value="">Santiago</option>
                        <option value="">Viña Del Mar</option>
                        <option value="">Arica</option> <!--ir agregando mas ciudades-->
                    </select>

                    <label for="cost">¿Costo de entrada?</label>
                    <input type="checkbox" id="cost">

                    <label for="stars">¿Puntuación?</label>
                    <select name="stars" id="stars">
                        <option value="">1 estrella</option>
                        <option value="">2 estrellas</option>
                        <option value="">3 estrellas</option>
                    </select>

                    <button>Aplicar Filtros</button>
                </div>
            </div>

            <div class="park"> <!--div de los parques a mostrar-->
                <div class="grid-div-park"><!--debe haber un div padre para cada publicacion-->
                    <div class="park-img">
                        <!--aqui se agregará la imagen correspondiente al parque-->
                    </div>

                    <div class="park-description"> <!--descripcion de los parques a mostrar-->
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo asperiores fuga amet soluta, ipsa est quas voluptatem. Dolor assumenda, harum provident explicabo, facilis nostrum corrupti facere sit laboriosam, neque quam!</p>
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
    <script src="js/variables.js"></script>
</body>
</html>