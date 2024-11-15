<?php

function MostrarMenu()
{
    // Obtén la URL actual
    $uri = $_SERVER['REQUEST_URI'];

    // Define las rutas para cada enlace
    $home_active = (strpos($uri, 'home.php') !== false) ? 'active' : '';
    $about_active = (strpos($uri, 'acercaDeNosotros.html') !== false) ? 'active' : '';
    $vet_active = (strpos($uri, 'veterinaria.php') !== false) ? 'active' : '';
    $services_active = (strpos($uri, 'servicios.php') !== false) ? 'active' : '';
    $gallery_active = (strpos($uri, 'galeria.php') !== false) ? 'active' : '';
    $blog_active = (strpos($uri, 'blog.html') !== false) ? 'active' : '';
    $login_active = (strpos($uri, 'iniciarSesion.php') !== false) ? 'active' : '';


    echo '
	<div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 phone pl-md-2">
                        <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +506 2222-2222</a>
                        <a href="#"><span class="fa fa-paper-plane mr-1"></span> info@smilepet.com</a>
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="https://es-la.facebook.com/"
                                class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i
                                        class="sr-only">Facebook</i></span></a>
                            <a href="https://x.com/" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="https://www.instagram.com/?hl=es-la%3F%2F"
                                class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="https://dribbble.com/signup/new"
                                class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i
                                        class="sr-only">Dribbble</i></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
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
	          <li class="nav-item ' . $gallery_active . '"><a href="galeria.php" class="nav-link">Gallería</a></li>
	          <li class="nav-item ' . $blog_active . '"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item ' . $login_active . '"><a href="iniciarSesion.php" class="nav-link">Iniciar Sesión</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    ';
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