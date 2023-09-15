<?php
include "conexion.php";

if(isset($_POST['enviar'])){
    if(
        strlen($_POST['nombre']) >=1 &&
        strlen($_POST['imagen']) >=1 
        
    ){
        $nombre = trim($_POST['nombre']);
        $imagen = trim($_POST['imagen']);

        $consulta = "INSERT INTO actor (nombre,imagen)
            VALUES('$nombre','$imagen') ";
        
        $resultado = mysqli_query($conexion,$consulta);

    }else{
        ?>
            <h3>Llena todos los campos</h3>
        <?php
        echo 'Ha ocurrido un error';
    }
}

?>