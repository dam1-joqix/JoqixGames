
<!doctype html>
<html lang="es" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Código Snake - Joqix-Games</title>
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
				Se trata de el típico juego de Snake al que todos hemos jugado.
			</p>
			<p>
				En este juego controlamos una serpiente con las flechas de dirección: <kbd>&uarr;</kbd>, <kbd>&darr;</kbd>, <kbd>&larr;</kbd>, <kbd>&rarr;</kbd>
			</p>
			<p>
				El objetivo es atrapar el cuadrado rojo.
			</p>
			<p>
				Cuando lo atrapemos nuestra serpiente será un cuadrado más grande.
			</p>
			<p>
				El juego finaliza cuando la serpiente se choca con una pared o consigo misma.
			</p>
			<p>
				En este juego podemos aprender como funciona el canvas, clases, herencia e intervalos.
			</p>
          
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <p>Para el desarrollo de este juego se ha usado código html y javascript, este es código que necesitaremos</p>
		  <h2>Código HTML</h2>
          <code>&lt;canvas id="canvas" width="600" height="600" >&lt;/canvas></code>
		  <p>En nuestro body debemos controlar el evento de pulsar una tecla podemos hacerlo añadiendole al body la siguiente etiqueta</p>
		  <code>&lt;body onkeydown="control(event);" ></code>
		  <p>Al final del body pondremos los scripts si los incluimos en el mismo documento o la llamada al script, en este caso lo tendriamos dentro de una carpeta llamada js y la llamada sería algo así</p>
		  <code>&lt;script src="js/snake.js">&lt;/script></code>
		  <h2>Código Javascript</h2>
          <p>Debemos declarar una serie de variables globales, las cuales usaremos para controlar la velocidad (<var>velocidad</var>) y el tamaño (<var>tamano</var>) de los sprites, tambien se han variables para la puntuación(<var>puntos</var> y <var>max</var>).s</p>
<pre>
//Variables globales
var velocidad = 80;
var tamano = 20;
var puntos=0;
var max=0;
</pre>
              <p>
				  Necesitaremos distintas clases, a continuación creamos la clase objeto. 
				  De esta clase heredan el resto de clases y se encarga de controlar las colisiones mediante el método choque.
                  El método choque comparará si el objeto actual colisiona con otro recibido por parametros y para ello compara sus posiciones.
				  La clase guardará como atributo el tamaño para los objetos que lo traerá de la variable global <var>tamano</var>
              </p>
              <pre>
class objeto {
  constructor(){
    this.tamano = tamano;
  }
  choque(obj){
    var difx = Math.abs(this.x - obj.x);
    var dify = Math.abs(this.y - obj.y);
    if(difx >= 0 && difx &lt; tamano && dify >= 0 && dify &lt; tamano){
      return true;
    } else {
      return false;
    }
  }
}                 
</pre>
              <p>
                La clase cola hereda de la clase objeto. Recibe por parametros su posicion x e y y guarda una referencia al elemento siguiente. 
				Posee un método que le permite dibujarse en su posición y llama al método de dibujar del siguiente de la cola si es que lo hay. 
				Cuando se mueve usa el metodo setxy: si tiene un elemento siguiente le asigna a este sus posiciones x e y y a él mismo se asigna las nuevas posciones que recibe por parámetros.
                Con el método meter se añade un elemento nuevo a la cola.
				El método ver siguiente devuelve el siguiente elemento de la cola.
              </p>
              <pre>
class Cola extends objeto {
constructor(x,y){
    super();
    this.x = x;
    this.y = y;
    this.siguiente = null;
  }
  dibujar(ctx){
    if(this.siguiente != null){
      this.siguiente.dibujar(ctx);
    }
    ctx.fillStyle = "#0000FF";
    ctx.fillRect(this.x, this.y, this.tamano, this.tamano);
  }
  setxy(x,y){
    if(this.siguiente != null){
      this.siguiente.setxy(this.x, this.y);
    }
    this.x = x;
    this.y = y;
  }
  meter(){
    if(this.siguiente == null){
      this.siguiente = new Cola(this.x, this.y);
    } else {
      this.siguiente.meter();
    }
  }
  verSiguiente(){
    return this.siguiente;
  }
}
</pre>
              <p>
			  	La clase comida también hereda de objeto.
				Cuando se inicia se generan mediante el método generar sus posiciones x e y aleatoriamente.
				Posee el método necesario para ser dibujada y un método para colocarse en una posición aleatoria haciendo rederencia de nuevo al método generar.
			  </p>
              <pre>
