<?php
// Importar el archivo de conexión para acceder a la base de datos
require_once('../../core/conexion.php');

class UsuarioModel {
    // Método para verificar las credenciales de inicio de sesión del usuario
    public function login($usuario, $password) {
        // Acceder a la variable de conexión global
        global $conexion;
        // Consulta SQL para seleccionar un usuario por su nombre de usuario
        $sql = "SELECT * FROM usuarios WHERE usuario=:usuario";
        // Preparar la consulta SQL
        $stmt = $conexion->prepare($sql);
        // Asociar el parámetro :usuario con el valor del nombre de usuario proporcionado
        $stmt->bindParam(':usuario', $usuario);
        // Ejecutar la consulta
        $stmt->execute();
        // Obtener los datos del usuario como un array asociativo
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Verificar si se encontró un usuario y si la contraseña coincide usando password_verify
        if ($usuario && password_verify($password, $usuario['contrasena'])) {
            // Si las credenciales son válidas, devolver los datos del usuario
            return $usuario;
        } else {
            // Si las credenciales no son válidas, devolver false
            return false;
        }
    }
}
?>
