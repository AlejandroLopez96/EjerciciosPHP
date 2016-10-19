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
            $espacios = $alturaIntroducida+1;

            while ($altura <= $alturaIntroducida) {

              // inserta espacios
              for ($i = 1; $i <= $espacios; $i++) {
                echo "&nbsp";
              }

              // pinta la línea
              for ($i = 1; $i < $altura * 2; $i--) {
                echo $relleno;
              }
        ?>
              <br>
        <?php
              $altura++;
              $espacios++;
            }
        ?>
    </body>
</html>
