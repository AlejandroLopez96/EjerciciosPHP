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
    </head>
    <body>
        <?php
            // Conexión a la base de datos
            try {
                $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "root");
            } catch (PDOException $e) {
                echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
                die ("Error: " . $e->getMessage());
            }
            
            $accion = $_POST['accion'];//recojo lo que meto en accion por fomulario y guardo el value que es modificar
            if($accion == "modificar"){ //al ser igual se actualizan los datos
                $modificacion = "UPDATE cliente SET  nombre=\"$_POST[nombre]\", "
                  . "direccion=\"$_POST[direccion]\", telefono=\"$_POST[telefono]\" WHERE dni=\"$_POST[dni]\"";
                $conexion->exec($modificacion);//lo ejecuta
                echo "Cliente actualizado correctamente.";
                header( "refresh:3;url=index.php" );//y el refresh que los segundo para que se recargue al index
                $conexion->close();
            }else{
        ?>
        <form method="post" action="modificaCliente.php">
            <div> 
              <label>&nbsp;&nbsp;DNI:&nbsp;</label><input type="text" size="5" name="dni" value="<?= $_POST['dni'] ?>">
            </div>
            <div>
                <label>&nbsp;&nbsp;Nombre:&nbsp;</label><input type="text" size="20" name="nombre" value="<?= $_POST['nombre']?>">
            </div>
            <div>
                <label>&nbsp;&nbsp;Direccion:&nbsp;</label><input type="text" size="6" name="direccion" value="<?= $_POST['direccion'] ?>">
            </div>
            <div>
                <label>&nbsp;&nbsp;Teléfono:&nbsp;</label><input type="tel" name="telefono" size="20" value="<?= $_POST['telefono'] ?>">
            </div>
            <div>
                <input type="hidden" name="accion" value="modificar">
            </div>
            <hr>
            
            &nbsp;&nbsp;<a href="index.php"><span></span>Cancelar</a>
            <button type="submit" ><span ></span>Aceptar</button><br><br>
        </form>
        <?php
            }
        ?>
    </body>
</html>
