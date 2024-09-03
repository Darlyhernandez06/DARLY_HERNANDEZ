<?php

// Incluye el archivo "Persona.php", contiene la definición de la clase `Persona`,
// de la cual `Aprendiz` heredará propiedades y métodos.
include_once("Persona.php");

// Define la clase `Aprendiz`, que extiende (hereda de) la clase `Persona`.
class Aprendiz extends Persona {

  // Propiedades protegidas que almacenarán la cuenta y el promedio del aprendiz.
  protected $cuenta;
  protected $promedio;

  // Constructor de la clase `Aprendiz`. 
  // Se ejecuta automáticamente cuando se crea una nueva instancia de `Aprendiz`.
  public function __construct(PDO $connection)
  {
    // Muestra un mensaje para indicar que se ha llamado al constructor de `Aprendiz`.
    echo("constructor de aprendiz <br>" );

    // Llama al constructor de la clase padre (`Persona`), 
    // pasando los valores "id", "users" y la conexión a la base de datos como parámetros.
    // Esto inicializa las propiedades heredadas de la clase `Persona`.
    parent::__construct("id", "users", $connection);
  }

  // Método para obtener el valor de la propiedad `cuenta`.
  public function getCuenta(){
    return $this->cuenta;
  }

  // Método para obtener el valor de la propiedad `promedio`.
  public function getPromedio(){
    return $this->promedio;
  }

  // Método para establecer el valor de la propiedad `cuenta`.
  public function setCuenta($cuenta){
    $this->cuenta = $cuenta;
  }

  // Método para establecer el valor de la propiedad `promedio`.
  public function setPromedio($promedio){
    $this->promedio = $promedio;
  }
}