<?php

//get form data and send to mysql database
//import connection variables
include_once 'config.php';

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

//insert form data into database
$sql = "INSERT INTO usuario (Nombre, correo, contrasena) VALUES ('$nombre', '$email', '$password_encrypted')";

//verficar que no se repitan datos

$verificar_email = mysqli_query($conn, "SELECT * FROM usuario WHERE correo = '$email' ");
$verificar_usuario = mysqli_query($conn, "SELECT * FROM usuario WHERE Nombre = '$nombre' ");

if(mysqli_num_rows($verificar_email) > 0) {
    echo '
        <script>
            alert("Este correo ya está registrado. intentalo de nuevo");
            window.location = "inicio.php";
        </script>
        ';
    exit();
}

if(mysqli_num_rows($verificar_usuario) > 0) {
    echo '
        <script>
            alert("Este usuario ya está registrado. intentalo de nuevo");
            window.location = "inicio.php";
        </script>
        ';
    exit();
}

$result = $conn->query($sql);

/* $response = array();

if ($result) {
    $response['success'] = "exito";
    exit(json_encode($response));
} else {
    $response['error'] = "error" . $conn->error;
    exit(json_encode($response));
} */

$conn->close();
