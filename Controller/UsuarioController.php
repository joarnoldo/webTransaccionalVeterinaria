<?php

include_once $_SERVER["DOCUMENT_ROOT"] .'/webTransaccionalVeterinaria/Model/UsuarioModel.php';

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Manejo del registro de propietarios
if(isset($_POST["btnRegistrarUsuario"]))
{
    $nombre = $_POST["Name"];
    $apellido = $_POST["LastName"];
    $nombreUsuario = $_POST["Username"];
    $correoElectronico = $_POST["Email"];
    $contrasenna = $_POST["Password"];
    $confirmarContrasenna = $_POST["ConfirmPassword"];
    $telefono = $_POST["Phone"];
    $direccion = $_POST["Address"];

    // Validar que las contraseñas coincidan
    if($contrasenna != $confirmarContrasenna)
    {
        $_SESSION["txtMensaje"] = "Las contraseñas no coinciden.";
    }
    else
    {
        // Encriptar la contraseña
        $contrasennaHash = password_hash($contrasenna, PASSWORD_DEFAULT);

        // Llamar al modelo para registrar el propietario
        $resultado = RegistrarPropietarioModel($nombre, $apellido, $nombreUsuario, $correoElectronico, $contrasennaHash, $telefono, $direccion);

        if($resultado['resultado'] == 1)
        {
            // Registro exitoso
            $_SESSION["txtMensaje"] = "Registro exitoso.";
            $_SESSION["registroExitoso"] = true;
            // No redirigimos inmediatamente, permitimos que la vista muestre el mensaje y se encargue de la redirección
        }
        else
        {
            // Mostrar mensaje de error
            $_SESSION["txtMensaje"] = $resultado['mensaje'];
        }
    }
}
?>

