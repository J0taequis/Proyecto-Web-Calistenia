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
$motivo = $_POST['select-option'];
$mensaje = $_POST['message'];
$correo = $_POST['form-email'];
//insert form data into database
$sql = "INSERT INTO contacto (motivo, mensaje, correo) VALUES ('$motivo', '$mensaje','$correo')";
$result = $conn->query($sql);

$response = array();
if ($result) {
    $response['success'] = HTTP_response_code();//200 si estuvo bien
    exit(json_encode($response));
} else {
    $response['success'] = HTTP_response_code() . $conn->error;
    exit(json_encode($response));
}

$conn->close();
