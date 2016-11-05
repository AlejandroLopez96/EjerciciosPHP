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
        <style>
          td,tr, table{
              border-bottom: 1px solid black;
              border-collapse: collapse;
              padding-left: 50px;
              text-align: center;
          }
          
          #inicial{
              text-align: center;
          }
        </style>
    </head>
    <body>
        <?php
      $n =  $_GET['n'];
      $cuentaNumeros = $_GET['cuentaNumeros'];
      $numeros = $_GET['numeros'];
      $esPrimo = true; 
      
      if (!isset($n)){
        //Primera visita
        $cuentaNumeros = 0;
        $numeros = "";
      }
      
      if(isset($n)&& $n >= 0){
        //Segunda y posteriores visitas
        $cuentaNumeros++;
        $numeros .= " " . $n;
      }
      
      if ($n < 0){
        //última visita
        $numeros = substr($numeros, 1);
        $arrayNumeros = explode(" ", $numeros);
        
       
        echo "<table>";
        echo "<th id=\"inicial\">ARRAY INCIAL</th>";
        echo "<tr>";
        echo "<td>Indice: </td>";
        foreach ($arrayNumeros as $key => $value) {   
          echo "<td>", $key , "</td>";
        }
        echo "</tr>";
        echo "<tr>";
        echo "<td>Valores: </td>";
        foreach ($arrayNumeros as $key => $value) {   
          echo "<td>", $value , "</td>";
        }
        echo "</tr>";
        echo "</table>";
        
      $cuentaPrimos = 0;
      $cuentaNoPrimos = 0;
    
        
      for ($i = 0; $i < $cuentaNumeros; $i++) {
       $esPrimo = true;
      for ($j = 2; $j < $arrayNumeros[$i] && $esPrimo; $j++) {
        if (($arrayNumeros[$i] % $j) == 0) {
            $esPrimo = false;
        }
      }
      if ($esPrimo) {
        
        $primos[$cuentaPrimos] = $arrayNumeros[$i];
        $cuentaPrimos++;
      
      } else {
        $noPrimos[$cuentaNoPrimos] = $arrayNumeros[$i];
        $cuentaNoPrimos++;
      }
    }
    
    
    for ($i = 0; $i < count($noPrimos); $i++){
      $arrayNumeros[$i] = $noPrimos[$i];
    }
    
    $indicePrimo = count($noPrimos);
    for ($i = $indicePrimo; $i < $cuentaNoPrimos + $cuentaPrimos; $i++){
      $arrayNumeros[$i] = $primos[$i - $cuentaNoPrimos];
    }
     
    
        
        
        echo "<table>";
        echo "<th id=\"inicial\">ARRAY MODIFICADO</th>";
        echo "<tr>";
        echo "<td>Indice: </td>";
        foreach ($arrayNumeros as $key => $value) {   
          echo "<td>", $key , "</td>";
        }
        echo "</tr>";
        echo "<tr>";
        echo "<td>Valores: </td>";
        foreach ($arrayNumeros as $key => $value) {   
          echo "<td>", $value , "</td>";
        }
        echo "</tr>";
        echo "</table>";
        
      }else if ($n >=0 || !isset($n)) {
        ?>  
        <form action="Ex16alo1.php" method="get">
        Número <input type="number" autofocus name="n"><br>
        <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
         <input type="hidden" name="numeros" value="<?php echo $numeros; ?>">
         <input type="submit" value="Aceptar">
        </form>
      <?php  
      }
    ?>
    </body>
</html>
