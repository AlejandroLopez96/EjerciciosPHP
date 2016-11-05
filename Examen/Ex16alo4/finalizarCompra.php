<?php
session_start();
if(!isset($_SESSION['catalogo'])){  $_SESSION['catalogo'] = array (
        "cod1" => array( "nombre" => "Camiseta Selección Española", "precio" => 40, "imagen" => "imagenes/espania.jpg", "detalle" => "Año: 2016-2017", "stock" => 5),
        "cod2" => array( "nombre" => "Camiseta Selección Rusa", "precio" => 40, "imagen" => "imagenes/rusia.jpg", "detalle" => "Año: 2016-2017", "stock" => 5),
        "cod3" => array( "nombre" => "Camiseta Real Madrid C.F.", "precio" => 50, "imagen" => "imagenes/madrid.jpg", "detalle" => "Año: 2016-2017", "stock" => 5),
        "cod4" => array( "nombre" => "Camiseta Bayern Munich", "precio" => 50, "imagen" => "imagenes/bayern.jpg" , "detalle" => "Año: 2016-2017",  "stock" => 0)
        );
}
?>
<!DOCTYPE html>
 
<html>
  <head>
    <title>Tienda de Móviles</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="cssFin.css"/>
  </head>
  <body>    
      <div id="contenedor">
          <div id="compraProducto">
        <div id="carrito">
          
        <?php
      //recuperamos valores del formulario
      $codigo = $_POST["codigo"];
      $accion = $_POST["accion"];
      $cantidad = $_POST["cantidad"];
      $zona = $_POST["zona"];
      
      if (!isset($_SESSION["carrito"])){
        //Primera visita
        $_SESSION["carrito"] = array(
            "cod1" => 0, //Código => Cantidad
            "cod2" => 0,
            "cod3" => 0,
            "cod4" => 0
        );
      }
      //Si mando por formulario acción comprar, 
      if($accion == "comprar" && isset($cantidad) && is_numeric($cantidad) && $cantidad > 0){
        $_SESSION["carrito"][$codigo]+=$cantidad;
      }else if($accion == "actualizar"){
        $_SESSION["carrito"][$codigo]=$cantidad;
      }

      if($accion == "eliminar"){
        $_SESSION["carrito"][$codigo] = 0;
      }
      
      if($accion == "eliminarTodo"){
        foreach ($_SESSION["carrito"] as $codigo => $cantidad) {
          $_SESSION["carrito"][$codigo] = 0;
        }
      }
     
      // Mostrar carrito
      $vacio = true;
      $total = 0;
      echo "<h1> CARRITO DE LA COMPRA</h1>";
      ?>
      <div class="divIcon">
            <img class="icon" src="imagenes/carrito.png">
      </div>
      <?php
      foreach ($_SESSION["carrito"] as $codigo => $cantidad) {
        if($cantidad > 0){
          $vacio = false;
          $producto = $_SESSION['catalogo'][$codigo];
          $total += $producto['precio']*$cantidad;
          ?>

            <a id="<?=compra.$codigo?>">
            <img src="<?= $producto['imagen']?>"/><br>
            <?= $producto['nombre']?><br>
            Precio: <?= $producto['precio']?>€<br>
            
            <form action="finalizarCompra.php#<?=compra.$codigo?>" method="post">  
              Cantidad: <input type="number" min="0" name="cantidad" value="<?= $cantidad?>" required="true"/> <br>
              <input type="hidden" name="codigo" value="<?= $codigo?>"/>
              <input type="hidden" name="accion" value="actualizar"/>
              <input type="submit" value="Actualizar"/>
            </form>
            <form action="finalizarCompra.php" method="post">  
              <input type="hidden" name="codigo" value="<?= $codigo?>"/>
              <input type="hidden" name="accion" value="eliminar"/>
              <input type="submit" value="Eliminar"/>
            </form>

          <?php
        }   
      }
     
      if($vacio){
          echo " <h3> El carrito está vacio </h3>";
      }else{
        echo "<br><br>total: ", $total, "€";
        ?>
          <form action="index.php" method="post">  
            <input type="hidden" name="accion" value="eliminarTodo"/>
          <input type="submit" id="vaciarCarrito" value="Vaciar carrito"/>
          </form>
          <form action="finalizarCompra.php" method="post">  
              <select name="zona">
                <option value="espania">España</option>
                <option value="paisesEuropa">Otros países de Europa</option>
                <option value="resto">Resto del mundo</option>
              </select>
            <input type="hidden" name="accion" value="finCompra"/>
          <input type="submit" id="finCompra" value="Seleccionar Zona Envío"/>
          </form>
      <?php
            if($zona == "espania"){
                echo "<br><br>Total + gastos de envío: ", $total+9, "€ ";
            } else if ($zona == "paisesEuropa"){
                echo "<br><br>Total + gastos de envío: ", $total+14, "€";
            } else if ($zona == "resto"){
                echo "<br><br>Total + gastos de envío: ", $total+21, "€";
            } else if ($total >= 60 && $total < 200) {
                echo "<br>No se incluyen gastos de envío, gracias por confiar en nosotros";
                echo "<script>document.getElementById(\"finCompra\").disabled = true;</script>";
            } else if ($total >= 200) {
                echo "<br>No se incluyen gastos de envío, gracias por confiar en nosotros. ";
                echo "Le aplicaremos también un 5% de descuento del total";
                echo "<script>document.getElementById(\"finCompra\").disabled = true;</script>";
                echo "<br>Total con descuento: ", $total*0.95, "€";
            }
        ?>
       <?php
     }
    ?>
            </div>
          </div>
      </div>
  </body>
</html>