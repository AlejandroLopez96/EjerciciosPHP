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
        if($a >= 6 && $a <=12){
            echo "Buenos dias!";
        }
        if($a >= 13 && $a <=20){
            echo "Buenas tardes!";
        }
        if(($a >= 21 && $a <=24)||($a>=1 && $a<=5)){
            echo "Buenas noches!";
        }
        ?>
    </body>
</html>
