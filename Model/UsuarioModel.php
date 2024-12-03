<?php
    include_once $_SERVER["DOCUMENT_ROOT"] .'/webTransaccionalVeterinaria/Model/BaseDatos.php';
    
    //Crear Propietario
    function RegistrarPropietarioModel($nombre, $apellido, $nombreUsuario, $correoElectronico, $contrasenna, $telefono, $direccion)
    {
        try {
            $enlace = AbrirBD();

            // Llamar al procedimiento almacenado
            $sentencia = $enlace->prepare("CALL RegistrarPropietario(?, ?, ?, ?, ?, ?, ?, @p_Resultado, @p_Mensaje)");
            $sentencia->bind_param("sssssss", $nombre, $apellido, $nombreUsuario, $correoElectronico, $contrasenna, $telefono, $direccion);

            // Ejecutar la sentencia
            $sentencia->execute();

            // Obtener los valores de salida
            $select = $enlace->query("SELECT @p_Resultado as resultado, @p_Mensaje as mensaje");
            $result = $select->fetch_assoc();

            CerrarBD($enlace);

            return $result; // Retorna un array con 'resultado' y 'mensaje'
        } catch(Exception $ex) {
            return array('resultado' => 0, 'mensaje' => 'Error en el servidor.');
        }
    }

    //Obtener Info Macota, se debe pasar a MascotaModel.

    function ObtenerMascotasPropietarioModel($UsuarioID)
    {
        try {
            $enlace = AbrirBD();

            // Ejecutar el procedimiento almacenado para obtener las mascotas del propietario
            $sentencia = "CALL ObtenerMascotasPropietario('$UsuarioID')";
            $resultado = $enlace->query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        } catch(Exception $ex) {
            return null;
        }
    }

    //Obtener Info Usuario

    function ObtenerInformacionUsuarioModel($UsuarioID){

        try {
            $enlace = AbrirBD();
    
            $sentencia = "CALL ObtenerInformacionUsuario('$UsuarioID')";
            $resultado = $enlace->query($sentencia);
    
            CerrarBD($enlace);
            return $resultado;
        } catch(Exception $ex) {
            return null;
        }
        }

?>