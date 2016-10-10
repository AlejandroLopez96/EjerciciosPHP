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
            $numeroIntroducido = $_GET['numeroIntroducido'];
            $numeroDeDigitos = "1". $n. $numeroIntroducido;

            $n = numeroIntroducido;

            while ($n > 10) {
              $n /= 10;
              $numeroDeDigitos++;
            }

            echo $numeroIntroducido . " tiene ". $numeroDeDigitos ." dígito/s.";
        ?>
    </body>
</html>
