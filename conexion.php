<?php
    $conexion = mysqli_connect("localhost", "root", "", "actores");

    if($conexion->connect_error){
        die("Conection failed: ".$conexion->connect_error);
    }
?>