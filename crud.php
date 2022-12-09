<?php

include_once "config.php";
session_start();
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//Para axios
$_POST = json_decode(file_get_contents("php://input"), true);

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

$idrutina = (isset($_POST['idrutina'])) ? $_POST['idrutina'] : '';
$ejercicio = (isset($_POST['ejercicio'])) ? $_POST['ejercicio'] : '';
$cantrepeticiones = (isset($_POST['cantrepeticiones'])) ? $_POST['cantrepeticiones'] : '';
$cantseries = (isset($_POST['cantseries'])) ? $_POST['cantseries'] : '';
$comentario = (isset($_POST['comentario'])) ? $_POST['comentario'] : '';
//$idusuario = (isset($_POST['idusuario'])) ? $_POST['idusuario'] : '';
$iduser = $_SESSION['idlogueado'];

switch ($opcion) {
    case 1:
        //Leer
        $consulta = "SELECT idrutina, ejercicio, cantrepeticiones, cantseries, comentario, idusuario FROM rutina WHERE Idusuario = '$iduser'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2:
        //Crear
        $consulta = "INSERT INTO rutina (ejercicio, cantrepeticiones, cantseries, comentario, Idusuario) VALUES ('$ejercicio', '$cantrepeticiones', '$cantseries', '$comentario', '$iduser')";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;
    case 3:
        //Actualizar
        $consulta = "UPDATE rutina SET ejercicio = '$ejercicio', cantrepeticiones = '$cantrepeticiones', cantseries = '$cantseries', comentario = '$comentario' WHERE (idrutina = '$idrutina') AND (Idusuario = '$iduser')";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 4:
        $consulta = "DELETE FROM rutina WHERE (idrutina='$idrutina') AND (Idusuario='$iduser') ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //Enviamos el array final dependiendo del caso, (caso de actualizar o crear) en formato json al javascript
$conexion = NULL; //Cerrar conexión

//$conexion->close();