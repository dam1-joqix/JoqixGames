<?php
	session_start();
	if(isset($_SESSION["usuario"])){
		header("Location: /codigo/");
	}
    $errores=[];
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $usuario=trim(htmlspecialchars($_POST["usuario"]));
        $pass=trim(htmlspecialchars($_POST["pass"]));
		$pass2=trim(htmlspecialchars($_POST["repass"]));
		$email=trim(htmlspecialchars($_POST["email"]));
        $servername = "sql105.byethost.com";
        $username = "b7_23849641";
        $password = "872012promesa";
        $dbname = "b7_23849641_usuarios";
        // Crear connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $conn->set_charset("utf8");
        // Comprobar conexión
        if ($conn->connect_error) {
            die("Error al conectar a la base de datos: " . $conn->connect_error);
        }
        $sql = "SELECT id, username FROM usuarios WHERE username='$usuario'";
        $result = $conn->query($sql);
        if ($result->num_rows == 0) {
            $sql2 = "SELECT id, username, email FROM usuarios WHERE email='$email'";
        	$result2 = $conn->query($sql2);
			if($result2->num_rows==0){
				if($pass==$pass2){
					$passcifrada=md5($pass);
					$insert="INSERT INTO usuarios(username, password, email) VALUES ('$usuario','$passcifrada','$email'); ";
					if($conn->query($insert)){
						$mensaje="Usuario $usuario registrado correctamente ya puedes iniciar sesión";
					}else{
						$errores["Error al desconocido al crear el usuario"];
					}
				}else{
					$errores[]="Las contraseñas no coinciden";
				}
			}else{
				$errores[]="Ya existe una cuenta con ese email";	
			}
        }else{
            $errores[]="Ya existe un usuario con el mismo nombre";
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
					<p> <?=$mensaje ?></p>
				<?php else : ?>
					<ul>
						<?php foreach ($errores as $error) : ?>
							<li><?= $error ?></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<p>
			<a href="/"> volver</a>
		</p>
		<h1 class="h3 mb-3 font-weight-normal">Registrate</h1>
		<label for="inputUsuario" class="sr-only">Nombre de usuario</label>
		<input type="text" id="inputUsuario" name="usuario" class="form-control" placeholder="nombre usuario" required autofocus>
		<label for="inputEmail" class="sr-only">Email</label>
		<input type="email" id="inputEmail" name="email" class="form-control" placeholder="email" required >
		<label for="inputPassword" class="sr-only">Contraseña</label>
		<input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Contraseña" required>
		<label for="inputRePassword" class="sr-only">Contraseña</label>
		<input type="password" id="inputRePassword" name="repass" class="form-control" placeholder="Repite la contraseña" required>
		<label for="cbox2"><input type="checkbox" id="privacidad" value="privacidad" name="privacidad" required> He leído y acepto la <a href="/privacidad.php">política de privacidad</a>.</label>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
		<p class="mt-5 mb-3 text-muted">¿Ya tienes cuenta? <a href="/login.php">inicia sesión</a></p>
		<p class="mt-5 mb-3 text-muted">Web desarrollada por Joaquin Alonso Perianez</p>
	</form>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>