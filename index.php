<?php // El código PHP comienza con <?php para indicar el inicio de un bloque de código PHP

// Muestra en pantalla la ruta completa del directorio donde se encuentra este archivo PHP.
echo __DIR__;

// Este archivo contiene la clase `Database` que maneja la conexión a la base de datos.
require_once(__DIR__."/LIBS/Database.php");

// Este archivo contiene la clase `Modelo` que define la estructura base para los modelos de datos.
require_once(__DIR__."/LIBS/Modelo.php");

// Este archivo contiene la clase `Aprendiz`, que es un modelo específico para manejar datos relacionados con aprendices.
include_once("CLASES/Aprendiz.php");

// Crea una nueva instancia de la clase `Database`.
// inicializa una nueva conexión con la base de datos.
$database = new Database();

// Llama al método `getConnection` de la instancia `$database` para obtener una conexión activa a la base de datos.
// Este método devuelve un objeto de conexión que se guarda en la variable `$connection`.
$connection = $database->getConnection($database);

// Crea una nueva instancia de la clase `Aprendiz` y le pasa la conexión de la base de datos.
// Esto asocia la conexión con la instancia del modelo `Aprendiz`, permitiéndole interactuar con la base de datos.
$aprendiz = new Aprendiz($connection);

// Llama al método `getAll` de la instancia `$aprendiz` para obtener todos los registros de aprendices de la base de datos.
// El resultado es un array o colección de registros que se guarda en la variable `$results`.
$results = $aprendiz->getAll();

// Llama al método `getById` de la instancia `$aprendiz` para obtener un registro específico de aprendiz por su ID.
// En este caso, se busca el aprendiz con ID 1. El resultado se guarda en la variable `$resultsId`.
$resultsId = $aprendiz->getById(1);

// var_dump($results);

// Muestra en pantalla el contenido de la variable `$resultsId`.
// `var_dump` es útil para ver la estructura y el contenido detallado de una variable.
var_dump($resultsId);
