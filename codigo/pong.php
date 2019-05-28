<!doctype html>
<html lang="es" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Código Pong - Joqix-Games</title>
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
				Se trata de el típico juego del pong, uno de los primeros videojuegos de la historia
			</p>
			<p>
				En este juego controlamos una barra flechas <kbd>&uarr;</kbd> y <kbd>&darr;</kbd> y controlamos otra barra con las teclas <kbd>w</kbd> u <kbd>s</kbd>, el juego es para dos jugadores
			</p>
			<p>
				Con nuestra barra debemos evitar que una bola toque nuestra pared y conseguir que toque la pared de nuestro contrincante
			</p>
			<p>
				Cada vez que colisiona con una de las paredes se sumará un punto al jugador correspondiente
			</p>
			<p>
				En este juego podemos aprender el funcionamiento del canvas, captura de eventos, el método requestAnimationFrame, a usar sprites...
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
				<var>dx</var> y <var>dy</var> que guardarán las direcciones de la bola, <var>radioBola</var> que guardará el radio de la bola,<br> <var>paddleHeight</var> y <var>paddleWidth</var> que guardarán el alto y el ancho de la barra, <var>paddleY</var> que guardará la posición en la y de la barra y <var>PaddleY2</var> que guardará la posición y de la barra del jugador 2<br>
				<var>uptPressed</var>, <var>downPressed</var>, <var>wPressed</var> y <var>sPressed</var> que guardarán si se esta pulsando arriba, abajo, w y s respectivamente<br>
				<var>puntosj1</var> y <var>puntosj2</var> para los puntos.
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
var velocidad=2;
var radioBola=10;
var color="#0095DD";
var paddleHeight = 75;
var paddleWidth = 10;
var paddleY = (canvas.height-paddleHeight)/2;
var paddleY2 = (canvas.height-paddleHeight)/2;
var upPressed=false, downPressed=false, wPressed=false, sPressed=false;
var puntosj1=0;
var puntosj2=0;
</pre></pre>
              <p>
				  Debemos capturar los eventos de pulsar una tecla de levantar una tecla 
              </p>
              <pre>
//eventos para controlar cuando se pulsa una tecla y raton
document.addEventListener("keydown", keyDownHandler, false);
document.addEventListener("keyup", keyUpHandler, false);          
</pre>
			<p>
				Esos eventos llamarán a estos métodos: 
				Si se pulsa una tecla se comprueba si es la tecla arriba <var>upPressed</var> será verdadero y si es la tecla abajo <var>dowmPressed</var> será verdadero, si es la w o la s se procede de la misma forma.
				Ai se levanta una tecla se hará el proceso contrario.
			</p>
<pre>
/**
 * Si se ha pulsado una tecla y es la arriba
 * o la abajo el booleano correspondiente se pone a true
 */
function keyDownHandler(e) {
    if(e.keyCode == 38) {
        upPressed = true;
    }
    else if(e.keyCode == 40) {
        downPressed = true;
    }
    if(e.keyCode == 87) {
        wPressed = true;
    }
    else if(e.keyCode == 83) {
        sPressed = true;
    }
}
/**
 * Si se ha levantado una tecla y es la arriba
 * o la abajo el booleano correspondiente se pone a false
 */
function keyUpHandler(e) {
    if(e.keyCode == 38) {
        upPressed = false;
    }
    else if(e.keyCode == 40) {
        downPressed = false;
    }
    if(e.keyCode == 87) {
        wPressed = false;
    }
    else if(e.keyCode == 83) {
        sPressed = false;
    }
}
</pre>
			<p>
				La función pintarBola se encarga de colocar la imagen de una bola en la posición en la que esta la bola teniendo en cuenta su radio.
				Las funciones pintarBarra1 y pintarBarra2 se encarga de pintar un rectángulo en la posición que está cada barra teniendo en cuenta su ancho y alto.
			</p>
<pre>
/**
 * Esta funcion se encarga de pintar la bola en su posicion
 */
