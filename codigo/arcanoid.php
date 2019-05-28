<!doctype html>
<html lang="es" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Código Arkanoid - Joqix-Games</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css" class="css">
	  <link rel="stylesheet" href="../css/codigo.css" class="css">
  </head>
  <body class="d-flex flex-column h-100">
    <header>
    <?php include __DIR__."/../partials/menu-part.php"?>
</header>
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
	  <?php if(!isset($_SESSION["usuario"])):?>
			<h1>Página para miembros</h1>
			<p>
				Esta página es solo para usuarios registrados, debes <a href="/login.php">iniciar sesión</a> para ver esta página, si no tienes cuenta puedes <a href="/register.php">registrarte ahora gratis</a>
			</p>
			<p>
				Al registrarte tendras acceso al código de los juegos disponibles en esta web junto con una explicación detallada.
			</p>
			<?php else: ?>
  <div class="row">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Descripción</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Código</a>
          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Enlaces</a>
        </div>
      </nav>
</div>
<div class="row">
	
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
         	<p>
				Se trata de el típico juego de arkanoid al que todos hemos jugado.
			</p>
			<p>
				En este juego controlamos una barra flechas de dirección: <kbd>&larr;</kbd> y <kbd>&rarr;</kbd> o con el tatón
			</p>
			<p>
				Con nuestra barra debemos evitar que una bola toque al suelo
			</p>
			<p>
				El objetivo será romper una serie de bloques que se romperan cuando la bola choque con ellos
			</p>
			<p>
				El juego finaliza cuando se rompen todos los bloques o cuando la bola cae tres veces
			</p>
			<p>
				En este juego podemos aprender el funcionamiento del canvas, captura de eventos, el método requestAnimationFrame...
			</p>
          
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <p>Para el desarrollo de este juego se ha usado código html y javascript, este es código que necesitaremos</p>
		  <h2>Código HTML</h2>
			<code>&lt;canvas id="myCanvas" width="480" height="320" >&lt;/canvas></code>
		  <p>Al final del body pondremos los scripts si los incluimos en el mismo documento o la llamada al script, en este caso lo tendriamos dentro de una carpeta llamada js y la llamada sería algo así</p>
		  <code>&lt;script src="js/arkanoid.js">&lt;/script></code>
		  <h2>Código Javascript</h2>
          	<p>
				Lo primero que debemos hacer es crear las variables necesarias para el juego.
				<var>canvas</var> que guardará una referencia al canvas, <var>ctx</var> que guardará el contexto, <var>x</var> y <var>y</var> que guardarán la posición de la bola,<br>
				<var>dx</var> y <var>dy</var> que guardarán las direcciones de la bola, <var>radioBola</var> que guardará el radio de la bola,<br> <var>paddleHeight</var> y <var>paddleWidth</var> que guardarán el alto y el ancho de la barra, <var>paddleX</var> que guardará la posición en la x de la barra,<br>
				<var>rightPressed</var> y <var>leftPressed</var> que guardarán si se esta pulsando derecha e izquierda respectivamente, <var>brickRowCount</var> y <var>brickColumnCount</var> que guardarán las filas y columnas de ladrillos respectivamente,<br>
				<var>brickOffsetTop</var> y <var>brickOffsetLeft</var> que guardarán el espacio entre los ladrillos, <var>bricks</var> que guardará un objeto por cada ladrillo (este objeto tendrá su posicón x e y y su estado [1 bien 2 roto]), y por último <var>score</var> para los puntos y <var>lives</var> para las vidas.
			</p>
<pre>
//obtenemos el canvas y el contextos
var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
 //establecemos la posicion inicial
var x = canvas.width/2;
var y = canvas.height-30;
var dx = 2;
var dy = -2;
var radioBola=10;
//tamaño de la bara
var paddleHeight = 10;
var paddleWidth = 75;
var paddleX = (canvas.width-paddleWidth)/2;
//variables para comprobar si se pulsó una tecla
var rightPressed = false;
var leftPressed = false;

//variables para los ladrillos
var brickRowCount = 3;
var brickColumnCount = 5;
var brickWidth = 75;
var brickHeight = 20;
var brickPadding = 10;
var brickOffsetTop = 30;
var brickOffsetLeft = 30;
//guardamos los ladrillos a mostrar
var bricks = [];
for(c=0; c&lt;brickColumnCount; c++) {
    bricks[c] = [];
    for(r=0; r&lt;brickRowCount; r++) {
        bricks[c][r] = { x: 0, y: 0, status: 1 };
    }
}
//guardamos la puntuacion
var score=0;
var lives=3;
</pre></pre>
              <p>
				  Debemos capturar los eventos de pulsar una tecla de levantar una tecla y de mover el ratón
              </p>
              <pre>
