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
            Altura de la pirámide:  <input type="number" name="alturaIntroducida">
            Relleno de la pirámide:  <input type="text" name="relleno">
            <input type="submit" value="Mostrar">
        </form>
        <?php
            $alturaIntroducida = $_GET["alturaIntroducida"];
            $relleno =  $_GET["relleno"];

            $altura = 1;
            $i = 0;
            $espaciosPorDelante = $alturaIntroducida - 1;
            $espaciosInternos = 0;

            while ($altura < $alturaIntroducida) {

              // inserta espacios delante
              for ($i = 1; $i <= $espaciosPorDelante; $i++) {
                echo "&nbsp;";
              }

              // pinta la línea
              echo $relleno;
              for ($i = 1; $i < $espaciosInternos; $i++) {
                echo "&nbsp;";
              }

              if ($altura>1) {
                echo $relleno;
              }
        ?>
        <br>
        <?php
              
              $altura++;
              $espaciosPorDelante--;
              $espaciosInternos += 2;
            } // while ////////////////////////////

            // base de la pirámide
            for ($i = 1; $i < $altura*1.2; $i++) {
              echo $relleno;
            }
        ?>
    </body>
</html>
