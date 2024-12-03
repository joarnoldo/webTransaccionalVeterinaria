<?php
    include_once 'layout.php';
    include_once $_SERVER["DOCUMENT_ROOT"] .'/webTransaccionalVeterinaria/Model/LoginModel.php';
    include_once $_SERVER["DOCUMENT_ROOT"] .'/webTransaccionalVeterinaria/Model/UsuarioModel.php';

    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Verificar si el usuario ha iniciado sesión
    if(!isset($_SESSION["UsuarioID"]))
    {
        header('location: iniciarSesion.php');
        exit();
    }

    // Obtener la información del usuario
    $UsuarioID = $_SESSION["UsuarioID"];
    $resultado = ObtenerInformacionUsuarioModel($UsuarioID);

    if($resultado != null && $resultado->num_rows > 0)
    {
        $datos = mysqli_fetch_array($resultado);
        // Obtener los datos del usuario
        $Nombre = $datos["Nombre"];
        $Apellido = $datos["Apellido"];
        $CorreoElectronico = $datos["CorreoElectronico"];
        $Telefono = $datos["Telefono"];
        $Direccion = $datos["Direccion"];
        $RolID = $datos["RolID"];
    }
    else
    {
        $_POST["txtMensaje"] = "No se pudo obtener la información del usuario";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Smile Pet - Información del Usuario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Enlaces a CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php 
    MostrarMenu();
    ?>

    <!-- Contenido de la página -->
    <section class="ftco-section bg-light">
        <div class="container">
            <h3 class="mb-4">Información del Usuario</h3>

            <?php
                if(isset($_POST["txtMensaje"]))
                {
                    echo '<div class="alert alert-danger">' . $_POST["txtMensaje"] . '</div>';
                }
            ?>

            <div class="row">
                <div class="col-md-6">
                    <p><strong>Nombre:</strong> <?php echo isset($Nombre) ? $Nombre : ''; ?></p>
                    <p><strong>Apellido:</strong> <?php echo isset($Apellido) ? $Apellido : ''; ?></p>
                    <p><strong>Correo Electrónico:</strong> <?php echo isset($CorreoElectronico) ? $CorreoElectronico : ''; ?></p>
                    <p><strong>Teléfono:</strong> <?php echo isset($Telefono) ? $Telefono : ''; ?></p>
                    <p><strong>Dirección:</strong> <?php echo isset($Direccion) ? $Direccion : ''; ?></p>
                </div>
            </div>

            <?php
                // Si el usuario es un propietario (RolID = 3), mostrar sus mascotas
                if(isset($RolID) && $RolID == 3)
                {
                    // Obtener las mascotas del propietario
                    $resultadoMascotas = ObtenerMascotasPropietarioModel($UsuarioID);

                    if($resultadoMascotas != null && $resultadoMascotas->num_rows > 0)
                    {
                        echo '<h4 class="mt-4">Mis Mascotas</h4>';
                        echo '<ul>';
                        while($mascota = mysqli_fetch_array($resultadoMascotas))
                        {
                            echo '<li><a href="informacionMascota.php?MascotaID=' . $mascota["MascotaID"] . '">' . $mascota["Nombre"] . '</a></li>';
                        }
                        echo '</ul>';
                    }
                    else
                    {
                        echo '<p>No tienes mascotas registradas.</p>';
                    }
                }
            ?>
        </div>
    </section>

    <?php
    MostrarFooter();
    ?>

    <!-- Enlaces a scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>