class Comida extends objeto {
  constructor(){
    super();
    this.x = this.generar();
    this.y = this.generar();
  }
  generar(){
    var num = (Math.floor(Math.random() * 59))*10;
    return num;
  }
  colocar(){
    this.x = this.generar();
    this.y = this.generar();
  }
  dibujar(ctx){
    ctx.fillStyle = "#FF0000";
    ctx.fillRect(this.x, this.y, this.tamano, this.tamano);
  }
}
</pre>
              <p>
			  	Creamos los objetos que usaremos durante el juego.
				La <var>cabeza</var>, que será la primera posición de la cola y la <var>comida</var>, que será el elemento que debemos comer.
			  </p>
<pre>
//Objetos del juego
var cabeza = new Cola(20,20);
var comida = new Comida();
</pre>
			<p>
				Creamos algunas variables necesarias más.
				<var>xdir</var> y <var>ydir</var> son las posiciones x e y en las que se debe mover la cabeza respectivamente.
				Por defecto estas variables estarán a 0.
			</p>
<pre>
var ejex = true;
var ejey = true;
var xdir = 0;
var ydir = 0;
</pre>
          <p>Creamos las funciones necesarias</p>
		  <p>
		  	La función movimiento que llamará al método setxy de <var>cabeza</var> pasándole las nuevas posiciones.
			Las nuevas posiciones serán las posiciones actual más la dirección x e y en la que se mueva la cabeza.
		  </p>
<pre>
function movimiento(){
  var nx = cabeza.x+xdir;
  var ny = cabeza.y+ydir;
  cabeza.setxy(nx,ny);
}
</pre>
		<p>
			Esta función será la encargada de controlar si pulsamos una tecla.
			Cuando pulsemos una tecla lo primero que haremos será comprobar si es una de las teclas utilizadas en nuestro juego.
			Para ello obtenemos el keycode y lo guardamos en la variable <var>cod</var>.
			Las variables <var>ejex</var> y <var>ejey</var> controlan si nos podemos mover en ese eje.
			La serpiente no se podrá mover en diagonal, es decir, si nos estamos moviendo una posicion en el eje x no nos podemos mover una posicion en el eje y.
			Vamos a centrarnos en lo que ocurre si pulsamos la flecha arriba.
			Se comprobaría si la variable <var>ejex es true</var>, es decir si se esta moviendo en el eje x o aun no se ha movido. Si es así pasaremos a comprobar el código de la tecla. La flecha arriba es el código 38. <var>ydir</var> y será menos <var>tamano</var> y <var>xdir</var> será 0 (recordemos que solo se puede mover en un eje a la vez). <var>ejex</var> será falso puesto que no nos estamos moviendo en las x y <var>ejey</var> será verdadero.
			Si ahora pulsasemos arriba o abajo no ocurriria nada ya que nos estamos moviendo en el eje y y no se permite retroceder. Ahora solo nos podríamos mover en el lateral y el proceso sería el mismo pero a la inversa.
		</p>
<pre>
function control(event){
  var cod = event.keyCode;
  if(ejex){
    if(cod == 38){
      ydir = -tamano;
      xdir = 0;
      ejex = false;
      ejey = true;
    }
    if(cod == 40){
      ydir = tamano;
      xdir = 0;
      ejex = false;
      ejey = true;
    }
  }
  if(ejey){
    if(cod == 37){
      ydir = 0;
      xdir = -tamano;
      ejey = false;
      ejex = true;
    }
    if(cod == 39){
      ydir = 0;
      xdir = tamano;
      ejey = false;
      ejex = true;
    }
  }
}
</pre>
		<p>
			Esta función se llama al finalizar una partida.
			Reiniciamos la cola y la comida así como las direcciones.
			Establecemos los puntos a 0 pero antes comprobamos si hemos superado los puntos máximos y en ese caso los sobreescribimos.
			Al final del método mostramos con un alert al usario un mensaje diciendo que ha perdido.
			En el ejemplo de esta web yo he sustituido el alert por un modal de bootstrap cosa que podrás hacer si usas este framework.
		</p>
