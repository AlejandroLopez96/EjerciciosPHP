<?php
session_start(); // Inicio de sesión
if(!isset($_SESSION['productos'])) {
    $_SESSION['palabras'] = array(
        "p1" => array("imagen" => "","nombre" => "Camiseta Seleccion Española","precio" => 40),
        "p2" => array("imagen" => "","nombre" => "Camiseta Seleccion Rusa","precio" => 40),
        "p3" => array("imagen" => "","nombre" => "Camiseta Real Madrid","precio" => 60),
        "p4" => array("imagen" => "","nombre" => "Camiseta Bayern Munich","precio" => 60),
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
        
        ?>
    </body>
</html>
