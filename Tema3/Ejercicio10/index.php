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
        <h3>¿Cuál es tu horóscopo? </h3>
        <form action="horoscopo.php" method="get">
            Introduce el numero de mes de tu nacimiento: <input type="number" name="mes" min="1" max="12">
            Introduce el día de tu nacimiento: <input type="number" name="dia" min="1" max="31">
            <input type="submit" value="Mostrar horoscopo">
        </form>
    </body>
</html>
