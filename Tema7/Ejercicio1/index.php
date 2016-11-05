<?php
session_start(); // Inicio de sesión
if(!isset($_SESSION['cantidadNumeros'])) {
$_SESSION['cantidadNumeros'] = 0;//en el sesion mete los que estaban como hidden
$_SESSION['total'] = 0;
} /*quiere decir que si cantidadNumeros no tiene valor se le asigna el
 * valor 0 cuando lo igualo dentro del if y total tambien es 0 porq no hay ningun numero.*/
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
  </head>
  <body>    
    <?php
      $numero = $_GET['numero'];
            if (!isset($numero) || $numero >= 0) {
            
                if (isset($numero)) {
                    $_SESSION['cantidadNumeros']++;
                }
                $_SESSION['total'] += $numero;
        ?>
      <form action="index.php" method="get">
            Introduzca un número: <input type="number" name="numero" autofocus="">
            <input type="submit" value="Introducir">
        </form>
        <?php
            } else {
        ?>
            <p>La media de los números introducidos es: 
            <?= $_SESSION['total']/$_SESSION['cantidadNumeros']?></p>
        <?php
            }
        ?>
  </body>
</html>