function pintarBola(){
    //pintamos la bola
    ctx.beginPath();
    var bola=document.createElement("img");
    bola.src="../../img/pelota.png";
    ctx.drawImage(bola, x, y,radioBola*2,radioBola*2);
    ctx.closePath();
}
function pintarBarra1(){
    ctx.beginPath();
    ctx.rect(1, paddleY, paddleWidth, paddleHeight);
    ctx.fillStyle = "#FF95DD";
    ctx.fill();
    ctx.closePath();
}

function pintarBarra2(){
    ctx.beginPath();
    ctx.rect(canvas.width-10, paddleY2, paddleWidth, paddleHeight);
    ctx.fillStyle = "#DD9500";
    ctx.fill();
    ctx.closePath();
}
</pre>
		
			<p>
				Esta función pinta la puntuación para ello solo llaman al método fillText del contexto pasandole un texto, una posición x y una posición y.
			</p>
<pre>
function pintarPuntos(){
    ctx.beginPath();
    ctx.font = "16px Arial";
    ctx.fillStyle = "#0095DD";
    ctx.fillText(puntosj1+" - "+puntosj2, 8, 20);
    ctx.closePath();
}
</pre>
		  	  <p>
				  Esta función se encarga de resetear la posición de la bola y establecerle su velocidad de movimiento.
		      </p>
<pre>
function reset(){
    if(((puntosj1+puntosj2)%10==0)&&velocidad&lt;5){
        velocidad++;
    }
    x = canvas.width/2;
    y = canvas.height-30;
    dx = velocidad;
    dy = -velocidad;
    console.log("dx "+dx+" dy "+dy);
    
}
</pre>
              <p>
			  	Este es el método en el que se desarrollará todo el juego.
				Primero reseteamos el lienzo, despues llamamos a los métodos necesarios para pintar la bola, las barras.
				Pintamos los puntos.
				Actualizamos la posición de la bola, si coincide con uno de los bordes invertimos su dirección en ese eje con lo que se crea el efecto de rebote a excepción de los bordes laterales.
				En caso de los bordes inferior solo invertimos la dirección si la bola esta en una de las barras, en caso contrario se suamrá un punto al jugador contrario y se llamará al método reset..
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
    pintarBarra1();
    pintarBarra2();
    pintarPuntos();
    //actualizamos la posicion, si coincide con los bordes invertimos la direccion
    if(x + dx > canvas.width-radioBola ) {
        if(y>paddleY2&&y&lt;paddleY2+paddleHeight){
            dx=-dx;
        }else{
            puntosj1++;
            reset();
        }
        
    }
    if(x + dx &lt; radioBola){
        if(y>paddleY&&y&lt;paddleY+paddleHeight){
            dx=-dx;    
        }else{
            puntosj2++;
            reset();
        }
        
        
        //color=colores[Math.floor(Math.random() * colores.length-1)];
        //punto j2
        
    }
    if(y + dy > canvas.height-radioBola || y + dy &lt; radioBola) {
        dy = -dy;
        //color=colores[Math.floor(Math.random() * colores.length-1)];
    }
    
    x += dx;
    y += dy;
    if(wPressed){
        paddleY-=7;
    }else{
        if(sPressed){
            paddleY+=7;
        }
    }

    if(upPressed){
        paddleY2-=7;
    }else{
        if(downPressed){
            paddleY2+=7;
        }
    }

    requestAnimationFrame(draw);
}
draw();

</pre>
             
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
		<div class="row">
		<div class="col text-center">
			<i class="fas fa-code " style="font-size: 5em"></i>
			<p>Para desarrollarlo se ha seguido el siguiente tutorial: <a href="https://developer.mozilla.org/es/docs/Games/Workflows/Famoso_juego_2D_usando_JavaScript_puro" target="_blank">https://developer.mozilla.org/es/docs/Games/Workflows/Famoso_juego_2D_usando_JavaScript_puro</a> y se ha modificado el código, (el tutorial es sobre el arkanoid)</p>
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