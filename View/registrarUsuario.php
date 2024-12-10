<?php 
    include_once $_SERVER["DOCUMENT_ROOT"] .'/webTransaccionalVeterinaria/Controller/UsuarioController.php';
    include_once 'layout.php';
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
?>


<!doctype html>
<html lang="en">

<head>
    <title>Pet Sitting - Free Bootstrap 4 Template by Colorlib</title>
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
        <!-- Mensajes -->
        <?php
            
            if(isset($_SESSION["txtMensaje"]))
            {
                // Si el registro fue exitoso, mostrar mensaje de éxito y redirigir
                if(isset($_SESSION["registroExitoso"]) && $_SESSION["registroExitoso"] == true)
                {
                    echo '<div class="alert alert-success">' . $_SESSION["txtMensaje"] . '</div>';
                    // Redirigir después de 3 segundos
                    echo '<script>
                            setTimeout(function(){
                                window.location.href = "iniciarSesion.php";
                            }, 3000);
                        </script>';
                    // Limpiar variables de sesión
                    unset($_SESSION["txtMensaje"]);
                    unset($_SESSION["registroExitoso"]);
                }
                else
                {
                    // Mostrar mensaje de error
                    echo '<div class="alert alert-danger">' . $_SESSION["txtMensaje"] . '</div>';
                    unset($_SESSION["txtMensaje"]);
                }
            }
        ?>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-7 order-md-1">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Registrarse</h3>
                                    <h5 class="mb-4">Ingresa tus datos</h5>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="Name" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="Name" id="Name"
                                                    placeholder="" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="LastName" class="form-label">Apellido</label>
                                                <input type="text" class="form-control" name="LastName" id="LastName"
                                                    placeholder="" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="Username" class="form-label">Nombre de Usuario</label>
                                                <input type="text" class="form-control" name="Username" id="Username"
                                                    placeholder="" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="Email" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="Email" id="Email"
                                                    placeholder="" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="Password" class="form-label">Contraseña</label>
                                                <input type="password" class="form-control" name="Password"
                                                    id="Password" placeholder="" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="ConfirmPassword" class="form-label">Confirmar Contraseña</label>
                                                <input type="password" class="form-control" name="ConfirmPassword"
                                                    id="ConfirmPassword" placeholder="" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="Phone" class="form-label">Teléfono</label>
                                                <input type="tel" class="form-control" name="Phone" id="Phone"
                                                    placeholder="" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="Address" class="form-label">Dirección</label>
                                                <input type="text" class="form-control" name="Address" id="Address"
                                                    placeholder="">
                                            </div>

                                            <div class="col-md-12 mb-3 text-center">
                                                <div class="form-group">
                                                    <p>¿Ya tienes cuenta? <a href="iniciarSesion.php">Iniciar sesión</a></p>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary w-100 py-3" id="btnRegistrarUsuario" name="btnRegistrarUsuario">Registrarse</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 order-md-2 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-5 img" style="background-image: url(images/dalmata.jpg);">
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