<pre>
function findeJuego(){
  xdir = 0;
  ydir = 0;
  ejex = true;
  ejey = true;
  cabeza = new Cola(20,20);
    comida = new Comida();
    if(puntos>max){
        max=puntos;
    }
    puntos=0;
    alert("Perdiste");
}
</pre>
		<p>
			La función choquepared detecta si nuestra serpiente ha chocado con una de las paredes y en caso afirmativo llama a findejuego.
		</p>
<pre>
function choquepared(){
  if(cabeza.x &lt; 0 || cabeza.x > 590 || cabeza.y &lt; 0 || cabeza.y > 590){
    findeJuego();
  }
}
</pre>
		<p>
			El método choquecuerpo guarda en una variable temporal el segindo elemento de la cola y comprueba si la cabeza ha chocado con el.
			Despues accede al siguiente elemento y hace lo mismo hasta que detecte la colisión o hasta que no encuentre más elementos en la cola.
			Si no detecta más elementos la ejecución ha terminado.
			Si detecta una colisión llama a findejuego.
		</p>
<pre>
function choquecuerpo(){
  var temp = null;
  try{
    temp = cabeza.verSiguiente().verSiguiente();
  }catch(err){
    temp = null;
  }
  while(temp != null){
    if(cabeza.choque(temp)){
      //fin de juego
      findeJuego();
    } else {
      temp = temp.verSiguiente();
    }
  }
}
</pre>
		<p>
			Esta es la función que se encarga de dibujar todo el contenido del juego.
			Para ello guarda una referencia al canvas en la variable <var>canvas</var>.
			En la variable <var>ctx</var> guarda unna referencia a el contexto de <var>canvas</var> con la función getContext, en este caso el contexto es 2d.
			Despues mediante clearRect limpia el canvas, es decir, borra todo lo que hay en el.
			Despues llama a los metodos dibujar de <var>cabeza</var> y <var>comida</var>, recordemos que la cabeza se encarga de llamar a los métodos dibujar de los elementos siguientes de la cola.
		</p>
<pre>
function dibujar(){
  var canvas = document.getElementById("canvas");
  var ctx = canvas.getContext("2d");
  ctx.clearRect(0,0, canvas.width, canvas.height);
  //aquí abajo va todo el dibujo
  cabeza.dibujar(ctx);
  comida.dibujar(ctx);
}
</pre>
		<p>
			Esta es la función prinicipal, la llamamos main para recordar otros lenguajes de programación que empiezan por ella.
			Desde esta función se controla toda la lógica del juego. 
			Primero llamamos a choquecuerpo y choquepared, métodos que se encargan de controlar las colisiones del juego.
			Despues llamamos al método dibujar y al método movimiento.
			Una vez hecho comprobamos la colisión de la cabeza con la comida y en caso de haber chocado: sumamos un punto, colocamos una nueva comida, colocamos un nuevo hijo en la cabeza y pintamos la puntuación.
		</p>
<pre>
function main(){
  choquecuerpo();
  choquepared();
  dibujar();
  movimiento();
  if(cabeza.choque(comida)){
    puntos++;
    comida.colocar();
    cabeza.meter();
    document.querySelector('#puntos').innerHTML= puntos+' puntos máximo: '+max;
  }
}
</pre>
		<p>
			Mediante el método setinterval decimos que se llame a una función cada x tiempo, en este caso llamaremos al método main cada <var>velocidad</var> milisegundos, es decir para cambiar la velocidad del juego bastaría con cambiar el valor de <var>velocidad</var>.
		</p>
<pre>
setInterval("main()", velocidad);
</pre>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
		<div class="row">
		<div class="col text-center">
			<i class="fab fa-youtube text-danger" style="font-size: 5em"></i>
			<p>Para desarrollarlo se ha seguido el siguiente tutorial: <a href="https://www.youtube.com/watch?v=xBVYyto4U5Y&t=55s" target="_blank">https://www.youtube.com/watch?v=xBVYyto4U5Y&t=55s</a></p>
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