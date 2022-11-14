<?php 

    include_once 'config.php';
    session_start();


    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection - OOP
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    //get form data
    $idejercicio = $_POST['idejercicio'];
    $ejercicio = $_POST['ejercicio-editar'];
    $cantrepeticiones = $_POST['cantrepeticiones-editar'];
    $cantseries = $_POST['cantseries-editar'];
    $comentario = $_POST['comentario-editar'];

    if(isset($_SESSION['usuario'])){
        $Idusuario = $_SESSION['idlogueado'];
        $sql = "UPDATE rutina SET ejercicio='$ejercicio',cantrepeticiones='$cantrepeticiones',cantseries='$cantseries',comentario='$comentario' WHERE (Idrutina='$idejercicio') AND (Idusuario='$Idusuario')";

    }else{
        echo '
        <script>
            alert("Algun dato invalido");
        </script>
        ';
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