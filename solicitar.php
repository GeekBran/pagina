<?php
include("configuracion.php");
if(isset($_POST['submit'])){
    if(
        strlen($_POST['correo']) >=1 
        
    ){
        $correo = trim($_POST['correo']);
        $consulta = "INSERT INTO solicitud(Correo)
            VALUES('$correo') ";
        
        $resultado = mysqli_query($conexion,$consulta);

    }else{
        ?>
            <h3>Llena todos los campos</h3>
        <?php
    }
}

?>
