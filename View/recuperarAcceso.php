<?php 
    include_once 'layout.php';
    include_once $_SERVER["DOCUMENT_ROOT"] .'/webTransaccionalVeterinaria/Controller/LoginController.php'; // Controlador llama al modelo
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Smile Pet </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php 
    IncluirCSS();
    ?>

</head>

<body>

    

    <?php 
    MostrarMenu();
    ?>

    <!-- END nav -->

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-7">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Recuperar Acceso</h3>
                                    <h5 class="mb-4">Ingresa tus datos</h5>
                                    <form action="" method="POST" id="contactForm" name="contactForm"
                                        class="contactForm">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="form-group">
                                                    <label class="label" for="email">Correo Electrónico</label>
                                                    <input type="email" class="form-control" name="txtCorreo"
                                                        id="txtCorreo" placeholder="" required>
                                                </div>

                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <a class="text" href="registrarUsuario.php">Crear una cuenta</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <!--Input de tipo submit-->
                                                    <input type="submit" class="btn btn-primary mr-md-4 py-3 px-4"
                                                        value="Recuperar Cuenta" id=btnRecuperarAcceso name=btnRecuperarAcceso>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-5 img" style="background-image: url(images/img.jpg);">
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


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg>
    </div>


    <?php 
    IncluirScripts();
    ?>



</body>

</html>