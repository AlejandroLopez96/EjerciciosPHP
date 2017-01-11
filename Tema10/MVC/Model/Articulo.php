<?php

require_once 'BlogDB.php';

class Articulo {
  private $id;
  private $titulo;
  private $fecha;
  private $contenido;
  private $autor;
          
  function __construct($id, $titulo, $fecha, $contenido,$autor) {
    $this->id = $id;
    $this->titulo = $titulo;
    $this->fecha = $fecha;
    $this->contenido = $contenido;
    $this->autor = $autor;
  }

  function getId() {
    return $this->id;
  }

  function getTitulo() {
    return $this->titulo;
  }

  function getFecha() {
    return $this->fecha;
  }

  function getContenido() {
    return $this->contenido;
  }
  
  function getAutor() {
    return $this->autor;
  }
  
  public static function getArticulos(){
    $conexion = BlogDB::connectDB();
    $seleccion = "SELECT id, titulo, fecha, contenido, autor FROM articulo order by fecha DESC";
    $consulta = $conexion->query($seleccion);
    
    $articulos = [];
    
    while ($registro = $consulta->fetchObject()) {
      $articulos[] = new Articulo($registro->id, $registro->titulo, $registro->fecha, $registro->contenido, $registro->autor);
    }
    
    return $articulos;
  }
  
  public static function getOfertaById($idArt) {
    $conexion = BlogDB::connectDB();
    $seleccion = "SELECT id, titulo, fecha, contenido, autor FROM articulo WHERE id=\"".$idArt."\"";
    $consulta = $conexion->query($seleccion);
    $registro = $consulta->fetchObject();
    $articuloId = new Articulo($registro->id, $registro->titulo, $registro->fecha, $registro->contenido, $registro->autor);
       
    return $articuloId;    
  }
  public function insert(){
    $conexion = BlogDB::connectDB();
    $insercion = "INSERT INTO articulo (titulo, fecha, contenido, autor) VALUES (\"".$this->titulo."\", \"".$this->fecha."\", \"".$this->contenido."\", \"".$this->autor."\")";
    $conexion->exec($insercion);
  }
  
  public function delete(){
    $conexion = BlogDB::connectDB();
    $borrado = "DELETE FROM articulo WHERE id=\"".$this->id."\"";
    $conexion->exec($borrado);
  }
  
  public function update(){
    $conexion = BlogDB::connectDB();
    $actualizacion = "UPDATE articulo SET titulo=\"".$this->titulo."\", contenido=\"".$this->contenido."\", autor=\"".$this->autor."\" WHERE id=\"".$this->id."\"";
    $conexion->exec($actualizacion);
  }
}
