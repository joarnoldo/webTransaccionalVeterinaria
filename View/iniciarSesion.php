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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
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