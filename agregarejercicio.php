<?php 

    include_once 'config.php';
    session_start();


    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection - OOP
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    //get form data
    $ejercicio = $_POST['ejercicio'];
    $cantrepeticiones = $_POST['cantrepeticiones'];
    $cantseries = $_POST['cantseries'];
    $comentario = $_POST['comentario'];
    if(isset($_SESSION['usuario'])){
        $Idusuario = $_SESSION['idlogueado'];
        $sql = "INSERT INTO rutina (ejercicio, cantrepeticiones, cantseries, comentario,Idusuario) VALUES ('$ejercicio', '$cantrepeticiones', '$cantseries', '$comentario','$Idusuario')";
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