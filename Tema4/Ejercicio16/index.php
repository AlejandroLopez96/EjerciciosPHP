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
        <h3>Mostraremos si el número que introduces es primo o no</h3>
        
        <?php
            $n = $_GET["numeroIntroducido"];
            $esPrimo = true;
            $i;
            for ($i = 2; $i < $n; $i++) {
              if (($n % $i) == 0) {
                $esPrimo = false;
              }
            }

            
        ?>
        <form action="index.php" method="get">
            Número:  <input type="number" name="numeroIntroducido">
            <input type="submit" value="Mostrar">
        </form>
        <?php
            if ($esPrimo) {
              echo "El número introducido es primo.";
            } else {
              echo"El número introducido no es primo.";
            }
        ?>
    </body>
</html>
