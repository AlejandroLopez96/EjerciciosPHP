<!DOCTYPE html>
<html>
    <head>
        <title>PROGRAMACIÓN PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../View/css/estilos.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <h1>NOTICIAS DE HOY</h1>
        </header>
        <p class="botonAñadir"><a href="../Controller/nuevoArticulo.php">Nuevo Artículo</a></p>
        <?php
          foreach($datosArticulos['articulos'] as $articulo)  {
        ?>
        <article> 
            <h2><?=$articulo->getTitulo()?></h2>
            <p><?=$articulo->getContenido()?></p>
            <p><?php
                $fecha=$articulo->getFecha();
                echo date("d-m-Y H:i",strtotime($fecha));
              ?></p>
            <p class="boton"><a href="../Controller/borraArticulo.php?id=<?=$articulo->getId()?>">Borrar Artículo</a></p>
            <p class="botonMod"><a href="../Controller/modificacionArticulo.php?id=<?=$articulo->getId()?>">Modificar Artículo</a></p>
        </article>
        <?php
          }
        ?>
    </body>
</html>