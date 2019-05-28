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
for(c=0; c<brickColumnCount; c++) {
    bricks[c] = [];
    for(r=0; r<brickRowCount; r++) {
        bricks[c][r] = { x: 0, y: 0, status: 1 };
    }
}
//guardamos la puntuacion
var score=0;
var lives=3;
//eventos para controlar cuando se pulsa una tecla y raton

document.addEventListener("keydown", keyDownHandler, false);
document.addEventListener("keyup", keyUpHandler, false);
document.addEventListener("mousemove", mouseMoveHandler, false);

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
    if(x + dx > canvas.width-radioBola || x + dx < radioBola) {
        dx = -dx;
    }
    if( y + dy < radioBola) {
        dy = -dy;
    }else{
        if(y+dy>canvas.height-radioBola){
            if(x>paddleX&&x<paddleX+paddleWidth){
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
                //alert("Game Over ");
                //document.location.reload();
            }
        }
    }
    //comprobamos si hay alguna de las teclas pulsadas y movemos la barra
    if(rightPressed && paddleX < canvas.width-paddleWidth) {
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

//setInterval(draw,10);

/**
 * Esta funcion se encarga de pintar la bola en su posicion
 */
function pintarBola(){
    //pintamos la bola
    ctx.beginPath();
    ctx.arc(x, y, radioBola, 0, Math.PI*2);
    var bola=document.createElement("img");
    bola.src="../../img/pelota.png";
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
/**
 * funcion para pintar los ladrillos
 */
function drawBricks() {
    for(c=0; c<brickColumnCount; c++) {
        for(r=0; r<brickRowCount; r++) {
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

function collisionDetection() {
    for(c=0; c<brickColumnCount; c++) {
        for(r=0; r<brickRowCount; r++) {
            var b = bricks[c][r];
            if(b.status == 1) {
                if(x > b.x && x < b.x+brickWidth && y > b.y && y < b.y+brickHeight) {
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
/**
 * funcion para pintar la puntuacion
 */
function drawScore() {
    ctx.font = "16px Arial";
    ctx.fillStyle = "#0095DD";
    ctx.fillText("Puntuación: "+score, 8, 20);
}

function mouseMoveHandler(e) {
    var relativeX = e.clientX - canvas.offsetLeft;
    if(relativeX > 0 && relativeX < canvas.width) {
        paddleX = relativeX - paddleWidth/2;
    }
}
/**
 * pinta las vidas
 */
function drawLives() {
    ctx.font = "16px Arial";
    ctx.fillStyle = "#0095DD";
    ctx.fillText("Vidas: "+lives, canvas.width-65, 20);
}