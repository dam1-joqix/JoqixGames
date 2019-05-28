<!doctype html>
<html lang="es" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Código Piano - Joqix-Games</title>
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
				Se trata de un piano en el que podemos tocar melodias
			</p>
			<p>
				Podremos tocar usando los controles en pantalla o con las teclas : <kbd>a</kbd>, <kbd>s</kbd>, <kbd>d</kbd>, <kbd>f</kbd>, <kbd>g</kbd>,<kbd>h</kbd>, <kbd>j</kbd>, <kbd>k</kbd> y <kbd>l</kbd>.
			</p>
			<p>
				Cada uno de los botones corresponde a una nota desde do hasta re menor, además tendremos tres botnoes de ritmos.
			</p>
			<p>
				En este juego podemos aprender los eventos de javascript y la reproducción de sonifos
			</p>
          
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <p>Para el desarrollo de este juego se ha usado código html, javascript y css, este es código que necesitaremos</p>
		  <h2>Código HTML</h2>
			<p>En este caso no usaremos la etiqueta canvas si no que crearemos un grid en html, en nuestro html tendremos varios divs.</p>
			<code>&lt;div id="canvas" class="border" style="width:600px;"><br>
                &nbsp;&nbsp;&lt;div id="do" class="nota align-botton text-center"><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div>a&lt;/div><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div>do&lt;/div><br>
                &nbsp;&nbsp;&lt;/div><br>
                &nbsp;&nbsp;&lt;div id="re" class="nota text-center"><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div>s&lt;/div><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div>re&lt;/div><br>
                &nbsp;&nbsp;&lt;/div><br>
               &nbsp;&nbsp;&lt;div id="mi" class="nota text-center"><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div>d&lt;/div><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div>mi&lt;/div><br>
                &nbsp;&nbsp;&lt;/div><br>
                &nbsp;&nbsp;&lt;div id="fa" class="nota text-center"><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div>f&lt;/div><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div>fa&lt;/div><br>
                &nbsp;&nbsp;&lt;/div><br>
                &nbsp;&nbsp;&lt;div id="sol" class="nota text-center"><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div>g&lt;/div><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div>sol&lt;/div><br>
                &nbsp;&nbsp;&lt;/div><br>
                &nbsp;&nbsp;&lt;div id="la" class="nota text-center"><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div>h&lt;/div><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div>la&lt;/div><br>
                &nbsp;&nbsp;&lt;/div><br>
                &nbsp;&nbsp;&lt;div id="si" class="nota text-center"><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div>j&lt;/div><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div>si&lt;/div><br>
                &nbsp;&nbsp;&lt;/div><br>
               &nbsp;&nbsp;&lt;div id="do2" class="nota text-center"><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div>k&lt;/div><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div>do&lt;/div><br>
                &nbsp;&nbsp;&lt;/div><br>
                &nbsp;&nbsp;&lt;div id="re2" class="nota text-center"><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div>l&lt;/div><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div>re&lt;/div><br>
                &nbsp;&nbsp;&lt;/div><br>
                &nbsp;&nbsp;&lt;div id="ritmo1" class="nota"><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;Ritmo 1<br>
                &nbsp;&nbsp;&lt;/div><br>
                &nbsp;&nbsp;&lt;div id="ritmo2" class="nota"><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;Ritmo 2<br>
                  &nbsp;&nbsp;&lt;/div><br>
                  &nbsp;&nbsp;&lt;div id="ritmo3" class="nota"><br>
                      &nbsp;&nbsp;&nbsp;&nbsp;Ritmo 3<br>
                    &nbsp;&nbsp;&lt;/div><br>
                &lt;/div></code>
		  <p>Al final del body pondremos los scripts si los incluimos en el mismo documento o la llamada al script, en este caso lo tendriamos dentro de una carpeta llamada js y la llamada sería algo así</p>
		  <code>&lt;script src="js/piano.js">&lt;/script></code>
			<h2>Código css</h2>
			<p>
				Este es el código css necesario
			</p>
