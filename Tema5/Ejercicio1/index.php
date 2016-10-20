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
        $num;
        $cua;
        $cub;
        echo "NUMERO | CUADRADO |   CUBO";

        for($i = 0; $i < 20; $i++) {
          $ale=rand(0,101);
          $num[$i]=$ale;
          $cua[$i]=$num[$i]*$num[$i];
          $cub[$i]=$num[$i]*$num[$i]*$num[$i];
          echo "<br>","&nbsp;&nbsp;&nbsp;&nbsp; ",$num[$i], 
          "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ", 
          $cua[$i], "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ", $cub[$i];
        }
        ?>
    </body>
</html>
