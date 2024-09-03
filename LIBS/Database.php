<?php 

// Clase para manejar la conexión a la base de datos utilizando PDO (PHP Data Objects).
// PDO permite conectarse a diferentes tipos de bases de datos de manera segura y flexible.

class Database {

  // Propiedad privada que almacenará la conexión a la base de datos.
  private $connection;

  // Constructor de la clase, se ejecuta automáticamente al crear una instancia de la clase.
  public function __construct()
  {
    // Array de opciones para configurar el comportamiento de PDO.
    // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION: Configura PDO para lanzar excepciones en caso de error.
    // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC: Establece el modo de obtención de datos por defecto en asociativo.
    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    // Crea una nueva conexión PDO a la base de datos MySQL.
    // "mysql:host=127.0.0.1;dbname=adso_2696521" define el tipo de base de datos (MySQL), el host (127.0.0.1, es decir, localhost) y el nombre de la base de datos (adso_2696521).
    // "root" es el nombre de usuario de la base de datos.
    // "" es la contraseña del usuario (en este caso está vacía).
    // $options son las opciones de configuración definidas anteriormente.
    $this->connection = new PDO("mysql:host=127.0.0.1;dbname=adso_2696521", "root", "", $options);

    // Configura la conexión para que utilice el juego de caracteres UTF-8, asegurando que los datos se manejen correctamente en ese formato.
    $this->connection->exec("SET CHARACTER SET UTF8");
  }

  // Método para obtener la conexión actual a la base de datos.
  // Retorna el objeto PDO almacenado en $this->connection.
  public function getConnection(){
    return $this->connection;
  }

  // Método para cerrar la conexión a la base de datos.
  // Al asignar null a $this->connection, se cierra la conexión actual.
  public function closeConnection(){
    $this->connection = null;
  }
}