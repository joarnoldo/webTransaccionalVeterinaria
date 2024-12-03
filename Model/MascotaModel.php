<?php
include_once $_SERVER["DOCUMENT_ROOT"] .'/webTransaccionalVeterinaria/Model/BaseDatos.php';

function ObtenerMascotasPropietarioModel($UsuarioID)
{
    try {
        $enlace = AbrirBD();

        $sentencia = $enlace->prepare("CALL ObtenerMascotasPropietario(?)");
        $sentencia->bind_param("i", $UsuarioID);
        $sentencia->execute();

        $resultado = $sentencia->get_result();

        CerrarBD($enlace);
        return $resultado;
    } catch(Exception $ex) {
        return null;
    }
}

function RegistrarMascotaModel($nombre, $especie, $raza, $sexo, $fechaNacimiento, $UsuarioID)
{
    try {
        $enlace = AbrirBD();

        // Preparar la llamada al procedimiento almacenado
        $sentencia = $enlace->prepare("CALL RegistrarMascota(?, ?, ?, ?, ?, ?, @p_Resultado, @p_Mensaje)");
        $sentencia->bind_param("sssssi", $nombre, $especie, $raza, $sexo, $fechaNacimiento, $UsuarioID);

        // Ejecutar la sentencia
        $sentencia->execute();

        // Obtener los valores de salida
        $select = $enlace->query("SELECT @p_Resultado AS resultado, @p_Mensaje AS mensaje");
        $result = $select->fetch_assoc();

        CerrarBD($enlace);

        // Retorna un array con 'resultado' y 'mensaje'
        return $result; 
    } catch(Exception $ex) {
        return array('resultado' => 0, 'mensaje' => 'Error en el servidor.');
    }
}
?>
