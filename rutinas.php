
<?php

session_start();

if(!isset($_SESSION['usuario'])) {
    echo '
    
    <script>
        alert("Por favor debes iniciar sesión");
        window.location = "inicio.php";
    </script>
    
    ';
    session_destroy();
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap - CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Fontawesome - CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- SweetAlert2 - CSS -->
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/stylerutinas.css">
    <title>Parques de calistenia</title>
</head>
<body>


    <!--Barra de navegación-->

    <header>
        <nav id="header-nav">
            <a id="login-button" href = "sessionDestroy.php">Cerrar sesión</a>
            <ul class="ul-flex-row">
                <li><a href="index.php">Inicio / Home</a></li>
                <li><a href="rutinas.php">Mi Rutina</a> </li>
                <li class="QS"><a href="aboutus.html" >Quienes Somos</a></li>
                <li><a href="contacto.html">Contacto</a> </li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="title-rutina">
            <h2 class="text-center text-dark"> <span class="badge bg-warning">MIS RUTINAS</span></h2>
        </div>

        <div id="crudApp">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <button @click=btnCrear class="btn btn-success" title="Nuevo"><i class="fas fa-plus-circle fa-2xs"></i></button>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <table class="table table-striped">
                            <thead>
                                <tr class="bg-primary text-light">
                                    <th>ID rutina</th>
                                    <th>Ejercicio</th>
                                    <th>Repeticiones</th>
                                    <th>Series</th>
                                    <th>Comentario</th>
                                    <th>ID usuario</th>
                                    <th>Acciones</th>
                                </tr>
                                <tbody>
                                    <tr v-for="(exercise, index) of exercises">
                                        <td>{{exercise.idrutina}}</td>
                                        <td>{{exercise.ejercicio}}</td>
                                        <td>
                                            <div class="col-md-8">
                                                <input type="number" v-model.number="exercise.cantrepeticiones" class="form-control text-right" disabled>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="col-md-8">
                                                <input type="number" v-model.number="exercise.cantseries" class="form-control text-right" disabled>
                                            </div>
                                        </td>
                                        <td>{{exercise.comentario}}</td>
                                        <td>{{exercise.idusuario}}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button class="btn btn-secondary" title="Editar" @click="btnEditar(exercise.idrutina, exercise.ejercicio, exercise.cantrepeticiones, exercise.cantseries, exercise.comentario)"> <i class="fas fa-pencil-alt"></i> </button>
                                                <button class="btn btn-danger" title="Eliminar" @click="btnBorrar(exercise.idrutina)"> <i class="fas fa-trash-alt"></i> </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!--footer de la página-->
    <footer>
        <nav>
            <ul class="footer-ul">
                <li> <i class="fa-brands fa-instagram"></i> <a href="#">Instagram</a></li>
                <li> <i class="fa-brands fa-facebook"></i> <a href="#">Facebook</a></li>
                <li> <i class="fa-brands fa-youtube"></i> <a href="#">Youtube</a></li>
                <li><a href="contacto.html">Contacto</a> </li> 
            </ul>
        </nav>
    </footer>

    <!-- Vue - JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- Axios - JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.0/axios.js" integrity="sha512-nNH8gXanGmEPnnK9/yhI3ETaIrujVVJ7dstiVIwMtcfbcj1zzTlnH5whbsYhg6ihg5mFe1xNkPPLwCwwvSAUdQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- SweetAlert2 - JS -->
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.2/dist/sweetalert2.all.min.js"></script> -->
    <!-- Jquery - JS -->
    <script src="jquery/jquery-3.6.1.min.js"></script>
    <!-- Popper - JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha512-nnzkI2u2Dy6HMnzMIkh7CPd1KX445z38XIu4jG1jGw7x5tSL3VBjE44dY4ihMU1ijAQV930SPM12cCFrB18sVw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap - JS --> 
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Script - JS -->
    <script src="js/crud.js"></script>
    <!-- Fontawesome - JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>