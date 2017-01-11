<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>BLOG</title>
<link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link href='http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
 
</head>
<body>
 
 
 
<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-2195009-2', 'auto');
      ga('send', 'pageview');

      ga('create', 'UA-2195009-27', 'auto', {name: "foundation"});
      ga('foundation.send', 'pageview');

    </script>
 
<div class="callout large primary">
<div class="row column text-center">
<h1>NOTICIAS DE HOY</h1>
<h2 class="subheader">Nuestro blog</h2>
</div>
</div>
    <p style="text-align: center;"><a class="button primary" href="../Controller/nuevoArticulo.php">Añadir</a></p>
<div class="row medium-8 large-7 columns">
    <?php
          foreach($datosArticulos['articulos'] as $articulo)  {
?>
<div class="blog-post">
<h3><?=$articulo->getTitulo()?> <small><?php $fecha=$articulo->getFecha();
                echo date("d-m-Y H:i",strtotime($fecha));
              ?></small></h3>
<p><?=$articulo->getContenido()?></p>
<p style="text-align: center;"><a class="button alert" href="../Controller/borraArticulo.php?id=<?=$articulo->getId()?>">Borrar Articulo</a><a class="button warning " href="../Controller/modificacionArticulo.php?id=<?=$articulo->getId()?>">Modificar Articulo</a></p>
<div class="callout">
<ul class="menu simple">
<li><a href="#">Author: <?=$articulo->getAutor()?></a></li>
</ul>
</div>
</div>
<?php
          }
        ?>
</div>
    
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
<script type="text/javascript" src="https://intercom.zurb.com/scripts/zcom.js"></script>
</body>
</html>