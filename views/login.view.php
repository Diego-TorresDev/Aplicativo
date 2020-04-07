<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Iniciar Sesion</title>
	<link rel="stylesheet" type="text/css" href="views/css/bootstrap.css">
</head>
<body>
	<div class="card" style="margin-left: 30%; margin-right: 30%; margin-top: 15%;">
		<div class="padding" style="padding-left: 35%;">
		<h1 class="titulo">Iniciar Sesion</h1>

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
			<div>
				<input type="text" name="usuario" class="usuario" placeholder="Usuario">
			</div>

			<div>
				<input type="password" name="password" class="password_btn" placeholder="Contraseña"><br><br>
				<button class="btn btn-primary" type="button" onclick="login.submit()">Iniciar Sesion</button>
			</div>

<!--Mensaje de error -->
			<?php if(!empty($errores)): ?>
				<div>
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
			
		</form>

		<p>
			¿Aun no tienes cuenta? <br>
			<a href="registrate.php">Registrate</a>
		</p>
	</div>
</div>
</body>
</html>