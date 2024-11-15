<?php 
    include_once 'layout.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/webTransaccionalVeterinaria/Controller/LoginController.php';
?>

<!doctype html>
<html lang="en">

<head>
    <title>Pet Sitting - Historial de Citas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php 
    MostrarMenu(); 
    ?>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-7 order-md-1">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Historial de Citas</h3>
                                    <?php
                                    if (isset($_POST["txtMensaje"])) {
                                        echo '<div class="alert alert-info Centrado">' . $_POST["txtMensaje"] . '</div>';
                                    }
                                    ?>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="MascotaID" class="form-label">ID de la Mascota</label>
                                                <input type="number" class="form-control" name="MascotaID" id="MascotaID" placeholder="Ingrese el ID de la mascota" required>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary w-100 py-3" name="btnVerHistorial">Ver Historial</button>
                                            </div>
                                        </div>
                                    </form>

                                    <?php
                                    if (isset($_SESSION["HistorialCita"])) {
                                        $historial = $_SESSION["HistorialCita"];
                                        echo '<h4>Historial de Citas</h4>';
                                        echo '<table class="table">';
                                        echo '<thead><tr><th>Fecha</th><th>Motivo</th><th>Veterinario</th></tr></thead>';
                                        echo '<tbody>';
                                        foreach ($historial as $cita) {
                                            echo '<tr>';
                                            echo '<td>' . $cita['FechaHora'] . '</td>';
                                            echo '<td>' . $cita['Motivo'] . '</td>';
                                            echo '<td>' . $cita['VeterinarioID'] . '</td>';
                                            echo '</tr>';
                                        }
                                        echo '</tbody>';
                                        echo '</table>';
                                    }
                                    ?>
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

    <?php MostrarFooter(); ?>

    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
