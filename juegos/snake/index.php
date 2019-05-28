<!doctype html>
<html lang="es" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Joqix">
    <title>Snake - Joqix-Games</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/main.css" class="css">
  </head>
  <body onkeydown="control(event);" class="d-flex flex-column h-100">
    <header>
    	<?php include __DIR__."/../../partials/menu-part.php"?>
    </header>
    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
    <div class="container">
        <h1 class="text-center">Snake </h1>
        <h3 class="text-center" id="puntos">0 puntos</h3>
        <div class="row">
                <canvas id="canvas" width="600" height="600" class="border bg-secondary"></canvas>
            <div class="col">
                <h4>Snake</h4>
                <h5>Controles del juego</h5>
                <ul>
                    <li><kdb><i class="far fa-arrow-alt-circle-up"></i></kbd>: Arriba</li>
                    <li><strong><i class="far fa-arrow-alt-circle-down"></i></strong>: Abajo </li>
                    <li><strong><i class="far fa-arrow-alt-circle-left"></i></strong>: Izquierda </li>
                    <li><strong><i class="far fa-arrow-alt-circle-right"></i></strong>: Derecha </li>
                </ul>
                <h5>Descripción</h5>
                <p>
                    Clásico juego al que seguro habrás jugado alguna vez, muy popular en teléfonos móviles Nokia.
                    Nos ponemos en la piel de una serpiente, cada vez que comes serás más grande.
                </p>
            </div>
        </div>
    </div>
    </main>
    <div class="modal" tabindex="-1" role="dialog" id="hasPerdido">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Has perdido</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Intentalo de nuevo</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
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
    <script src="js/snake.js"></script>
  </body>
</html>