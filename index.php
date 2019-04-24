<?php

    require_once 'controller/conexion.php';
    $conecta= conecta();
    if($conecta==true){
        echo "<script>console.log('bd ok');</script>";
    }
    $usuarios=["joshua","maylin","sophia"];
    $max= count($usuarios);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./node_modules/materialize-css/dist/css/materialize.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>API php</title>
</head>
<body class="app">
    <header>
        <nav class="nav navbar blue"></nav>
    </header>
    <main>
        <div class="row">
            <div class="col s6">
                <ul class="collection">
                    <?php foreach ($usuarios as $v) {
                        echo "<a class='collection-item'>". $v . "</a>";
                        }
                      ?>    
                </ul>
            </div>
        </div>
        
    </main>
  
    <footer class="page-footer blue valign-wrapper center">
        <div class="container">
        <p class="flow-text ">&copy; 2019 versión PHP: <?php echo  phpversion(); ?></p>
        </div>
    </footer>
    
    
 

    
</body>
</html>
<script src="./node_modules/materialize-css/dist/js/materialize.min.js"></script>