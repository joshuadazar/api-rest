<?php


try{
    $cadena= 'mysql:host=localhost;dbname=api';
    $conexion= new PDO($cadena,'api', 'icaros321');
    
}catch(PDOException $e){
    echo "ERROR: " . $e->getMessage();
}

?>