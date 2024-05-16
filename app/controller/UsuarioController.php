<?php
// Importar la clase UsuarioModel para interactuar con la base de datos
require_once('../model/UsuarioModel.php');

class UsuarioController {
    // Método para manejar el inicio de sesión de un usuario
    public function login($usuario, $contraseña) {
        // Instanciar un objeto de UsuarioModel para acceder a los métodos de la base de datos
        $model = new UsuarioModel();
        // Obtener los datos del usuario de la base de datos
        $usuarioData = $model->login($usuario, $contraseña);
        // Si se encontraron datos de usuario válidos
        if ($usuarioData) {
            // Iniciar una sesión para el usuario
            session_start();
            // Almacenar los datos del usuario en la sesión
            $_SESSION['usuario'] = $usuarioData;
            // Redireccionar al usuario a la página de bienvenida
            header("Location: ../view/bienvenido.php");
            // Finalizar la ejecución del script
            exit();
        } else {
            // Si no se encontraron datos de usuario válidos, mostrar un mensaje de error
            echo "Usuario no registrado o contraseña incorrecta";
            // Actualizar la página de inicio de sesión después de 1 segundo
            header("refresh:1;url=../view/login.php");
            // Finalizar la ejecución del script
            exit();
        }
    }    
}

// Iniciar una sesión para permitir el uso de variables de sesión
session_start();

// Verificar si se envió algún formulario con una acción especificada
if (isset($_POST['action'])) {
    // Importar la clase UsuarioController para manejar las acciones del usuario
    require_once('UsuarioController.php');
    // Crear una instancia de UsuarioController
    $controller = new UsuarioController();
    // Verificar la acción enviada desde el formulario
    if ($_POST['action'] === 'login') {
        // Si la acción es iniciar sesión, llamar al método login del controlador de usuario
        $controller->login($_POST['usuario'], $_POST['contraseña']);
    } 
}
?>
