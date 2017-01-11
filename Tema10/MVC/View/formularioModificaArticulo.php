<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link href='http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
        <title>Formulario modificar artículo</title>
    </head>
    <body>
        <div style="width: 50%; margin:0 auto;">
        <form action="../Controller/modificaArticulo.php" method="POST">
      <h3>Título</h3>
      <input type="text" size="40" name="titulo" value="<?=$datosArticulo->getTitulo()?>">
      
      <br><h3>Contenido</h3>
      <textarea name="contenido" cols="60" rows="6"><?=$datosArticulo->getContenido()?></textarea>
      <input type="hidden" name="id" value="<?=$datosArticulo->getId()?>">
      <button type="submit" class="success button">Enviar</button>
    </form>
        </div>
  </body>
</html>
