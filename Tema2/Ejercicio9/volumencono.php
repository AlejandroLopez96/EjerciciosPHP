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
        $volumen = round(((1/3) * pi() * $a * $a * $b),$volumen=2);
        echo "El volumen del cono es ",$volumen, " cm3";
        ?>
    </body>
</html>
