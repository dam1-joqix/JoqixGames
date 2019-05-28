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
var colores=["red","green","blue","white","yellow","black","aqua","cian"];
var paddleHeight = 75;
var paddleWidth = 10;
var paddleY = (canvas.height-paddleHeight)/2;
var paddleY2 = (canvas.height-paddleHeight)/2;
var upPressed=false, downPressed=false, wPressed=false, sPressed=false;
var puntosj1=0;
var puntosj2=0;
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
        if(y>paddleY2&&y<paddleY2+paddleHeight){
            dx=-dx;
        }else{
            puntosj1++;
            reset();
        }
        
    }
    if(x + dx < radioBola){
        if(y>paddleY&&y<paddleY+paddleHeight){
            dx=-dx;    
        }else{
            puntosj2++;
            reset();
        }
        
        
        //color=colores[Math.floor(Math.random() * colores.length-1)];
        //punto j2
        
    }
    if(y + dy > canvas.height-radioBola || y + dy < radioBola) {
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
//llamamos a draw cada 10 milisegundos
draw();

/**
 * Esta funcion se encarga de pintar la bola en su posicion
 */
function pintarBola(){
    //pintamos la bola
    ctx.beginPath();
    //ctx.arc(x, y, radioBola, 0, Math.PI*2);
    //ctx.fillStyle = color;
    var bola=document.createElement("img");
    bola.src="../../img/pelota.png";
    ctx.drawImage(bola, x, y,radioBola*2,radioBola*2);
    //ctx.fill();
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

function pintarPuntos(){
    ctx.beginPath();
    ctx.font = "16px Arial";
    ctx.fillStyle = "#0095DD";
    ctx.fillText(puntosj1+" - "+puntosj2, 8, 20);
    ctx.closePath();
}

function reset(){
    if(((puntosj1+puntosj2)%10==0)&&velocidad<5){
        velocidad++;
    }
    x = canvas.width/2;
    y = canvas.height-30;
    dx = velocidad;
    dy = -velocidad;
    console.log("dx "+dx+" dy "+dy);
    
}
function aleatorio(maximo,minimo){
    var num = Math.floor(Math.random() * ((maximo+1) - minimo) + minimo);
}

document.addEventListener("keydown", keyDownHandler, false);
document.addEventListener("keyup", keyUpHandler, false);

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


