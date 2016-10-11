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
            Número:  <input type="number" name="numeroIntroducido">
            <input type="submit" value="Mostrar Fibonacci">
        </form>
        <?php
        $n = $_GET["numeroIntroducido"];

        switch ($n) {
          case 1:
            echo "0";
            break;
          case 2:
            echo "0 1";
            break;
          default:
            echo "0 1";
            $f1 = 0;
            $f2 = 1;
            $aux;
            while($n > 2) {
                $aux = $f1;
                $f1 = $f2;
                $f2 = $aux + $f2;
                echo " " , $f2;
                $n--;
            }
        }    
        ?>
        <br>
    </body>
</html>
