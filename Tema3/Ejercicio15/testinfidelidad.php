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
        $puntos = 0;
        $true = $_GET['r1'];
        $false = $_GET['r1'];
        if ($true){
            $puntos = $puntos+3;
        }
        $true = $_GET['r2'];
        $false = $_GET['r2'];
        if ($true){
            $puntos = $puntos+3;
        }
        $true = $_GET['r3'];
        $false = $_GET['r3'];
        if ($true){
            $puntos = $puntos+3;
        }
        $true = $_GET['r4'];
        $false = $_GET['r4'];
        if ($true){
            $puntos = $puntos+3;
        }
        $true = $_GET['r5'];
        $false = $_GET['r5'];
        if ($true){
            $puntos = $puntos+3;
        }
        $true = $_GET['r6'];
        $false = $_GET['r6'];
        if ($true){
            $puntos = $puntos+3;
        }
        $true = $_GET['r7'];
        $false = $_GET['r7'];
        if ($true){
            $puntos = $puntos+3;
        }
        $true = $_GET['r8'];
        $false = $_GET['r8'];
        if ($true){
            $puntos = $puntos+3;
        }
        $true = $_GET['r9'];
        $false = $_GET['r9'];
        if ($true){
            $puntos = $puntos+3;
        }
        $true = $_GET['r10'];
        $false = $_GET['r10'];
        if ($true){
            $puntos = $puntos+3;
        }
        echo "Has obtenido: ",$puntos," puntos", "<br>"; 
        if ($puntos <= 10) {
          echo "Enhorabuena! tu pareja parece ser totalmente fiel."; 
        }

        if (($puntos > 11) && ($puntos <= 22)) {
          echo "Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.";
        }

        if (($puntos > 22) && ($puntos <= 30)) {
          echo "Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües que es lo que está pasando por su cabeza.";
        }
        ?>
    </body>
</html>
