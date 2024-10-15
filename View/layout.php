<?php

function MostrarMenu()
{
    // Obtén la URL actual
    $uri = $_SERVER['REQUEST_URI'];

    // Define las rutas para cada enlace
    $home_active = (strpos($uri, 'home.php') !== false) ? 'active' : '';
    $about_active = (strpos($uri, 'acercaDeNosotros.html') !== false) ? 'active' : '';
    $vet_active = (strpos($uri, 'veterinaria.php') !== false) ? 'active' : '';
    $services_active = (strpos($uri, 'services.html') !== false) ? 'active' : '';
    $gallery_active = (strpos($uri, 'gallery.html') !== false) ? 'active' : '';
    $blog_active = (strpos($uri, 'blog.html') !== false) ? 'active' : '';
    $login_active = (strpos($uri, 'iniciarSesion.php') !== false) ? 'active' : '';


    echo '
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
	        	<li class="nav-item ' . $services_active . '"><a href="services.html" class="nav-link">Servicios</a></li>
	          <li class="nav-item ' . $gallery_active . '"><a href="gallery.html" class="nav-link">Gallería</a></li>
	          <li class="nav-item ' . $blog_active . '"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item ' . $login_active . '"><a href="iniciarSesion.php" class="nav-link">Iniciar Sesión</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    ';
}

?>