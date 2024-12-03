<?php
include_once $_SERVER["DOCUMENT_ROOT"] .'/webTransaccionalVeterinaria/Model/MascotaModel.php';

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si el usuario ha iniciado sesión
if(!isset($_SESSION["UsuarioID"]))
{
    header('location: iniciarSesion.php');
    exit();
}

// Manejo del registro de mascotas
if(isset($_POST["btnRegistrarMascota"]))
{
    $nombre = $_POST["Nombre"];
    $especie = $_POST["Especie"];
    $raza = $_POST["Raza"];
    $sexo = $_POST["Sexo"];
    $fechaNacimiento = $_POST["FechaNacimiento"];
    $UsuarioID = $_SESSION["UsuarioID"];

    // Confirmación de registro (desde JavaScript)
    if(isset($_POST["Confirmado"]) && $_POST["Confirmado"] == "1")
    {
        // Llamar al modelo para registrar la mascota
        $resultado = RegistrarMascotaModel($nombre, $especie, $raza, $sexo, $fechaNacimiento, $UsuarioID);

        if($resultado['resultado'] == 1)
        {
            $_SESSION["txtMensaje"] = "Mascota registrada exitosamente.";
            $_SESSION["mensajeTipo"] = "success";
        }
        else
        {
            $_SESSION["txtMensaje"] = $resultado['mensaje'];
            $_SESSION["mensajeTipo"] = "danger";
        }
    }
    else
    {
        $_SESSION["txtMensaje"] = "Registro cancelado.";
        $_SESSION["mensajeTipo"] = "warning";
    }

    // Redirigir para evitar resubmisión del formulario
    header('location: misMascotas.php');
    exit();
}

// Obtener la lista de mascotas del propietario
$UsuarioID = $_SESSION["UsuarioID"];
$listaMascotas = ObtenerMascotasPropietarioModel($UsuarioID);
?>
