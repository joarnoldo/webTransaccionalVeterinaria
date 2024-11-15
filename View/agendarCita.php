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
                                    <h3 class="mb-4">Agende su cita</h3>
                                    <?php
                                    if(isset($_POST["txtMensaje"]))
                                    {
                                        echo '<div class="alert alert-info Centrado">' . $_POST["txtMensaje"] . '</div>';
                                    }
                                ?>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="FechaHora" class="form-label">Fecha y hora</label>
                                                <input type="datetime" class="form-control" name="FechaHora"
                                                    id="FechaHora" placeholder="Ingrese la fecha y hora de la cita" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="Motivo" class="form-label">Motivo</label>
                                                <input type="text" class="form-control" name="Motivo" id="Motivo"
                                                    placeholder="Ingrese el motivo de la cita" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="VeterinarioID" class="form-label">VeterinarioID</label>
                                                <input type="number" class="form-control" name="VeterinarioID"
                                                    id="VeterinarioID" placeholder="Ingrese el veterinario para la cita" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="MascotaID" class="form-label">MascotaID</label>
                                                <input type="number" class="form-control" name="MascotaID" id="MascotaID"
                                                    placeholder="Ingrese el ID de la mascota" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="EstadoCitaID" class="form-label">Estado de la Cita</label>
                                                <select class="form-control" name="EstadoCitaID" id="EstadoCitaID"
                                                    required>
                                                    <option value="1">Pendiente</option>
                                                    <option value="2">Confirmada</option>
                                                    <option value="3">Cancelada</option>
                                                </select>
                                            </div>

                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary w-100 py-3"
                                                    name="btnAgendarCita">Agendar Cita</button>
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