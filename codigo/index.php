
<!doctype html>
<html lang="es" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Código - Joqix-Games</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css" class="css">

  </head>
  <body class="d-flex flex-column h-100">
    <header>
    <?php include __DIR__."/../partials/menu-part.php"?>
</header>
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
        <div class="row">
			<?php if(!isset($_SESSION["usuario"])):?>
			<h1>Página para miembros</h1>
			<p>
				Esta página es solo para usuarios registrados, debes <a href="/login.php">iniciar sesión</a> para ver esta página, si no tienes cuenta puedes <a href="/register.php">registrarte ahora gratis</a>
			</p>
			<p>
				Al registrarte tendras acceso al código de los juegos disponibles en esta web junto con una explicación detallada.
			</p>
			<?php else: ?>
          <div class="col-12 text-center">
            <h1>Código</h1>
            <p>
              Aquí tienes podrás ver el código fuente de los juegos.
              Por cada juego tendrás el código y un enlace a github, así como enlaces a las referencias consultadas para realizar cada juego.
              Espero que disfrutéis como yo modificando este código y creando grandes juegos.
            </p>
          </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="card my-2" >
                    <img src="../img/snake.PNG" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title" >Snake</h5>
                        <p class="card-text">Clásico juego de la serpiente popular gracias a los teléfonos Nokia</p>
                    </div><!--/card-body-->
                    <div class="card-footer">
                      <a href="/juegos/snake/" class="btn btn-primary">Jugar</a>
                      <a href="/codigo/snake.php" class="btn btn-secondary">Código</a>
                    </div><!--/card-footer-->
                </div><!--/card-->
            </div><!--/col-->
            <div class="col-md-4 col-sm-6 col-12">
                    <div class="card my-2" >
                        <img src="../img/arkanoid_square.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Arkanoid</h5>
                            <p class="card-text">Consigue romper todos los bloques para ganar</p>
                        </div><!--/car-body-->
                        <div class="card-footer">
                          <a href="/juegos/arcanoid/" class="btn btn-primary">Jugar</a>
                          <a href="/codigo/arcanoid.php" class="btn btn-secondary">Código</a>
                      </div><!--/card-footer-->
                    </div><!--/card-->
            </div><!--/col-->
            <div class="col-md-4 col-sm-6 col-12">
              <div class="card my-2" >
                  <img src="../img/piano.png" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Piano</h5>
                      <p class="card-text">Crea hermosas melodias con tu teclado o haciendo click en las notas.</p>
                  </div>
                  <div class="card-footer">
                    <a href="/juegos/piano/" class="btn btn-primary ">Jugar</a>
                    <a href="/codigo/piano.php" class="btn btn-secondary ">Código</a>

                </div>
              </div><!--/card-->
            </div><!--/col-->
            <div class="col-md-4 col-sm-6 col-12 m-auto">
                <div class="card my-2" >
                    <img src="../img/pong.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pong</h5>
                        <p class="card-text">Evita que la pelota entre en tu campo</p>
                    </div>
                    <div class="card-footer">
                      <a href="/juegos/pong/" class="btn btn-primary ">Jugar</a>
                      <a href="/codigo/pong.php" class="btn btn-secondary ">Código</a>
                  </div>
                </div><!--/card-->
              </div><!--/col-->
             
            
        </div><!--/row-->
	  <?php endif;?>
  </div><!--/container-->
</main>
<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Web desarrollada por Joaquin Alonso Perianez (Joqix)</span>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>