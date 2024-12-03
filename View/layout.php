<?php

function MostrarMenu()
{
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Obtener la URL actual
    $uri = $_SERVER['REQUEST_URI'];

    // Definir las rutas para cada enlace
    $home_active = (strpos($uri, 'home.php') !== false) ? 'active' : '';
    $about_active = (strpos($uri, 'acercaDeNosotros.html') !== false) ? 'active' : '';
    $vet_active = (strpos($uri, 'veterinaria.php') !== false) ? 'active' : '';
    $services_active = (strpos($uri, 'servicios.php') !== false) ? 'active' : '';
    $gallery_active = (strpos($uri, 'galeria.php') !== false) ? 'active' : '';
    $blog_active = (strpos($uri, 'blog.html') !== false) ? 'active' : '';
    $login_active = (strpos($uri, 'iniciarSesion.php') !== false) ? 'active' : '';

    // Menú de navegación
    echo '
    <div class="wrap">
        <!-- Tu código existente para el encabezado -->
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="../index.php"><span class="flaticon-pawprint-1 mr-2"></span>Smile Pet</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menú
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ' . $home_active . '"><a href="../index.php" class="nav-link">Home</a></li>
                    <li class="nav-item ' . $about_active . '"><a href="about.html" class="nav-link">Acerca de nosotros</a></li>
                    <li class="nav-item ' . $vet_active . '"><a href="vet.html" class="nav-link">Veterinaria</a></li>
                    <li class="nav-item ' . $services_active . '"><a href="servicios.php" class="nav-link">Servicios</a></li>
                    <li class="nav-item ' . $gallery_active . '"><a href="galeria.php" class="nav-link">Galería</a></li>
                    <li class="nav-item ' . $blog_active . '"><a href="blog.html" class="nav-link">Blog</a></li>';

    // Verifica si el usuario ha iniciado sesión
    if(isset($_SESSION["UsuarioID"]))
    {
        echo '
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fa fa-user"></span> ' . $_SESSION["NombreUsuario"] . '
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="informacionUsuario.php">Información del Usuario</a>';

        // Verificar si el usuario es Propietario (RolID = 3)
        if(isset($_SESSION["RolID"]) && $_SESSION["RolID"] == 3)
        {
            echo '<a class="dropdown-item" href="misMascotas.php">Mis mascotas</a>';
        }

        echo '
                <a class="dropdown-item" href="logout.php">Cerrar Sesión</a>
            </div>
        </li>';
    }
    else
    {
        // Mostrar enlace de "Iniciar Sesión"
        echo '<li class="nav-item ' . $login_active . '"><a href="iniciarSesion.php" class="nav-link">Iniciar Sesión</a></li>';
    }

    echo '
                </ul>
            </div>
        </div>
    </nav>';
}

function MostrarFooter(){
	echo '<footer class="footer">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 text-center">

                    <p class="copyright">
                        <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> Todos los derechos reservados | Este template está hecho por <a href="" target="_blank">Cliente/Servidor</a>
                        <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>';
}

?>