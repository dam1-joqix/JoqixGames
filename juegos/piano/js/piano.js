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