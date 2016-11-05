<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mantenimiento de clientes</title>
    </head>
    <body>
        <h2>Mantenimiento de clientes</h2>
        <?php
            // Conexión a la base de datos
            try {
                $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "root");
            } catch (PDOException $e) {
                echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
                die ("Error: " . $e->getMessage());
            }
            $consulta = $conexion->query("SELECT * FROM cliente");//query es para sacar datos
        ?>
        <table border="1">
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th></th>
                <th></th>
            </tr>
        <?php
            while ($cliente = $consulta->fetchObject()) {
        ?>
            <tr>
                <td><?= $cliente->dni ?></td>
                <td><?= $cliente->nombre ?></td>
                <td><?= $cliente->direccion ?></td>
                <td><?= $cliente->telefono ?></td>
                <td>
                    <form action="eliminarCliente.php" method="post">
                        <input type="hidden" name="dni" value="<?= $cliente->dni ?>">
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
                <td>
                    <form action="modificaCliente.php" method="post">
                        <input type="hidden" name="dni" value="<?= $cliente->dni ?>">
                        <input type="hidden" name="nombre" value="<?= $cliente->nombre ?>">
                        <input type="hidden" name="direccion" value="<?= $cliente->direccion ?>">
                        <input type="hidden" name="telefono" value="<?= $cliente->telefono ?>">
                        <input type="submit" value="Modificar">
                    </form>
                </td>
            </tr>
        <?php
            }
        ?>
            <form action="altaCliente.php" method="post">
                <tr>
                    <td>
                        <input type="text" name="dni">
                    </td>
                    <td>
                        <input type="text" name="nombre">
                    </td>
                    <td>
                        <input type="text" name="direccion">
                    </td>
                    <td>
                        <input type="tel" name="telefono">
                    </td>
                    <td>
                        <input type="submit" value="Alta">
                    </td>
                </tr>
            </form>
        </table>
        <?php $conexion->close(); ?>
    </body>
</html>
