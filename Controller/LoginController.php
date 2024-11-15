<?php

include_once $_SERVER["DOCUMENT_ROOT"] .'/webTransaccionalVeterinaria/Model/LoginModel.php'; // Controlador llama al modelo

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST["btnIniciarSesion"])) {
    $correo = $_POST["email"];
    $contrasenna = $_POST["password"];

    $resultado = IniciarSesionModel($correo, $contrasenna);

    if ($resultado != null && $resultado->num_rows > 0) {
        $datos = mysqli_fetch_array($resultado);
        $_SESSION["NombreUsuario"] = $datos["NombreUsuario"];
        $_SESSION["ConsecutivoUsuario"] = $datos["Consecutivo"];
        $_SESSION["ConsecutivoRolUsuario"] = $datos["ConsecutivoRol"];

        header('Location: home.php');
        exit();
    } else {
        session_destroy();
        $mensaje = "Su información no se ha validado correctamente";
    }
}

if (isset($_POST["btnCerrarSesion"])) {
    session_destroy();
    header('Location: home.php');
    exit();
}

if(isset($_POST["btnRegistrarUsuario"]))
{
    $nombre = $_POST["Name"];
    $apellido = $_POST["LastName"];
    $nombreUsuario = $_POST["Username"];
    $correoElectronico = $_POST["Email"];
    $contrasenna = $_POST["Password"];
    $telefono = $_POST["Phone"];
    $direccion = $_POST["Address"];

    // Validar que las contraseñas coincidan
    if($_POST["Password"] != $_POST["ConfirmPassword"])
    {
        $_POST["txtMensaje"] = "Las contraseñas no coinciden";
    }
    else
    {
        // Llamar al modelo para registrar el usuario
        $resultado = RegistrarUsuarioModel($nombre,$apellido,$nombreUsuario,$correoElectronico,$contrasenna,$telefono,$direccion);

        if($resultado == true)
        {
            header('location: iniciarSesion.php');
        }
        else
        {
            $_POST["txtMensaje"] = "Su información no se ha registrado correctamente";
        }
    }
}

if(isset($_POST["btnRegistrarMascota"]))
{ 
    $nombre = $_POST["Nombre"];
    $especie = $_POST["Especie"];
    $raza = $_POST["Raza"];
    $sexo = $_POST["Sexo"];
    $fechaNacimiento = $_POST["FechaNacimiento"];
    $propietarioID = $_POST["PropietarioID"];
   
       
    $resultado = RegistrarMascotaModel($nombre,$especie,$raza,$sexo,$fechaNacimiento,$propietarioID);

        if($resultado == true)
        {
            $_POST["txtMensaje"] = "Informacion registrada";
        }
        else
        {
            $_POST["txtMensaje"] = "Su información no se ha registrado correctamente, revisar informacion";
        }
        
    }
    

