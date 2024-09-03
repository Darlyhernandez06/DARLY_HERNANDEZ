<?php

// La clase `Persona` extiende (hereda de) la clase `Modelo`.
// Esto significa que `Persona` hereda las propiedades y métodos de `Modelo`.
class Persona extends Modelo
{
  // Definición de las propiedades protegidas de la clase `Persona`.
  // Estas propiedades almacenan la información personal básica.
  protected $nombre;
  protected $apellido;
  protected $edad;
  protected $telefono;
  protected $correo;
  protected $documento;
  protected $direccion;

  // Constructor de la clase `Persona`. 
  // Este se ejecuta cuando se crea una nueva instancia de `Persona`.
  // Recibe como parámetros un `id`, el nombre de una tabla y una conexión a la base de datos.
  public function __construct($id, $table, $connection)
  {
    // Llama al constructor de la clase padre (`Modelo`) para inicializar las propiedades
    // heredadas (como `$id`, `$table`, y `$db`) con los valores proporcionados.
    parent::__construct($id, $table, $connection);
  }

  // Métodos `get` para acceder a las propiedades protegidas de la clase.
  // Cada método devuelve el valor de la propiedad correspondiente.
  public function getNombre(){
    return $this->nombre;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function getEdad(){
    return $this->edad;
  }
  public function getTelefono(){
    return $this->telefono;
  }
  public function getCorreo(){
    return $this->correo;
  }
  public function getDocumento(){
    return $this->documento;
  }
  public function getDireccion(){
    return $this->direccion;
  }

  // Métodos `set` para establecer valores en las propiedades protegidas.
  // Cada método asigna el valor proporcionado a la propiedad correspondiente.
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

  public function setApellido($apellido){
    $this->apellido = $apellido;
  }

  public function setEdad($edad){
    $this->edad = $edad;
  }
  public function setTelefono($telefono){
    $this->telefono = $telefono;
  }
  public function setCorreo($correo){
    $this->correo = $correo;
  }
  public function setDocumento($documento){
    $this->documento = $documento;
  }
  public function setDireccion($direccion){
    $this->direccion = $direccion;
  }

  // Método `getFullName` para obtener una cadena que describe el nombre completo y la edad de la persona.
  // Devuelve una cadena con el nombre completo y la edad.
  public function getFullName()
  {
    return "El nombre completo es: " . $this->nombre . " " . $this->apellido . " y su edad es " . $this->edad;
  }
}