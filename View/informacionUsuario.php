<?php
include_once 'layout.php';
include_once $_SERVER["DOCUMENT_ROOT"] .'/webTransaccionalVeterinaria/Controller/UsuarioController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Smile Pet - Información del Usuario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php IncluirCSS(); ?>
</head>
<body>
    <?php 
    MostrarMenu(); 
    ?>

    <section class="ftco-section bg-light">
        <div class="container">
            <h3 class="mb-4">Información del Usuario</h3>

            <?php
                if(isset($_SESSION["txtMensaje"]))
                {
                    echo '<div class="alert alert-danger">' . $_SESSION["txtMensaje"] . '</div>';
                    unset($_SESSION["txtMensaje"]);
                }
            ?>

            <div class="row">
                <div class="col-md-6">
                    <p><strong>Nombre:</strong> <?php echo isset($_SESSION["Nombre"]) ? $_SESSION["Nombre"] : ''; ?></p>
                    <p><strong>Apellido:</strong> <?php echo isset($_SESSION["Apellido"]) ? $_SESSION["Apellido"] : ''; ?></p>
                    <p><strong>Correo Electrónico:</strong> <?php echo isset($_SESSION["CorreoElectronico"]) ? $_SESSION["CorreoElectronico"] : ''; ?></p>
                    <p><strong>Teléfono:</strong> <?php echo isset($_SESSION["Telefono"]) ? $_SESSION["Telefono"] : ''; ?></p>
                    <p><strong>Dirección:</strong> <?php echo isset($_SESSION["Direccion"]) ? $_SESSION["Direccion"] : ''; ?></p>
                </div>
            </div>

            <?php
                if(isset($_SESSION["htmlMascotas"]) && !empty($_SESSION["htmlMascotas"]))
                {
                    echo $_SESSION["htmlMascotas"];
                }
            ?>

        </div>
    </section>

    <?php 
    MostrarFooter(); 
    ?>
    <?php 
    IncluirScripts(); 
    ?>
</body>
</html>




