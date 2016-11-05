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
            session_start();

            $codigo = $_POST["codigo"];
            $producto = $_SESSION['catalogo'][$codigo];
        ?>

            <h1><?= $producto['nombre']?></h1>
            <img src="<?= $producto['imagen']?>"/><br>
            Precio: <?= $producto['precio']?>€<br>
            <?= $producto['detalle']?>
            <form action="index.php" method="post">
                <input type="submit" value="Volver">
            </form>
    </body>
</html>
