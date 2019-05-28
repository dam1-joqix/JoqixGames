<!doctype html>
<html lang="es" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Joqix">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Piano Joqix-Games</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	  <link rel="stylesheet" href="../../css/main.css" class="css">
	<link rel="stylesheet" href="../../css/piano.css" class="css">
    
  </head>
  <body onkeydown="control(event);" class="d-flex flex-column h-100">
    <header>
    <?php include __DIR__."/../../partials/menu-part.php"?>
    </header>
    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
    <div class="container">
        <div class="row">
            <div id="canvas" class="border" style="width:600px;">
                <div id="do" class="nota align-botton text-center">
                    <div>a</div>
                    <div>do</div>
                </div>
                <div id="re" class="nota text-center">
                    <div>s</div>
                    <div>re</div>
                </div>
                <div id="mi" class="nota text-center">
                    <div>d</div>
                    <div>mi</div>
                </div>
                <div id="fa" class="nota text-center">
                    <div>f</div>
                    <div>fa</div>
                </div>
                <div id="sol" class="nota text-center">
                    <div>g</div>
                    <div>sol</div>
                </div>
                <div id="la" class="nota text-center">
                    <div>h</div>
                    <div>la</div>
                </div>
                <div id="si" class="nota text-center">
                    <div>j</div>
                    <div>si</div>
                </div>
                <div id="do2" class="nota text-center">
                    <div>k</div>
                    <div>do</div>
                </div>
                <div id="re2" class="nota text-center">
                    <div>l</div>
                    <div>re</div>
                </div>
                <div id="ritmo1" class="nota">
                  Ritmo 1
                </div>
                <div id="ritmo2" class="nota">
                    Ritmo 2
                  </div>
                  <div id="ritmo3" class="nota">
                      Ritmo 3
                    </div>
                </div>
                <!--<canvas id="canvas" width="600" height="600" class="border bg-secondary"></canvas>-->
            <div class="col">
                <h4>Piano</h4>
                <h5>Controles del juego</h5>
                <ul>
                    <li>Teclas: <kbd>a</kbd>, <kbd>s</kbd>, <kbd>d</kbd>, <kbd>f</kbd>, <kbd>g</kbd>, <kbd>h</kbd>, <kbd>j</kbd>, <kbd>k</kbd>, <kbd>l</kbd></li>
                    <li>Pulsa los botones de la pantalla</li>
                </ul>
                <h5>Descripción</h5>
                <p>
                    Diviértete creando hermosas melodias
                </p>
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
    <script src="js/piano.js"></script>
  </body>
</html>