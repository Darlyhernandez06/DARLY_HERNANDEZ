<?php

// Clase base llamada `Modelo` que se usa para interactuar con una tabla de la base de datos.
// Esta clase está pensada para ser extendida por otras clases que representen modelos específicos.

class Modelo {
  
  // Propiedades protegidas que almacenan el ID del registro, el nombre de la tabla, y la conexión a la base de datos.
  protected $id;
  protected $table;
  protected $db;
  
  // Constructor de la clase. Se ejecuta automáticamente al crear una instancia de la clase.
  // Recibe un ID, el nombre de la tabla y la conexión a la base de datos como parámetros.
  public function __construct($id, $table, PDO $connection)
  {
    // Asigna los valores de los parámetros a las propiedades de la clase.
    $this->id = $id;
    $this->table = $table;
    $this->db = $connection;
  }

  // Método para obtener todos los registros de la tabla asociada.
  // Prepara y ejecuta una consulta SQL para seleccionar todos los registros de la tabla.
  // Retorna el resultado como un array de todos los registros.
  public function getAll(){
    $stm = $this->db->prepare("SELECT * FROM {$this->table}");
    $stm->execute();
    return $stm->fetchAll();
  }

  // Método para obtener un registro específico de la tabla por su ID.
  // Prepara una consulta SQL para seleccionar un registro donde el campo `id` coincida con el valor dado.
  // Asigna el valor del ID al parámetro `:id` en la consulta y la ejecuta.
  // Retorna el registro encontrado como un array asociativo.
  public function getById($id){
    $stm = $this->db->prepare("SELECT * FROM {$this->table} WHERE id = :id");
    $stm->bindValue(":id", $id);
    $stm->execute();
    return $stm->fetch();
  }

  // Método incompleto para actualizar un registro en la tabla `users`.
  // Intenta preparar una consulta SQL para actualizar el campo `nombre` donde el `id` coincida.
  public function getUpdate($id){
    $stm = $this->db->prepare("UPDATE users SET nombre = :nombre WHERE id = :id");
    $stm->bindValue();
  }
}
