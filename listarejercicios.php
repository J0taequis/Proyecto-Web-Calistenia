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

//insert form data into database
$sql = "SELECT * FROM rutina";
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