<?php

//get form data and send to mysql database
//connection variables
include_once 'config.php';

// Create connection - OOP
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection - OOP
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//get form data
$nombre = $_POST['nombre'];
$email = $_POST['correo'];
$contrasena = $_POST['contrasena'];

//insert form data into database
$sql = "INSERT INTO usuario (Nombre, correo, contrasena) VALUES ('$nombre', '$email', '$contrasena')";
$result = $conn->query($sql);

$response = array();

if ($result) {
    $response['success'] = "exito";
    exit(json_encode($response));
} else {
    $response['error'] = "error" . $conn->error;
    exit(json_encode($response));
}

$conn->close();

