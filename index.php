<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="NOINDEX">
    <meta name="description" content="Proyecto Desarrollo Web Hecho por Sion Arancibia y Eduardo Jaramillo">
    <link rel="stylesheet" type="text/css" href="./css/styleindex.css">
    <script src="js/datos.js"></script>
    <title>Proyecto de calistenia</title>
</head>


<body>

    <!--Barra de navegación-->

    <header>
        <nav>
            <a id="login-button" href = "sessionDestroy.php">Cerrar sesión</a>
            <ul class="ul-flex-row">
                <li><a href="index.php">Inicio / Home</a></li>
                <li><a href="rutinas.php">Mi Rutina</a> </li>
                <li class="QS"><a href="aboutus.html" >Quienes Somos</a></li>
                <li><a href="contacto.html">Contacto</a> </li>
            </ul>
        </nav>
    </header>


    <!--Contenido general de la página-->
    <main>
        <article class="article-content" aria-label="article">
            <section class="banner">
                <div class="banner-content">
                    <h2>Bienvenidos al mundo de la calistenia</h2>
                    <a href="#card-container">Ver artículos</a>
                </div>
            </section>
            <section class="section-exercises">
                <div id="card-container">
                    <div class="card">
                        <figure>
                            <img src="imgs/calistenia1.1.png" alt="">
                        </figure>
                        <div class="content-card">
                            <h3>Front Lever</h3>
                            <p>
                                El front lever es un ejercicio de calistenia y gimnasia deportiva que se realiza en las
                                barras y anillas manteniendo el cuerpo paralelo al suelo y completamente horizontal
                                desde la cabeza pasando por cadera y rodillas hasta los tobillos.
                            </p>
                            <a href="#">Leer más</a>
                        </div>
                    </div>
                </div>
                <div id="card-container">
                    <div class="card">
                        <figure>
                            <img src="imgs/calistenia1.2.jpeg" alt="">
                        </figure>
                        <div class="content-card">
                            <h3>Muscle-up</h3>
                            <p>
                                El muscle-up es un ejercicio de entrenamiento de fuerza avanzado, dentro del dominio de
                                la calistenia. Es una rutina combinada de un pull-up radial seguido de un dip. Existen
                                variaciones tanto para los anillos como para la barra.
                            </p>
                            <a href="#">Leer más</a>
                        </div>
                    </div>
                </div>
                <div id="card-container">
                    <div class="card">
                        <figure>
                            <img src="imgs/calistenia1.3.jpg" alt="">
                        </figure>
                        <div class="content-card">
                            <h3>Full planche</h3>
                            <p>
                                El ejercicio Full Planche, es un movimiento calisténico, el cual consiste en sostener tu
                                cuerpo en una posición paralela al suelo haciendo uso de la fuerza de tus manos y brazos
                                al mismo tiempo, para que el resto de tu cuerpo se mantenga en equilibrio.
                            </p>
                            <a href="#">Leer más</a>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>


    <!--footer de la página-->
    <footer>
        <nav>
            <ul class="footer-ul">
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Youtube</a></li>
                <li><a href="contacto.html">Contacto</a></li>
            </ul>
        </nav>
    </footer>


    <!--Script de javascript al final del body-->
</body>

</html>