<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
        <title>Diccionario Español-Ingles</title>
        <style>
        </style>
        
  </head>
  <body>
    <?php
      $palabras= array (
        'puerta' => 'door', 'zapatos' => 'shoes', 'lápiz' =>'pencil', 'cuaderno' => 'notebook', 'ventana' => 'window',
        'oso' => 'bear', 'agua' => 'water', 'oreja' => 'ear', 'mano' => 'hand', 'teclado' => 'keyboard',
        'perro' => 'dog', 'gato' => 'cat', 'serpiente' => 'snake', 'hielo' => 'ice', 'libro' => 'book',
        'ojo' => 'aye', 'árbol' => 'tree', 'bosque' => 'forest', 'fuego' => 'fire', 'cara' => 'face');
      $palabraEspañol =  $_GET['palabraEspañol'];
      
      if(isset($palabraEspañol)){ //Si se ha enviado una palabra
        $palabraIngles = $palabras[$palabraEspañol]; //Guarda la palabra en ingles
        if(isset($palabraIngles)){ //Si hay palabra en ingles
          echo "$palabraEspañol en Inglés es: $palabraIngles";
        }else{
          echo "$palabraEspañol no se encuentra en el diccionario.";
        }
          
        
      }else{ 
        ?>
        <form action="index.php" method="get" id="ingles">
          Introduce una palabra en español.
          <select name="palabraEspañol" form="ingles">
              <?php
                foreach ($palabras as $key => $value) {
              ?>
              <option value="<?php echo $key ?>"><?php echo $key ?></option>
              <?php
                }
              ?>
          </select>
          <input type="submit" value="Aceptar">
          
        </form>
        <?php
      }
      ?>
    
  </body>

</html>