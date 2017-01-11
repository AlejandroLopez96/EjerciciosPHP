<?php
require_once '../Model/Articulo.php';
  $articuloAux = new Articulo("", $_POST['titulo'], date("Y-m-d H:i:s") , $_POST['contenido'], $_POST['autor'] );
  $articuloAux->insert();
  header("Location: index.php");
