 <?php 
/**
 * Comprueba si una opcion del menú debe estar activada
* @param string $opcion opcion del menú
* @return bool si esta activada
*/
function esOpcionMenuActiva(string $opcion):bool{
    $uri=$_SERVER["REQUEST_URI"];
    if (strpos($uri, $opcion) !== false) {
        return true;
    }else{
        return false;
    }
}

/**
 * Comprueba si una de las opciones de un conjunto recibida está en la url
 * @param string ...$array opciones
 * @return bool si hay alguna de ellas
 */
function existeOpcionMenuActiva(string...$array):bool{
    $uri=$_SERVER["REQUEST_URI"];
    foreach ($array as $opcion){
        if (strpos($uri, $opcion) !== false) {
            return true;
        }
    }
    return false;
}
session_start();
?>
 <!-- Fixed navbar -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/" ><img src="http://www.joqixgames.byethost7.com/img/joqixgamestext.png" alt="Joqix Games" height="auto" width="200em"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <? if(!existeOpcionMenuActiva("juegos","snake","arcanoid","piano","pong","codigo","contacto")){echo "active";} ?>">
          <a class="nav-link" href="/">Inicio </a>
        </li>
        <li class="nav-item <? if(esOpcionMenuActiva("juegos")){echo "active";} ?>">
          <a class="nav-link" href="/juegos">Juegos </a>
        </li>
   
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <? if(existeOpcionMenuActiva("snake","arcanoid","piano","pong","codigo")){echo "active";} ?>" data-toggle="dropdown" href="/juegos" role="button" aria-haspopup="true" aria-expanded="false">Lista de juegos</a>
          <div class="dropdown-menu bg-secondary">
            <a class="dropdown-item <? if(esOpcionMenuActiva("snake")){echo "active";} ?>" href="/juegos/snake">Snake</a>
            <a class="dropdown-item <? if(esOpcionMenuActiva("arcanoid")){echo "active";} ?>" href="/juegos/arcanoid">Arkanoid</a>
            <a class="dropdown-item <? if(esOpcionMenuActiva("piano")){echo "active";} ?>" href="/juegos/piano">Piano</a>
            <a class="dropdown-item <? if(esOpcionMenuActiva("pong")){echo "active";} ?>" href="/juegos/pong">Pong</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item <? if(esOpcionMenuActiva("codigo")){echo "active";} ?>" href="/codigo/">Código</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link <? if(esOpcionMenuActiva("contacto")){echo "active";} ?>" href="/contacto" >Contacto</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right ">
                    <?php if($_SESSION["usuario"]){
                        ?>
                        <li class="text-white"><i class="fas fa-user"></i> <?=$_SESSION["usuario"]?></li>
                        <li ><a href="/logout.php" class="text-white"><i class="fas fa-sign-out-alt"></i> Salir</a></li>
                        <?php
                        }else{
                            ?>
                            <li><a href="/login.php" class="text-white"><i
                            class="fas fa-user"></i> Iniciar</a></li>
                            <li><a href="/register.php" class="text-white"><i
                            class="fas fa-user-plus"></i> Registrarse</a></li>
                            <?php
                        }
                        ?>
                </ul>
    </div>
  </nav>