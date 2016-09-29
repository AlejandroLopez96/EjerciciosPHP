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
        $mes = $_GET['mes'];
        $dia = $_GET['dia'];
        
        switch ($mes) {

        case 1:
        if ($dia < 21) {
          $horoscopo = "capricornio";
        } else { 
          $horoscopo = "acuario";
        }
          break;

        case 2:
        if ($dia < 21) {
          $horoscopo = "acuario";
        } else { 
          $horoscopo = "piscis";
        }
          break;

        case 3:
        if ($dia < 21) {
          $horoscopo = "piscis";
        } else { 
          $horoscopo = "aries";
        }
          break;

        case 4:
        if ($dia < 20) {
          $horoscopo = "aries";
        } else { 
          $horoscopo = "tauro";
        }
          break;

        case 5:
        if ($dia < 22) {
          $horoscopo = "tauro";
        } else { 
          $horoscopo = "géminis";
        }
          break;

        case 6:
        if ($dia < 22) {
          $horoscopo = "géminis";
        } else { 
          $horoscopo = "cáncer";
        }
          break;

        case 7:
        if ($dia < 24) {
          $horoscopo = "cáncer";
        } else { 
          $horoscopo = "leo";
        }
          break;

        case 8:
        if ($dia < 23) {
          $horoscopo = "leo";
        } else { 
          $horoscopo = "virgo";
        }
          break;

        case 9:
        if ($dia < 23) {
          $horoscopo = "virgo";
        } else { 
          $horoscopo = "libra";
        }
          break;

        case 10:
        if ($dia < 23) {
          $horoscopo = "libra";
        } else { 
          $horoscopo = "escorpio";
        }
          break;

        case 11:
        if ($dia < 21) {
          $horoscopo = "escorpio";
        } else { 
          $horoscopo = "sagitario";
        }
          break;
        case 12:
        if ($dia < 20) {
          $horoscopo = "sagitario";
        } else { 
          $horoscopo = "capricornio";
        }
          break;

        default:
      }    
        echo "Tu horóscopo es ", $horoscopo;
        ?>
    </body>
</html>
