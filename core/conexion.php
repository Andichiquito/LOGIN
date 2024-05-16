<?php
// Incluir el archivo de configuración que contiene las credenciales de la base de datos
require_once('../../config/config.php');

try {
    // Intentar establecer una conexión PDO con la base de datos utilizando las credenciales proporcionadas
    $conexion = new PDO("mysql:host=$servidor;dbname=$db", $username, $password);
} catch (PDOException $e) {
    // Capturar cualquier excepción que pueda ocurrir durante la conexión y mostrar un mensaje de error
    echo "Error en la conexión: " . $e->getMessage();
}
?>
