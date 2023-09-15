<?php
include "conexion.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actores</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

   <main class="MAIN">
        <header class="cabeza">
            <div class="inicio">
                <h1 class="logo">Famosos de Hollywood</h1>
            </div>
            <nav class="navegacion">
                <a href="index.php" class="link">Inicio</a>
                <a href="alta.php" class="link">Registrar Actor</a>
            </nav>
        </header>
   </main>
        <div class="info">
            <h2 class="tituloinfo">¡Bienvenido seas!</h2>
            <br></br>
            <h4 class="subtituloinfo">Conoce el rostro de estas celebridades</h4>
        </div>
        
            <div class="tabla">
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Foto</th>
                        </tr>
                    </thead>

                    <?php
                        include "conexion.php";
                        $sql = "SELECT nombre, imagen FROM actor";
                        $execute = mysqli_query($conexion, $sql) or die (mysqli_error($conexion));

                        while($column = mysqli_fetch_array($execute)){
                    ?> 
                    <tbody>
                        <tr>
                            <td><?php echo $column["nombre"]?></td>
                            <td> <img src=" <?php echo $column["imagen"] ?>" width="400" height="380" alt="Esta imagen no se encuentra disponible"> </td>
                        </tr> 
                        <?php //abre el codigo PHP
                        }
                         ?>
                    </tbody>
                </table> 
             </div>
</body>
</html>