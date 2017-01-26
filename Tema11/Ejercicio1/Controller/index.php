<?php
  require_once '../Model/Articulo.php';
  
  $datosArticulos['articulos'] = Articulo::getArticulos();
  
  require_once 'twig/lib/Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
  $twig = new Twig_Environment($loader);
  echo $twig->render('listadoArticulos.html.twig', $datosArticulos);
