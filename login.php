<?php
	session_start();
	if(isset($_SESSION["usuario"])){
		header("Location: /codigo/");
	}
    $errores=[];
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $usuario=trim(htmlspecialchars($_POST["usuario"]));
        $pass=trim(htmlspecialchars($_POST["pass"]));
        $servername = "sql105.byethost.com";
        $username = "b7_23849641";
        $password = "872012promesa";
        $dbname = "b7_23849641_usuarios";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $conn->set_charset("utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, username, password FROM usuarios WHERE username='$usuario'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if($row["password"]==md5($pass)){
                $_SESSION["usuario"]=$usuario;
                $_COOKIE["nombre"]=$usuario;
                /* Redireccionar el navegador */
                header("Location: /codigo/");
            }else{
                $errores[]="Contraseña Incorrecta";
            }
        }else{
            $errores[]="Usuario Incorrecto";
        }
    }
?>


<html lang="es-ES">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Iniciar Sesion - Joqix Games</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" class="css">
	<link rel="stylesheet" href="css/forms.css" class="css">

</head>
<body class="text-center">
	<form class="form-signin" action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<img class="mb-4" src="img/joqixgames.png" alt="" width="72" height="72">
		<?php if($_SERVER['REQUEST_METHOD']=='POST'):?>
			<div class="alert alert-<?=empty($errores)?'info':'danger';?> alert-dismissibre" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">x</span>
				</button>
				<?php if (empty($errores)) : ?>
					<p> <?= $mensaje ?></p>
				<?php else : ?>
					<ul>
						<?php foreach ($errores as $error) : ?>
							<li><?= $error ?></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<p><a href="/"> volver</a></p>
		<h1 class="h3 mb-3 font-weight-normal">Inicia sesion</h1>
		<label for="inputEmail" class="sr-only">Nombre de usuario</label>
		<input type="text" id="inputEmail" name="usuario" class="form-control" placeholder="nombre usuario" required autofocus>
		<label for="inputPassword" class="sr-only">Contraseña</label>
		<input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Contraseña" required>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesion</button>
		<p class="mt-5 mb-3 text-muted">¿No tienes cuenta? <a href="register.php">registrate</a></p>
		<p class="mt-5 mb-3 text-muted">Web desarrollada por Joaquin Alonso Perianez</p>
	</form>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
