# LOGIN

## Descripción

Este proyecto es una aplicación de inicio de sesión de usuarios.

## Instalación

1. Clona este repositorio en tu máquina local.
2. Asegúrate de tener PHP y MySQL instalados en tu sistema.
3. Configura las credenciales de la base de datos en el archivo `config/config.php`.
4. Importa el archivo de la base de datos `database.sql` en tu servidor MySQL.

## Configuración

El archivo `config/config.php` contiene las variables necesarias para la conexión a la base de datos. Asegúrate de configurarlas correctamente con los valores correspondientes.

```php
<?php
$servidor = "localhost";
$db = "sistema_productos";
$username = "root";
$password = ""; 
?>

## Ejemplos de Uso

Para utilizar la funcionalidad principal de la aplicación, sigue estos pasos:

1. Abre el navegador web y navega a la página de inicio de sesión (`localhost/LOGIN/app/view/login.php`).
2. Ingresa tus credenciales de inicio de sesión (usuario y contraseña).
3. Haz clic en el botón "Iniciar Sesión".
4. Si las credenciales son válidas, serás redirigido a la página de bienvenida (`view/bienvenido.php`).
5. Desde la página de bienvenida, puedes explorar las funcionalidades adicionales de la aplicación o realizar las acciones correspondientes según el propósito de la misma.
