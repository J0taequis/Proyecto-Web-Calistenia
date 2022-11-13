<?php 

    include_once 'config.php';
    session_start();


    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection - OOP
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    //get form data
    $Idrutina = $_POST['eliminar-ejercicio'];

    if($_SESSION['logeado'] == "si"){
        $sql = "DELETE FROM rutina WHERE Idrutina ='$Idrutina'";
    }else{
        echo'<p>inicia sesion para tener acceso...</p>';
    }

    $result = $conn->query($sql);

    $response = array();

    if ($result) {
        $response['success'] = "exito";
        exit(json_encode($response));
    } else {
        $response['error'] = "error" . $conn->error;
        exit(json_encode($response));
    }

?>