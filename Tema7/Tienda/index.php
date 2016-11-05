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
    <link rel="stylesheet" type="text/css" href="css.css"/>
  </head>
  <body>    
      <div id="contenedor">
          <div id="compraProducto">
              <div id="productos">
      <h1>Tienda SPORT</h1>
    <?php
    
        foreach ($_SESSION['catalogo'] as $codigo => $producto) {
          ?>
          <div class="productoIndividual">        
          <a id="<?= $codigo?>">
            <img src="<?= $producto['imagen']?>"/><br>
            <?= $producto['nombre']?><br>
            Precio: <?= $producto['precio']?>€<br>
            <form action="index.php#<?= $codigo?>" method="post"> <!--Formulario de compra-->
              <input type="number" min="1" name="cantidad" value="1" required="true"/>
              <br><br>
              <input type="hidden" name="codigo" value="<?= $codigo?>"/>
              <input type="hidden" name="accion" value="comprar"/>
              <input type="submit"  value="Comprar"/>
            </form>
            <form action="detalle.php" method="post">  <!--Formulario de detalles-->
              <input type="hidden" name="codigo" value="<?= $codigo?>"/>
              <input type="submit"  value="Detalle"/>
            </form>
          </div>
          <?php
        }
        ?>
        </div>
        <div id="carrito">
          
        <?php
      //recuperamos valores del formulario
      $codigo = $_POST["codigo"];
      $accion = $_POST["accion"];
      $cantidad = $_POST["cantidad"];
      
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
      
      if($accion == "finCompra"){
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
            
            <form action="index.php#<?=compra.$codigo?>" method="post">  
              Cantidad: <input type="number" min="0" name="cantidad" value="<?= $cantidad?>" required="true"/> <br>
              <input type="hidden" name="codigo" value="<?= $codigo?>"/>
              <input type="hidden" name="accion" value="actualizar"/>
              <input type="submit" value="Actualizar"/>
            </form>
            <form action="index.php" method="post">  
              <input type="hidden" name="codigo" value="<?= $codigo?>"/>
              <input type="hidden" name="accion" value="eliminar"/>
              <input type="submit" value="Eliminar"/>
            </form>

          <?php
        }   
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
            
            <form action="index.php#<?=compra.$codigo?>" method="post">  
              Cantidad: <input type="number" min="0" name="cantidad" value="<?= $cantidad?>" required="true"/> <br>
              <input type="hidden" name="codigo" value="<?= $codigo?>"/>
              <input type="hidden" name="accion" value="actualizar"/>
              <input type="submit" value="Actualizar"/>
            </form>
            <form action="confirmacion.php" method="post">  
              <input type="hidden" name="codigo" value="<?= $codigo?>"/>     
              <input type="submit" value="Eliminar"/>
            </form>

          <?php
        }   
      }
     
      if($vacio){
          echo " <h3> El carrito está vacio </h3>";
      }else{
        
        ?>
            <br><br>
            <form action="confirmacionVaciarCarrito.php" method="post">  
            
          <input type="submit" id="vaciarCarrito" value="Vaciar carrito"/>
          </form>
          <form action="finalizarCompra.php" method="post">  
            <input type="hidden" name="accion" value="finCompra"/>
          <input type="submit" id="finCompra" value="Finalizar Compra"/>
          </form>
       <?php
     }
    ?>
            </div>
          </div>
      </div>
  </body>
</html>