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
            $numeroIntroducido = $_GET["numeroIntroducido"];
            $numeroDeElementos = 0;
            $sumaImpares = 0;
            $numeroDeElementosImpares = 0;
            $maximoPar = 0;
        ?>
        <form action="index.php" method="get">
            Número <input type="number" name="numeroIntroducido" autofocus><br>
            <input type="hidden" name="numeroDeElementos" value="<?php $numeroDeElementos ?>">
            <input type="hidden" name="mediaImpares" value="<?php $sumaImpares/$numeroDeElementosImpares ?>">
            <input type="hidden" name="maximoPar" value="<?php $maximoPar ?>">
            <input type="submit" value="Aceptar">
        </form>
        
        <?php
            do {

              if ($numeroIntroducido >= 0) {
                $numeroDeElementos++;
                if (($numeroIntroducido % 2) == 1) { // número impar
                  $sumaImpares += $numeroIntroducido;
                  $numeroDeElementosImpares++;
                } else { // número par
                  if ($numeroIntroducido > $maximoPar){
                    $maximoPar = $numeroIntroducido;
                }
              }
              }
            } while ($numeroIntroducido >= 0);
            echo "Ha introducido " , $numeroDeElementos , "números";
            echo "La media de los impares es " ,$sumaImpares/$numeroDeElementosImpares;
            echo "El máximo de los pares es " ,$maximoPar;
        ?>
            
    </body>
</html>
