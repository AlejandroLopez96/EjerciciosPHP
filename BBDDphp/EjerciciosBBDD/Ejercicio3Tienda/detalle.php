<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css.css"/>
        <style>
            img{
                width: 300px;
                height: 300px;
            }
        </style>
    </head>
    <body>
        <?php
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=tienda;charset=utf8", "root", "root");
        } catch (PDOException $e) {
            echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
            die ("Error: " . $e->getMessage());
        }

            
      
            session_start();

            $codigo = $_POST["codigo"];
            $consulta = $conexion->query("SELECT * FROM producto WHERE codProducto = '$codigo'");
            $producto = $consulta->fetchObject();
        ?>

            <h1><?= $producto->nombre?></h1>
            <img src="<?= $producto->imagen?>"/><br>
            Precio: <?= $producto->precio?>€<br>
            <?= $producto->detalle?>
            <form action="index.php" method="post">
                <input type="submit" value="Volver">
            </form>
    </body>
</html>