//eventos para controlar cuando se pulsa una tecla y raton
document.addEventListener("keydown", keyDownHandler, false);
document.addEventListener("keyup", keyUpHandler, false);
document.addEventListener("mousemove", mouseMoveHandler, false);            
</pre>
			<p>
				Esos eventos llamarán a estos métodos: 
				Si se pulsa una tecla se comprueba si es la derecha <var>rightPressed</var> será verdadero y si es la izquierda <var>leftPressed</var> será verdadero.
				Ai se levanta una tecla se hará el proceso contrario y si se pulsa el ratón se calculará la x en función de la posición relativa del ratón sobre el canvas.
			</p>
<pre>
/**
 * Si se ha pulsado una tecla y es la derecha
 * o la izquierda el booleano correspondiente se pone a true
 */
function keyDownHandler(e) {
    if(e.keyCode == 39) {
        rightPressed = true;
    }
    else if(e.keyCode == 37) {
        leftPressed = true;
    }
}
/**
 * Si se ha levantado una tecla y es la derecha
 * o la izquierda el booleano correspondiente se pone a false
 */
function keyUpHandler(e) {
    if(e.keyCode == 39) {
        rightPressed = false;
    }
    else if(e.keyCode == 37) {
        leftPressed = false;
    }
}
function mouseMoveHandler(e) {
    var relativeX = e.clientX - canvas.offsetLeft;
    if(relativeX > 0 && relativeX &lt; canvas.width) {
        paddleX = relativeX - paddleWidth/2;
    }
}
</pre>
			<p>
				La función pintarBola se encarga de pintar un círculo en la posición en la que esta la bola teniendo en cuenta su radio.
				La función drawPaddle se encarga de pintar un rectángulo en la posición que está la barra teniendo en cuenta su ancho y alto.
			</p>
<pre>
/**
 * Esta funcion se encarga de pintar la bola en su posicion
 */
function pintarBola(){
    //pintamos la bola
    ctx.beginPath();
    ctx.arc(x, y, radioBola, 0, Math.PI*2);
    ctx.drawImage(bola, x-radioBola, y-radioBola,radioBola*2,radioBola*2);
    ctx.fillStyle = "#FFFFFF";
    ctx.fill();
    ctx.closePath();
}
/**
 * pinta la barra
 */
function drawPaddle() {
    ctx.beginPath();
    ctx.rect(paddleX, canvas.height-paddleHeight, paddleWidth, paddleHeight);
    ctx.fillStyle = "#0095DD";
    ctx.fill();
    ctx.closePath();
}
</pre>
		<p>
			Mediante la función drawBricks se pintan los ladrillos, se recorre el array de ladrillos y si su status es 1 se van pintando en sus posiciones correspondientes.
		</p>
<pre>
/**
 * funcion para pintar los ladrillos
 */
function drawBricks() {
    for(c=0; c &lt; brickColumnCount; c++) {
        for(r=0; r&lt;brickRowCount; r++) {
            if(bricks[c][r].status==1){
                var brickX = (c*(brickWidth+brickPadding))+brickOffsetLeft;
                var brickY = (r*(brickHeight+brickPadding))+brickOffsetTop;
                bricks[c][r].x = brickX;
                bricks[c][r].y = brickY;
                ctx.beginPath();
                ctx.rect(brickX, brickY, brickWidth, brickHeight);
                ctx.fillStyle = "red";
                ctx.fill();
                ctx.closePath();
            }
        }
    }
}
</pre></pre>
			<p>
				Esta función detecta las colisiones de la bola con los ladrillos.
				Al detectar ina colisión con un ladrillo con su status a 1, establece el status de este a 0 (recordemos que si el status de un ladrillo no es 1 no se pinta) y suma un punto.
				Si detecta que la puntuación es igual al número de ladrillos se mostrará una alerta avisando al usuario de que ha ganado y se recargará la página con lo que el juego empezará de nuevo.
			</p>
