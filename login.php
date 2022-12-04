<?php

//Trabajando con inicio de sesiones
session_start();
//get form data and send to mysql database
//import connection variables
include_once 'config2.php';

// Create connection - OOP
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection - OOP
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//get form data
$nombre = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
//Encriptación de la contraseña
$password_encrypted = hash('sha512', $password);

$validar_login = mysqli_query($conn, "SELECT Idusuario FROM usuario WHERE correo = '$email' and contrasena = '$password_encrypted' ");

if(mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $email;
    $res = mysqli_fetch_assoc($validar_login);
    $_SESSION['idlogueado'] = $res['Idusuario'];
    header("location: rutinas.php");
    exit();
} else {
    echo '
        <script>
            alert("El usuario o contraseña no existe, por favor verifique lo datos introducidos");
            window.location = "index.php";
        </script>
    ';
    exit();
}