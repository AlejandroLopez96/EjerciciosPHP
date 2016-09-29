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
        if ($a == 0) {
            echo "Esa ecuación no tiene solución real.";
        } else {
            echo "x = ",-($b)/($a);
        }
        ?>
    </body>
</html>