<pre>
function collisionDetection() {
    for(c=0; c&lt;brickColumnCount; c++) {
        for(r=0; r&lt;brickRowCount; r++) {
            var b = bricks[c][r];
            if(b.status == 1) {
                if(x > b.x && x &lt; b.x+brickWidth && y > b.y && y &lt; b.y+brickHeight) {
                    dy = -dy;
                    b.status = 0;
                    score++;
                    if(score == brickRowCount*brickColumnCount) {
                        alert("FELICIDADES HAS GANADO");
                        document.location.reload();
                    }
                }
            }
        }
    }
}
</pre>
			<p>
				Estas dos funciones pintan la puntuación y la vida, para ello solo llaman al método fillText del contexto pasandole un texto, una posición x y una posición y.
			</p>
<pre>
/**
 * funcion para pintar la puntuacion
 */
function drawScore() {
    ctx.font = "16px Arial";
    ctx.fillStyle = "#0095DD";
    ctx.fillText("Puntuación: "+score, 8, 20);
}


/**
 * pinta las vidas
 */
function drawLives() {
    ctx.font = "16px Arial";
    ctx.fillStyle = "#0095DD";
    ctx.fillText("Vidas: "+lives, canvas.width-65, 20);
}
</pre>
              <p>
			  	Este es el método en el que se desarrollará todo el juego.
				Primero reseteamos el lienzo, despues llamamos a los métodos necesarios para pintar la bola, la barra y los ladrillos.
				Comprobamos las colisiones con los ladrillos y pintamos los puntos y las vidas.
				Actualizamos la posición de la bola, si coincide con uno de los bordes invertimos su dirección en ese eje con lo que se crea el efecto de rebote a excepción del borde inferior.
				En caso del borde inferior solo invertimos la dirección si la bola esta en la barra, en caso contrario se restará una vida, cuando las vidas sean 0 se mostrará una alerta de que el usuario ha perdido y se recargará la página con lo que el juego volverá a empezar.
				Con el método requestAnimationFrame dejamos que sera el sistema el que decida a cada cuantos milisegundos puede recargar con lo que solo tenemos que llamar a draw una vez y despues se irá llamando en función de las posibilidades de la máquina.
			  </p>
              <pre>
/**
 * esta es la funcion que se encarga de pintar el canvas
 */
function draw(){
    //reseteamos el lienzo
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    //pintamos la bola
    pintarBola();
    drawPaddle();
    drawBricks();
    collisionDetection();
    drawScore();
    drawLives();
    //actualizamos la posicion, si coincide con los bordes invertimos la direccion
    if(x + dx > canvas.width-radioBola || x + dx &lt; radioBola) {
        dx = -dx;
    }
    if( y + dy &lt; radioBola) {
        dy = -dy;
    }else{
        if(y+dy>canvas.height-radioBola){
            if(x>paddleX&&x&lt;paddleX+paddleWidth){
                dy=-dy
            }
            else{
                lives--;
                if(!lives){
                    alert("GAME OVER");
                    document.location.reload();
                }else{
                    x = canvas.width/2;
                    y = canvas.height-30;
                    dx = 2;
                    dy = -2;
                    paddleX = (canvas.width-paddleWidth)/2;
                }
            }
        }
    }
    //comprobamos si hay alguna de las teclas pulsadas y movemos la barra
    if(rightPressed && paddleX &lt; canvas.width-paddleWidth) {
        paddleX += 7;
    }
    else if(leftPressed && paddleX > 0) {
        paddleX -= 7;
    }
    
    x += dx;
    y += dy;
    requestAnimationFrame(draw);
}
//establecemos que cada vez que el navegador pueda vuelva a pintar
draw();
</pre>
             
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
		<div class="row">
		<div class="col text-center">
			<i class="fas fa-code " style="font-size: 5em"></i>
			<p>Para desarrollarlo se ha seguido el siguiente tutorial: <a href="https://developer.mozilla.org/es/docs/Games/Workflows/Famoso_juego_2D_usando_JavaScript_puro" target="_blank">https://developer.mozilla.org/es/docs/Games/Workflows/Famoso_juego_2D_usando_JavaScript_puro</a></p>
		</div>
		<div class="col text-center">
			<i class="fab fa-github" style="font-size: 5em"></i>
			<p>Puedes ver el código aquí: <a href="#" target="_blank">http://example.com</a></p>
		</div>
		</div>
            
        </div>
      </div>
</div>
<?php endif; ?>
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