if(isset($_POST["btnRecuperarAcceso"]))
    {
        //Código de acción
        $correo = $_POST["txtCorreo"]; // En php se utiliza el name

        $result = RecuperarAccesoModel($correo);
        
        // result.num_rows para saber si encontro registros
        if($result != null && $result -> num_rows > 0)
        {
            // guarda los datos en la variable datos para manipular el array
            $datos = mysqli_fetch_array($result);

            // Generador de codigo aleatorio
            $codigo = GenerarCodigo();

            //Paso 1 Metodo para actualizar la contraseña en la base de datos
            ActualizarContrasennaModel($datos["UsuarioID"], $codigo);

            //Paso 2 Enviar el correo electronico
            $asunto = "Recuperación de Contraseña";
            $destinatario = $correo;
            $contenido =
            "<htlm>
                <!--Estilos basicos en la linea-->
                <body style='font-family: Arial, sans-serif; background-color: #f9f9f9; color: #333; padding: 20px;'>
                    <div style='max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);'>
                        <h2 style='color: #333;'>Recuperación de Contraseña</h2>
                        
                        <p>Hola,".$datos["Nombre"]."</p>
                        
                        <p>Hemos recibido una solicitud para restablecer tu contraseña. Tu nueva contraseña de ingreso de sesion es: <b>".$datos["Contrasenna"]."</b> Si no solicitaste este cambio, puedes ignorar este correo electrónico.</p>
                        
                        <p>Para recuperar tu contraseña, haz clic en el botón de abajo:</p>
                        
                        <p style='text-align: center;'>
                            <a href='http://localhost:81/webTransaccionalVeterinaria/View/IniciarSesion.php' style='display: inline-block; padding: 12px 24px; font-size: 16px; color: #ffffff; background-color: #007bff; text-decoration: none; border-radius: 5px;'>Recuperar Contraseña</a>
                        </p>
                        
                        <p>Este enlace expirará en 24 horas.</p>
                        
                        <p>Saludos,<br>El equipo de SEODash</p>
                        
                        <p style='font-size: 12px; color: #888; text-align: center;'>Este es un correo automático, por favor no respondas a este mensaje.</p>
                    </div>
                </body>
            </html>";

            // Metodo que envia el correo
            EnviarCorreo($asunto,$contenido,$destinatario);

            header('location: ../View/iniciarSesion.php');
        }
        else
        {
            // Limpiar variables de sesion 
            session_destroy();
            $_POST["txtMensaje"]= "Su información no se ha validado correctamente";
        }
    }

    // Funcion que permite generar codigo aleatorio
    function GenerarCodigo() {
        $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }

    // Funcion que permite enviar correos electronicos
    
    function EnviarCorreo($asunto,$contenido,$destinatario)
    {
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';
        

        $correoSalida = "tu correo";
        $contrasennaSalida = "tu contraseña";

        $mail = new PHPMailer();
        $mail -> CharSet = 'UTF-8';

        $mail -> IsSMTP();
        $mail -> IsHTML(true); 
        $mail -> Host = 'smtp.office365.com'; 
        $mail -> SMTPSecure = 'tls';
        $mail -> Port = 587;                  
        $mail -> SMTPAuth = true;
        $mail -> Username = $correoSalida;               
        $mail -> Password = $contrasennaSalida;                                
        
        $mail -> SetFrom($correoSalida);
        $mail -> Subject = $asunto;
        $mail -> MsgHTML($contenido);   
        $mail -> AddAddress($destinatario);

        // Activar el modo de depuración
        //$mail->SMTPDebug = 2;  // Cambia este valor según el nivel de detalle que quieras

        // Enviar el correo y verificar si se produjo algún error
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }
    }

    if (isset($_POST["btnAgendarCita"])) {
        $fechaHora = $_POST["FechaHora"];
        $motivo = $_POST["Motivo"];
        $veterinarioID = $_POST["VeterinarioID"];
        $mascotaID = $_POST["MascotaID"];
        $estadoCitaID = 'Pendiente'; 
        
        $resultado = AgendarCitaModel($fechaHora, $motivo, $mascotaID, $veterinarioID, $estadoCitaID);
        
        if ($resultado == true) {
            $_POST["txtMensaje"] = "Cita programada correctamente";
        } else {
            $_POST["txtMensaje"] = "Error al programar la cita. Por favor, revise los datos.";
        }
    }
    
    
    if (isset($_POST["btnModificarCita"])) {
        $citaID = $_POST["CitaID"];
        $nuevaFechaHora = $_POST["NuevaFechaHora"];
        $nuevoMotivo = $_POST["NuevoMotivo"];
        $nuevoVeterinarioID = $_POST["NuevoVeterinarioID"];
    
        // Llamar al modelo para modificar la cita
        $resultado = ModificarCitaModel($citaID, $nuevaFechaHora, $nuevoMotivo, $nuevoVeterinarioID);
    
        if ($resultado == true) {
            $_POST["txtMensaje"] = "Cita modificada correctamente";
        } else {
            $_POST["txtMensaje"] = "Error al modificar la cita. Por favor, revise los datos.";
        }
    }

    if (isset($_POST["btnCancelarCita"])) {
        $citaID = $_POST["CitaID"];
        
        // Llamar al modelo para cancelar la cita
        $resultado = CancelarCitaModel($citaID);
        
        if ($resultado == true) {
            $_POST["txtMensaje"] = "Cita cancelada correctamente";
        } else {
            $_POST["txtMensaje"] = "Error al cancelar la cita. Por favor, revise los datos.";
        }
    }    

    if (isset($_POST["btnHistorialCita"])) {
        $mascotaID = $_POST["MascotaID"];
        
        // Llamar al modelo para obtener el historial
        $resultado = HistorialCitaModel($mascotaID);
    
        if ($resultado != null && $resultado->num_rows > 0) {
            $historial = [];
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $historial[] = $fila; // Almacenar cada fila en el historial
            }
            $_SESSION["HistorialCita"] = $historial; // Guardar en sesión para usar en la vista
        } else {
            $_POST["txtMensaje"] = "No se encontraron citas para esta mascota.";
        }
    }       
?>