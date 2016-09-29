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
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
        
        // 0x^2 + 0x + 0 = 0;
        if (($a == 0) && ($b == 0) && ($c == 0)) {
            echo "La ecuación tiene infinitas soluciones.";
        }

        // 0x^2 + 0x + c = 0  con c distinto de 0;
        if (($a == 0) && ($b == 0) && ($c != 0)) {
            echo "La ecuación no tiene solución.";
        }

        // ax^2 + bx + 0 = 0  con a y b distintos de 0;
        if (($a != 0) && ($b != 0) && ($c == 0)) {
            echo "x1 = 0","<br>";
            echo "x2 = ",(-$b / $a);
        }

        // 0x^2 + bx + c = 0  con b y c distintos de 0;
        if (($a == 0) && ($b != 0) && ($c != 0)) {
            echo "x1 = x2 = ",(-$c / $b);
        }

        // ax^2 + bx + c = 0  con a, b y c distintos de 0;
        if (($a != 0) && ($b != 0) && ($c != 0)) {	
            $discriminante = $b*$b - (4 * $a * $c);
            if ($discriminante < 0) {
                echo "La ecuación no tiene soluciones reales";
            }else{
                echo "x1 = ",(-$b + sqrt($discriminante))/(2 * $a),"<br>";
                echo "x2 = ",(-$b - sqrt($discriminante))/(2 * $a);
            }
        }
        ?>
    </body>
</html>
