<?php

    include_once $_SERVER["DOCUMENT_ROOT"] .'/webTransaccionalVeterinaria/Model/BaseDatos.php';

    //Iniciar Sesión

    function IniciarSesionModel($correo, $contrasenna)
    {
        try {
            $enlace = AbrirBD();

            // Ejecutar el procedimiento almacenado
            $sentencia = "CALL IniciarSesion('$correo', '$contrasenna')";
            $resultado = $enlace->query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        } catch(Exception $ex) {
            return null;
        }
    }


    //Recuperar Acceso Mediante Correo
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

?>