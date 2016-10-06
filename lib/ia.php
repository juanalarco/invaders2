<?php
class ia
{
//Declaracion de una propiedad
public $columna = '1';
public $fila = '3';

// Declaracion de un metodo
public function getFila() {
  return $this->fila;
}
public function getColumna() {
  return $this->columna;
}

//Setters
public function setFila($fil) {
  $this->fila = $fil;
}
public function setColumna($col) {
  $this->columna = $col;
}

// Random
public function RandomPos() {

}
}
?>
