<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alta de clientes</title>
    </head>
    <body>
        <h2>Alta de clientes</h2>
        <?php
            // Conexión a la base de datos
            try {
                $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "root");
            } catch (PDOException $e) {
                echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
                die ("Error: " . $e->getMessage());
            }
            // Comprueba si ya existe un cliente con el DNI introducido
            $consulta = $conexion->query("SELECT dni FROM cliente WHERE dni=".$_POST['dni']);
            $borrar = "DELETE FROM cliente WHERE dni=".$_POST['dni'];
            $conexion -> exec($borrar);
            echo "Cliente borrado correctamente";
        ?>
            <form action="index.php" method="post">
                <input type="submit" value="Volver">
            </form>
    </body>
</html>