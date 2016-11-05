<?php
session_start(); // Inicio de sesión
if(!isset($_SESSION['cuentaNumeros'])) {
$_SESSION['cuentaNumeros'] = 0;
$_SESSION['sumaImpares'] = 0;
$_SESSION['cuentaImpares'] = 0;
$_SESSION['mayorPar'] = PHP_INT_MIN;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
        <title>Media impares y mayor de los pares</title>

  </head>
  <body>
   
    <?php
        $numeroIntroducido = $_GET['numero'];  
        
        if ($numeroIntroducido < 0) {
          // Numero negativo
          if($_SESSION['cuentaNumeros'] == 0){
            echo "No se han introducido números";
          }else{
            echo "Se han introducido: ", $_SESSION['cuentaNumeros'], " números <br>";
            echo "La media de los números impares es: ", ($_SESSION['sumaImpares']/$_SESSION['cuentaImpares']) , "<br>";
            echo "El mayor de los pares es: ", $_SESSION['mayorPar'], "<br>";
            echo $numeroIntroducido;
          }
          
          
        } else if (isset($numeroIntroducido) && $numeroIntroducido >= 0) {
          $_SESSION['cuentaNumeros']++; 
          if ($numeroIntroducido %2!=0){
            // Impar
            $_SESSION['sumaImpares'] += $numeroIntroducido;
            $_SESSION['cuentaImpares']++;
          //Se suman en "sumaImpares" los numeros introducidos impares
          //Se cuentan los números impares para desues hacer la media
          } else {
            // Par
            if ($numeroIntroducido > $_SESSION['mayorPar']) {
               $_SESSION['mayorPar'] = $numeroIntroducido;
            }
          }
        }
        
        if ($numeroIntroducido >=0 || !isset($numeroIntroducido)) {
          ?>
            <form action="index.php" method="get">
              Número <input type="number" name="numero" autofocus><br>
              <input type="submit" value="Aceptar">
            </form>
            <?php
        }
       
    ?>
  </body>
</html>