<pre>
#canvas{
	display: grid;
	grid-template-areas: "do re mi fa sol la si do2 re2 ritmo1"
						 "do re mi fa sol la si do2 re2 ritmo2"
						 "do re mi fa sol la si do2 re2 ritmo3";
}
#do{
  grid-area: do;
}
#re{
  grid-area: re;
}
#mi{
  grid-area: mi;
}
#fa{
  grid-area: fa;
}
#sol{
  grid-area: sol;
}
#la{
  grid-area: la;
}
#si{
  grid-area: si;
}
#do2{
  grid-area: do2;
}
#re2{
  grid-area: re2;
}
#ritmo1{
  grid-area: ritmo1;
}
#ritmo2{
  grid-area: ritmo2;
}
#ritmo3{
  grid-area: ritmo3;
}
.nota{
	border: 4px outset #cccccc;
}
.nota:hover{
  background-color: lightgray;
}
.nota:active{
  border: 4px inset #ccc;
}
</pre>
		  <h2>Código Javascript</h2>
          	<p>
				Primero obtenemos la referencia a los divs para posteriormente capturar las pulsaciones sobre ellas.
			</p>
<pre>
var tDo, tRe, tMi, tFa, tSol, tLa, tSi, tDom, tRem, tR1, tR2, tR3;
tDo=document.querySelector("#do");
tRe=document.querySelector("#re");
tMi=document.querySelector("#mi");
tFa=document.querySelector("#fa");
tSol=document.querySelector("#sol");
tLa=document.querySelector("#la");
tSi=document.querySelector("#si");
tDom=document.querySelector("#do2");
tRem=document.querySelector("#re2");
tR1=document.querySelector("#ritmo1");
tR2=document.querySelector("#ritmo2");
tR3=document.querySelector("#ritmo3");
</pre></pre>
              <p>
				  Ahora capturamos el evento que se lanza al pulsar una tecla
              </p>
              <pre>
document.addEventListener("keydown", keyDownHandler);
</pre>
			<p>
				Y los eventos que se llaman al hacer click en uno de los divs que llamarán a la función sonido que describiremos más adelante.
			</p>
<pre>
tDo.addEventListener("click",function (){
	sonido("do");
});
tRe.addEventListener("click",function (){
	sonido("re");
});
tMi.addEventListener("click",function (){
	sonido("mi");
});
tFa.addEventListener("click",function (){
	sonido("fa");
});
tSol.addEventListener("click",function (){
	sonido("sol");
});
tLa.addEventListener("click",function (){
	sonido("la");
});
tSi.addEventListener("click",function (){
	sonido("si");
});
tDom.addEventListener("click",function (){
	sonido("domas");
});
tRem.addEventListener("click",function (){
	sonido("remas");
});
tR1.addEventListener("click",function (){
	sonido("ritmo1");
});
tR2.addEventListener("click",function (){
	sonido("ritmo2");
});
tR3.addEventListener("click",function (){
	sonido("ritmo3");
});
</pre>
			<p>
				Ahora vamos a crear la función a la que llamará el evento onclick que llama a sonido, función que describiremos más adelante.
				Lo primero que haremos será comprobar la tecla pulsada y posteriormente llamaremos a sonido con el parámetro adecuado para dicha nota.
			</p>
<pre>
function keyDownHandler(e) {
    if(e.keyCode == 65) {
        //a
        sonido("do");
    }
    else if(e.keyCode == 83) {
        //s
        sonido("re");
    }
    else if(e.keyCode==68){
        //d
        sonido("mi");
    }
    else if(e.keyCode==70){
        //f
        sonido("fa");
    }
    else if(e.keyCode==71){
        //g
        sonido("sol");
    }
    else if(e.keyCode==72){
        //h
        sonido("la");
    }
    else if(e.keyCode==74){
        //j
        sonido("si");
    }
    else if(e.keyCode==75){
        //k
        sonido("domas");
    }
    else if(e.keyCode==76){
        //l
        sonido("remas");
    }
}
</pre>
		<p>
			Por último la función sonido que crea un audo cuya fuente será el archivo adecuado que buscará gracias al parámetro recibido y lo reproducirá.
		</p>
