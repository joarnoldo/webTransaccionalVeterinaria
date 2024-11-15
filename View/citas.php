<?php 
    include_once 'layout.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Veterinaria Smile Pet</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>

    <?php 
    MostrarMenu();
    ?>

    <section class="ftco-section bg-light ftco-no-pt ftco-intro">
        <div class="container">
            <div class="row">

                <div class="col-md-3 d-flex align-self-stretch px-4 ftco-animate">
                    <div class="d-block services text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fas fa-calendar-check"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Agendar Cita</h3>
                            <p>Programa una cita para tu mascota de manera rápida y sencilla.</p>
                            <a href="agendarCita.php" class="btn-custom d-flex align-items-center justify-content-center">
                                <span class="fa fa-chevron-right"></span><i class="sr-only">Leer más</i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex align-self-stretch px-4 ftco-animate">
                    <div class="d-block services text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fas fa-edit"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Modificar Cita</h3>
                            <p>Cambia la fecha o detalles de tus citas existentes con facilidad.</p>
                            <a href="modificarCita.php" class="btn-custom d-flex align-items-center justify-content-center">
                                <span class="fa fa-chevron-right"></span><i class="sr-only">Leer más</i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 d-flex align-self-stretch px-4 ftco-animate">
                    <div class="d-block services text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fas fa-times-circle"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Cancelar Cita</h3>
                            <p>Anula citas que ya no sean necesarias con tan solo un clic.</p>
                            <a href="cancelarCita.php" class="btn-custom d-flex align-items-center justify-content-center">
                                <span class="fa fa-chevron-right"></span><i class="sr-only">Leer más</i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex align-self-stretch px-4 ftco-animate">
                    <div class="d-block services text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fas fa-history"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Historial de Citas</h3>
                            <p>Consulta las citas anteriores de tu mascota fácilmente.</p>
                            <a href="historialCitas.php" class="btn-custom d-flex align-items-center justify-content-center">
                                <span class="fa fa-chevron-right"></span><i class="sr-only">Leer más</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer">
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <p class="copyright">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                    document.write(new Date().getFullYear());
                    </script>
                    Todos los derechos reservados | Este template está hecho con
                    <i class="fa fa-heart" aria-hidden="true"></i> por
                    <a href="" target="_blank">Cliente/Servidor</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg>
    </div>

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