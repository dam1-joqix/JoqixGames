<!doctype html>
<html lang="es" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Joqix">
    <title>Arkanoid Joqix-Games</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 	<link rel="stylesheet" href="../../css/main.css" class="css">¡
    <style>
        canvas { 
          background: #eee; 
          display: block; 
          margin: 0 auto; 
          }
    </style>
  </head>
  <body class="d-flex flex-column h-100">
    <header>
    	<?php include __DIR__."/../../partials/menu-part.php"?>
	</header>
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <div class="row"><div class="col">&nbsp;</div></div>
    <div class="row">
            <canvas id="myCanvas" width="480" height="320" class="border bg-secondary"></canvas>
        <div class="col">
            <h4>Arkanoid</h4>
            <h5>Controles del juego</h5>
            <ul>
                <li> <i class="fas fa-mouse-pointer"></i> mover con el raton</li>
                <li> <i class="far fa-arrow-alt-circle-left"></i> Para mover a la izquierda</li>
                <li> <i class="far fa-arrow-alt-circle-right"></i> para mover a la derecha</li>
            </ul>
            <h5>Descripción</h5>
            <p>
               Usa la barra inferior para controlar la dirección de la bola. Destruye todos los bloques en la pantalla para ganar la partida.
            </p>
        </div>
    </div>
</div>
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
      <script src="js/arcanoid.js"></script>
    </body>
</html>