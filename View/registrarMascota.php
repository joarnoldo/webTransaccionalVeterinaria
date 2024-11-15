<?php 
    include_once 'layout.php';
    include_once $_SERVER["DOCUMENT_ROOT"] .'/webTransaccionalVeterinaria/Controller/LoginController.php';
?>

<!doctype html>
<html lang="en">

<head>
    <title>Pet Sitting - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <!-- END nav -->

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-7 order-md-1">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Registre a su mascota</h3>
                                    <?php
                                    if(isset($_POST["txtMensaje"]))
                                    {
                                        echo '<div class="alert alert-info Centrado">' . $_POST["txtMensaje"] . '</div>';
                                    }
                                ?>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                        <div class="col-md-6 mb-3">
                                                <label for="Nombre" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="Nombre" id="Nombre"
                                                    placeholder="" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="Especie" class="form-label">Especie</label>
                                                <input type="text" class="form-control" name="Especie" id="Especie"
                                                    placeholder="" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="Raza" class="form-label">Raza</label>
                                                <input type="text" class="form-control" name="Raza" id="Raza"
                                                    placeholder="" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="Sexo" class="form-label">Sexo</label>
                                                <select class="form-control" name="Sexo" id="Sexo" required>
                                                <option value="Macho">Macho</option>
                                                <option value="Hembra">Hembra</option>
                                              </select>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="FechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                                                <input type="date" class="form-control" name="FechaNacimiento" id="FechaNacimiento"
                                                    placeholder="" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="PropietarioID" class="form-label">Propietario ID</label>
                                                <input type="text" class="form-control" name="PropietarioID"
                                                    id="PropietarioID" placeholder="" required>
                                            </div>

                                            
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary w-100 py-3" name="btnRegistrarMascota">Registrar mascota</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 order-md-2 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-5 img" style="background-image: url(images/RMasc.jpg);">
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


    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
