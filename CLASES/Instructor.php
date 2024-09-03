<?php

// Incluye el archivo "Persona.php", contiene la definición de la clase `Persona`,
// de la cual `Instructor` heredará propiedades y métodos.
include_once("Persona.php");

// Define la clase `Instructor`, que extiende (hereda de) la clase `Persona`.
class Instructor extends Persona {

  // Propiedades protegidas que almacenarán el sueldo y el horario del instructor.
  protected $sueldo;
  protected $horario;

  // Método para obtener el valor de la propiedad `sueldo`.
  public function getSueldo(){
    return $this->sueldo;
  }

  // Método para obtener el valor de la propiedad `horario`.
  public function getHorario(){
    return $this->horario;
  }

  // Método para establecer el valor de la propiedad `sueldo`.
  public function setSueldo($sueldo){
    $this->sueldo = $sueldo;
  }

  // Método para establecer el valor de la propiedad `horario`.
  public function setHorario($horario){
    $this->horario = $horario;
  }

}
