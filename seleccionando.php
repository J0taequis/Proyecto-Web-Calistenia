<?php

//get form data and send to mysql database
//import connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "calistenia";

// Create connection - OOP
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection - OOP
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//get form data
$motivo = $_GET['select-option'];

//insert form data into database
$sql = "SELECT correo FROM contacto WHERE motivo='$motivo'";
$result = $conn->query($sql);
$response = array();

$response['correo'] = "holiwi";
json_encode($response);

$conn->close();



