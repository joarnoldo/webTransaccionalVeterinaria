<?php 
    include_once 'layout.php';
    include_once $_SERVER["DOCUMENT_ROOT"] .'/webTransaccionalVeterinaria/Controller/LoginController.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Smile Pet - Iniciar Sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Enlaces a CSS -->
    <?php 
    IncluirCSS();
    ?>
</head>


<body>

    <?php 
    MostrarMenu();
    ?>

     <!-- Contenido principal -->
     <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-7">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Iniciar Sesión</h3>
                                    <!-- Mostrar mensajes de error si existen -->
                                    <?php
                                        if(isset($_POST["txtMensaje"]))
                                        {
                                            echo '<div class="alert alert-danger">' . $_POST["txtMensaje"] . '</div>';
                                        }
                                    ?>
                                    <!-- Formulario de inicio de sesión -->
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <!-- Campos del formulario -->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email</label>
                                                    <input type="text" class="form-control" name="email" id="email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="password">Contraseña</label>
                                                    <input type="password" class="form-control" name="password" id="password" required>
                                                </div>
                                            </div>
                                            <!-- Mostrar mensajes de error si existen -->
                                            <?php
                                                if(isset($_POST["txtMensaje"]))
                                                {
                                                    echo '<div class="col-md-12"><div class="alert alert-danger">' . $_POST["txtMensaje"] . '</div></div>';
                                                }
                                            ?>
                                            <!-- Enlaces adicionales -->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <a class="text" href="recuperarAcceso.php">Recuperar acceso</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <a class="text" href="registrarUsuario.php">Registrarse</a>
                                                </div>
                                            </div>
                                            <!-- Botón de envío -->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary mr-md-4 py-3 px-4" id="btnIniciarSesion" name="btnIniciarSesion">Iniciar Sesión<span class="ion-ios-arrow-forward"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    </div>
                                </div>
                            <div class="col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-5 img" style="background-image: url(images/sesion.jpg);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    MostrarFooter();
    ?>

    <!-- Enlaces a scripts -->
    <?php 
    IncluirScripts();
    ?>

</body>

</html>