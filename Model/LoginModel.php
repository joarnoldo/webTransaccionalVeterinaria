<?php

include_once $_SERVER["DOCUMENT_ROOT"] .'/webTransaccionalVeterinaria/Model/BaseDatos.php';

function IniciarSesionModel($correo, $contrasenna)
{
    try
    {
        $enlace = AbrirBD();

        // Llamar al procedimiento almacenado con los parámetros de entrada
        $sentencia = "CALL IniciarSesion('$correo','$contrasenna')";
        $resultado = $enlace->query($sentencia);

        CerrarBD($enlace);
        return $resultado;
    }
    catch(Exception $ex)
    {
        return null;
    }
}

function RegistrarPropietarioModel($nombre,$apellido,$nombreUsuario,$correoElectronico,$contrasenna,$telefono,$direccion)
{
    try {
        // Abrir la conexión a la base de datos
        $enlace = AbrirBD();
    
        // Ejecutar el procedimiento almacenado
        $sentencia = "CALL RegistrarPropietario('$nombre','$apellido','$nombreUsuario','$correoElectronico','$contrasenna','$telefono','$direccion')";
        $resultado = $enlace -> query($sentencia);

        // Cerrar la conexión
        CerrarBD($enlace);

        return $resultado;
    } catch(Exception $ex) {
        return false;
    }
}
function RegistrarUsuarioModel($nombre,$apellido,$nombreUsuario,$correoElectronico,$contrasenna,$telefono,$direccion)
    {
        try
        {
            $enlace = AbrirBD();

            $sentencia = "CALL RegistrarUsuario('$nombre','$apellido','$nombreUsuario','$correoElectronico','$contrasenna','$telefono','$direccion')";
            $resultado = $enlace -> query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        }
        catch(Exception $ex)
        {
            return false;
        }
    }
 function RegistrarMascotaModel($nombre,$especie,$raza,$sexo,$fechaNacimiento,$propietarioID)
    {
        try
        {
            $enlace = AbrirBD();

            $sentencia = "CALL RegistrarMascota('$nombre','$especie','$raza','$sexo','$fechaNacimiento','$propietarioID')";
            $resultado = $enlace -> query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        }
        catch(Exception $ex)
        {
            return false;
        }
    }

function RecuperarAccesoModel($correo)
    {
        try {
            // Llama a la función que abre la base de datos
            $enlace = AbrirBD();
        
            //Ejecutamos el procedimiento almacenado (Select me devuelve un objeto y se retorna null)
            $sentencia = "CALL RecuperarAcceso('$correo')" ; // SELECT devuelve un objeto
            // todo llamado a base de datos debe de devolver un resultado
            $result = $enlace -> query($sentencia);

            // llama a la funcion que cierra la base de datos
            CerrarBD($enlace); 
            return $result; 

        } catch (Exception $ex) {
            return null; // SELECT devuelve un objeto
        }
    }

    function ActualizarContrasennaModel($UsuarioID, $Codigo)
    {
        try {
            // Llama a la función que abre la base de datos
            $enlace = AbrirBD();
        
            //Ejecutamos el procedimiento almacenado (Insert, update y delete deviuelve una sentencia)
            $sentencia = "CALL ActualizarContrasenna('$UsuarioID','$Codigo')" ; // CREATE, UPDATE, DELETE devuelve true or false
            // todo llamado a base de datos debe de devolver un resultado
            $result = $enlace -> query($sentencia);

            // llama a la funcion que cierra la base de datos
            CerrarBD($enlace); 
            return $result; 

        } catch (Exception $ex) {
            return false; // CREATE, UPDATE, DELETE devuelve true or false
        }
    }

    function AgendarCitaModel($fechaHora, $motivo, $mascotaID, $veterinarioID, $estadoCitaID = 'Pendiente') 
    {
        try {
            $enlace = AbrirBD();
            $sentencia = "CALL AgendarCita('$fechaHora', '$motivo', $mascotaID, $veterinarioID, '$estadoCitaID')";
            $resultado = $enlace->query($sentencia);
            CerrarBD($enlace);
            return $resultado;
        } catch (Exception $ex) {
            return null;
        }
    }
    

    function ModificarCitaModel($citaID, $nuevaFechaHora, $nuevoMotivo, $nuevoEstadoCitaID)
    {
        try {
            $enlace = AbrirBD();

            $sentencia = "CALL ModificarCita($citaID, '$nuevaFechaHora', '$nuevoMotivo', $nuevoEstadoCitaID)";
            $resultado = $enlace->query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        } catch (Exception $ex) {
            return null;
        }
    }

    function CancelarCitaModel($citaID)
    {
        try {
            $enlace = AbrirBD();

            $sentencia = "CALL CancelarCita($citaID)";
            $resultado = $enlace->query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        } catch (Exception $ex) {
            return null;
        }
    }

    function HistorialCitaModel($mascotaID)
    {
        try {
            $enlace = AbrirBD();

            // Llamada al procedimiento almacenado para obtener el historial de citas
            $sentencia = "CALL HistorialCita($mascotaID)";
            $resultado = $enlace->query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        } catch (Exception $ex) {
            return null;
        }
    }
?>