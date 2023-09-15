<?php
include "registrar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir actor</title>
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

            <div class="formulario">
                <form action="registrar.php" method="post" class="form">
                    <h1>Añade a un famoso a la lista</h1>
                    <div class="celdas">
                        <input type="text" name="nombre" id="nombre" class="casilla" placeholder="Nombre del actor">
                        <input type="text" name="imagen" id="imagen" class="casilla" placeholder="URL de foto del actor">
                        <input type="submit" name="enviar" value="Enviar" class="Enviar">
                    </div>
                    
                </form>
                <?php
                    include("registrar.php");
                ?>
            </div>
      

    </main>
    
</body>
</html>