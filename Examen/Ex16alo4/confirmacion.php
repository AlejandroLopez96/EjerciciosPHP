<?php
session_start();
if(!isset($_SESSION['catalogo'])){  $_SESSION['catalogo'] = array (
        "cod1" => array( "nombre" => "Camiseta Selección Española", "precio" => 40, "imagen" => "imagenes/espania.jpg", "detalle" => "Año: 2016-2017", "stock" => 5),
        "cod2" => array( "nombre" => "Camiseta Selección Rusa", "precio" => 40, "imagen" => "imagenes/rusia.jpg", "detalle" => "Año: 2016-2017", "stock" => 5),
        "cod3" => array( "nombre" => "Camiseta Real Madrid C.F.", "precio" => 50, "imagen" => "imagenes/madrid.jpg", "detalle" => "Año: 2016-2017", "stock" => 5),
        "cod4" => array( "nombre" => "Camiseta Bayern Munich", "precio" => 50, "imagen" => "imagenes/bayern.jpg" , "detalle" => "Año: 2016-2017",  "stock" => 0)
        );
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $codigo = $_POST["codigo"];
        $accion = $_POST["accion"];
        if($accion == "eliminar"){
        $_SESSION["carrito"][$codigo] = 0;
        }
        ?>
        <h1>¿Seguro que quieres eliminar el producto?</h1>
        <form action="index.php" method="post">
            <input type="hidden" name="codigo" value="<?= $codigo?>"/>
            <input type="hidden" name="accion" value="eliminar"/>
            <input type="submit" value="Eliminar">  
        </form>
        <form action="index.php" method="post">
            <input type="submit" value="Cancelar">
        </form>
    </body>
</html>
