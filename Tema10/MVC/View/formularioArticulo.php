<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link href='http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
        <title>Formulario nuevo artículo</title>
    </head>
    <body>
        <div style="width: 50%; margin:0 auto;">
    <form action="../Controller/grabaArticulo.php" method="POST">
      <h3>Título</h3>
      <input type="text" size="40" name="titulo">
      
      <br><h3>Contenido</h3>
      <textarea name="contenido" cols="60" rows="6"></textarea>
      
      <br><h3>Autor</h3>
      <input type="text" size="40" name="autor">
      <!--<input type="submit" value="Enviar">-->
      <button type="submit" class="success button">Enviar</button>
    </form>
        </div>
  </body>
</html>
