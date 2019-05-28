<!doctype html>
<html lang="es" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página web en la que podrás jugar videojuegos javascript y aprender a crearlos">
    <meta name="author" content="Joqix">
	  <meta property="og:title" content="Joqix Games videojuegos en javascript" />
	  <meta property="og:url" content="https://www.joqixgames.byethost7.com" />
	  <meta property="og:description" content="Página web en la que podrás jugar a videojuegos en javascript y aprender a crearlos">
	  <meta property="og:image" content="img/joqixgames.png">
	  <meta property="og:type" content="website" />
	  <meta property="og:locale" content="es_ES" />
	  
    <title>Joqix-Games</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">
  </head>
  <body class="d-flex flex-column h-100">
    <header>
 		<?php include __DIR__."/partials/menu-part.php"?>
	</header>
	<!-- Begin page content -->
	<main role="main" class="flex-shrink-0">
	<div class="container-fluid">
	  <div class="row ">
		<div class="col-12 mt-5">
		  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
				<div class="carousel-item ">
				  <img class="d-block w-100" src="img/slider1.png" alt="First slide">
				  <div class="carousel-caption d-block d-md-block">
					  <h5>Boneshot</h5>
					  <p>Acaba con las hordas de esqueletos y aliens</p>
					  <div class="text-center"><a href="http://boneshot.unaux.com" target="_blank" class="btn btn-primary">Descargar</a></div>
					</div>
				</div>
				<div class="carousel-item active">
				  <img class="d-block w-100" src="img/slider2.png" alt="Second slide">
				  <div class="carousel-caption d-block d-md-block">
					  <h5>Arkanoid</h5>
					  <p>Rompe todos los bloques para ganar</p>
					  <div class="text-center"><a class="btn btn-primary" href="/juegos/arcanoid">Juega ahora</a></div>
					</div>
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="img/slider3.png" alt="Third slide">
				  <div class="carousel-caption d-block d-md-block">
					  <h5>Snake</h5>
					  <p>Alimentate para ser más grande</p>
					  <div class="text-center"><a class="btn btn-primary" href="/juegos/snake">Juega ahora</a></div>
					</div>
				</div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	  </div>
	</div>
	  <div class="container">
		<h1 class="mt-5">Joqix Games</h1>
		<p class="lead">En esta página web podras jugar a varios juegos creados únicamente con código html y javascript.</p>
		<p class="lead">Para el desarrollo de la malloría de videojuegos a los que estamos acostumbrados se emolea algun motor gráfico. </p>
		<p class="lead">Estos motores facilitan el diseño y desarrollo del videojuego y se encargan de realizar numerosos calculos y acciones para que el programador no tenga que hacerlo y así facilitarle el trabajo.</p>
		<p class="lead">En esta web se han querido desarrollar juegos sin esa ayuda para ver lo que es realmente el desarrollo de un juego desde cero. Como resultado aqui podrás jugar varios juegos con estilo clásico que te recordarán a los primeros videojuegos que jugaste.</p>
		<p>Esta web ha sido realizada por Joaquin Alonso Perianez como proyecto de final del ciclo formativo de grado superior Desarrollo de Aplicaciones Web. Si quieres contactar conmigo puedes hacerlo desde la sección de <a href="/contacto">contacto</a></p>
		<div class="row">
		  <div class="col-3">
			<img src="img/micara.png" alt="cara" class="img img-fluid w-100" >
		  </div>
		  <div class="col-9">
			<h2>Joaquin Alonso Perianez</h2>
			<p>Mi nombre es Joaquin, soy técnico superior en desarrollo de aplicaciones multiplataforma y al terminar esta web seré técnico superior en desarrollo de aplicaciones web</p>
			<p>Esta web se realiza como proyecto de final de ciclo de DAW, el objetivo buscado es aprender a desarrollar juegos en lenguaje javascript sin uso de motores gráficos.</p>
			<p>En esta web te ofrezco la posibilidad de jugar a estos juegos o, si te gusta picar código, te muestro como se hacen estos juegos. Espero que pases un buen rato en esta web, un saludo Joqix</p>
		  </div>
		</div>
	  </div>
	</main>
	<footer class="footer mt-auto py-3">
	  <div class="container">
		<span class="text-muted">Web desarrollada por Joaquin Alonso Perianez (Joqix)</span>
	  </div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		  <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    </body>
</html>