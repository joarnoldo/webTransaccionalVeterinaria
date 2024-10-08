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
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 phone pl-md-2">
                        <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +506 2222222</a>
                        <a href="#"><span class="fa fa-paper-plane mr-1"></span> vet@email.com</a>
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="home.php"><span class="flaticon-pawprint-1 mr-2"></span>Pet sitting</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">Acerca de nosotros</a></li>
                    <li class="nav-item"><a href="vet.html" class="nav-link">Veterinaria</a></li>
                    <li class="nav-item"><a href="services.html" class="nav-link">Servicios</a></li>
                    <li class="nav-item"><a href="gallery.html" class="nav-link">Gallería</a></li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                    <li class="nav-item active"><a href="iniciarSesion.php" class="nav-link">Iniciar Sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="home.php">Home <i
                                    class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Registrarse</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
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
                                            <div class="col-md-12">
                                                <label for="Name" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="Name" id="Name"
                                                    placeholder="Nombre" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="LastName" class="form-label">Apellido</label>
                                                <input type="text" class="form-control" name="LastName" id="LastName"
                                                    placeholder="Apellido" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="Username" class="form-label">Nombre de Usuario</label>
                                                <input type="text" class="form-control" name="Username" id="Username"
                                                    placeholder="Nombre de Usuario" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="Email" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="Email" id="Email"
                                                    placeholder="Email" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="Password" class="form-label">Contraseña</label>
                                                <input type="password" class="form-control" name="Password"
                                                    id="Password" placeholder="Contraseña" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="ConfirmPassword" class="form-label">Confirmar
                                                    Contraseña</label>
                                                <input type="password" class="form-control" name="ConfirmPassword"
                                                    id="ConfirmPassword" placeholder="Confirmar Contraseña" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="Phone" class="form-label">Número de Teléfono</label>
                                                <input type="tel" class="form-control" name="Phone" id="Phone"
                                                    placeholder="Número de Teléfono" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="Address" class="form-label">Dirección</label>
                                                <input type="text" class="form-control" name="Address" id="Address"
                                                    placeholder="Dirección">
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <p>¿Ya tienes cuenta? <a href="iniciarSesion.php">Iniciar sesión</a>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <button type="submit"
                                                    class="btn btn-primary w-100 py-3">Registrarse</button>
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

    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>