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
        <form action="index.php" method="get">
            Número:  <input type="number" name="numero" autofocus>
            <input type="submit" value="Mostrar">
        </form>
        <?php
            $numero;
            $maximo = PHP_INT_MIN;
            $minimo = PHP_INT_MAX;
            $i;

            for ($i = 0; $i < 10; $i++) {
              $numero[$i] = $_GET["numero"];

              if ($numero[$i] < $minimo) {
                $minimo = $numero[$i];
              }

              if ($numero[$i] > $maximo)	{
                $maximo = $numero[$i];
              }
            }

            echo "<br>";

            for ($i = 0; $i < 10; $i++) {
              echo $numero[$i];
              if ($numero[$i] == $maximo) {
                echo " máximo";
              }

              if ($numero[$i] == $minimo) {
                echo " mínimo";
              }
              echo "<br>";
            }
        ?>
    </body>
</html>
