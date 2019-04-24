<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
require_once 'conexion.php';

    $sql= 'SELECT * FROM opciones';
    $sentencia= $conexion->prepare($sql);
    $sentencia->execute();
    $datos= $sentencia->fetchAll();

    echo json_encode($datos);
?>

