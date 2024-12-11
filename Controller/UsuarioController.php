<?php
include_once $_SERVER["DOCUMENT_ROOT"] .'/webTransaccionalVeterinaria/Model/UsuarioModel.php';

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si el usuario está logueado
if(!isset($_SESSION["UsuarioID"])) {
    header('location: iniciarSesion.php');
    exit();
}

// Obtener la información del usuario
$UsuarioID = $_SESSION["UsuarioID"];
$resultado = ObtenerInformacionUsuarioModel($UsuarioID);

// Limpiar variables de sesión de usuario antes de asignar (opcional)
unset($_SESSION["Nombre"], $_SESSION["Apellido"], $_SESSION["CorreoElectronico"], $_SESSION["Telefono"], $_SESSION["Direccion"], $_SESSION["RolID"], $_SESSION["htmlMascotas"]);

// Verificar resultado
if($resultado != null && $resultado->num_rows > 0) {
    $datos = mysqli_fetch_array($resultado);
    $_SESSION["Nombre"] = $datos["Nombre"];
    $_SESSION["Apellido"] = $datos["Apellido"];
    $_SESSION["CorreoElectronico"] = $datos["CorreoElectronico"];
    $_SESSION["Telefono"] = $datos["Telefono"];
    $_SESSION["Direccion"] = $datos["Direccion"];
    $_SESSION["RolID"] = $datos["RolID"];
} else {
    $_SESSION["txtMensaje"] = "No se pudo obtener la información del usuario";
}

// Si el usuario es propietario generar un html
if(isset($_SESSION["RolID"]) && $_SESSION["RolID"] == 3) {
    $listaMascotas = ObtenerMascotasPropietario($UsuarioID);
    $htmlMascotas = "";

    if($listaMascotas != null && $listaMascotas->num_rows > 0) {
        $htmlMascotas .= '<h4 class="mt-4">Mis Mascotas</h4>';
        $htmlMascotas .= '<ul>';
        while($mascota = $listaMascotas->fetch_assoc()) {
            $htmlMascotas .= '<li><a href="misMascotas.php?MascotaID=' . $mascota["MascotaID"] . '">' . $mascota["Nombre"] . '</a></li>';
        }
        $htmlMascotas .= '</ul>';
    } else {
        $htmlMascotas .= '<p>No tienes mascotas registradas.</p>';
    }

    $_SESSION["htmlMascotas"] = $htmlMascotas;
} else {
    // Si el usuario no es propietario no se muestra nada
    $_SESSION["htmlMascotas"] = "";
}




