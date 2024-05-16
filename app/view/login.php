<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../../public/css/login.css">
</head>
<body>
    <!-- Contenedor principal del formulario de inicio de sesión -->
    <div class="login-wrap">
        <!-- Contenedor del formulario de inicio de sesión -->
        <div class="login-html">
            <!-- Información de usuario y contraseña para referencia -->
            <p>Usuario: santy Contraseña: 9265</p>
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <!-- Formulario de inicio de sesión -->
            <div class="login-form">
                <form class="sign-in-htm" action="../controller/UsuarioController.php" method="POST">
                    <!-- Campo oculto para enviar la acción de inicio de sesión -->
                    <input type="hidden" name="action" value="login">
                    <!-- Campo de entrada para el nombre de usuario -->
                    <div class="group">
                        <label for="usuario" class="label">Usuario</label>
                        <input id="usuario" type="text" class="input" name="usuario" placeholder="Usuario" required>
                    </div>
                    <!-- Campo de entrada para la contraseña -->
                    <div class="group">
                        <label for="contraseña" class="label">Contraseña</label>
                        <input id="contraseña" type="password" class="input" name="contraseña" placeholder="Contraseña" required>
                    </div>
                    <!-- Botón para enviar el formulario de inicio de sesión -->
                    <div class="group">
                        <button type="submit" class="button">Iniciar Sesión</button>   
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