<pre>
function sonido(sonido){
    var nota = new Audio();
    nota.src="audio/"+sonido+".wav";
    nota.play();
}
</pre>
			<p>
				Todo este código se realizará una vez cargado el <acronym title="Document Object Model">DOM</acronym> (Document Object Model) para asegurarnos de que ya existen los divs al crear los eventos. El código final quedaría así 
			</p>
<pre>
document.addEventListener("DOMContentLoaded", function(event) {
    document.addEventListener("keydown", keyDownHandler);
   var tDo, tRe, tMi, tFa, tSol, tLa, tSi, tDom, tRem, tR1, tR2, tR3;
    tDo=document.querySelector("#do");
    tRe=document.querySelector("#re");
    tMi=document.querySelector("#mi");
    tFa=document.querySelector("#fa");
    tSol=document.querySelector("#sol");
    tLa=document.querySelector("#la");
    tSi=document.querySelector("#si");
    tDom=document.querySelector("#do2");
    tRem=document.querySelector("#re2");
    tR1=document.querySelector("#ritmo1");
    tR2=document.querySelector("#ritmo2");
    tR3=document.querySelector("#ritmo3");
    tDo.addEventListener("click",function (){
        sonido("do");
    });
    tRe.addEventListener("click",function (){
        sonido("re");
    });
    tMi.addEventListener("click",function (){
        sonido("mi");
    });
    tFa.addEventListener("click",function (){
        sonido("fa");
    });
    tSol.addEventListener("click",function (){
        sonido("sol");
    });
    tLa.addEventListener("click",function (){
        sonido("la");
    });
    tSi.addEventListener("click",function (){
        sonido("si");
    });
    tDom.addEventListener("click",function (){
        sonido("domas");
    });
    tRem.addEventListener("click",function (){
        sonido("remas");
    });
    tR1.addEventListener("click",function (){
        sonido("ritmo1");
    });
    tR2.addEventListener("click",function (){
        sonido("ritmo2");
    });
    tR3.addEventListener("click",function (){
        sonido("ritmo3");
    });
});

function keyDownHandler(e) {
    
    if(e.keyCode == 65) {
        //a
        
        sonido("do");
    }
    else if(e.keyCode == 83) {
        //S
        
        sonido("re");
    }
    else if(e.keyCode==68){
        //D
        
        sonido("mi");
    }
    else if(e.keyCode==70){
        //f
        
        sonido("fa");
    }
    else if(e.keyCode==71){
        //g
        sonido("sol");
        
    }
    else if(e.keyCode==72){
        //h
        sonido("la");
    }
    else if(e.keyCode==74){
        //j
        sonido("si");
    }
    else if(e.keyCode==75){
        //k
        sonido("domas");
    }
    else if(e.keyCode==76){
        //l
        sonido("remas");
    }
}
function sonido(sonido){
    var nota = new Audio();
    nota.src="audio/"+sonido+".wav";
    nota.play();
}
</pre>
             
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
		<div class="row">
		<div class="col text-center">
			<i class="fas fa-code " style="font-size: 5em"></i>
			<p>Para desarrollarlo se ha seguido consultado: <a href="https://www.developphp.com/lib/JavaScript/Audio" target="_blank">https://www.developphp.com/lib/JavaScript/Audio</a></p>
		</div>
		<div class="col text-center">
			<i class="fab fa-github" style="font-size: 5em"></i>
			<p>Puedes ver el código aquí: <a href="https://github.com/dam1-joqix/JoqixGames/tree/master/juegos/piano" target="_blank">https://github.com/dam1-joqix/JoqixGames/tree/master/juegos/piano</a></p>
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