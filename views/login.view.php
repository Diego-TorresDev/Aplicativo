<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Alianza Maquila</title>
	<link rel="stylesheet" type="text/css" href="views/css/bootstrap.css">
</head>
<body>
	<div class="card" style="margin-left: 35%; margin-right: 30%; margin-top: 15%;">
		<h1 style="padding-left:20%;">Alianza Maquila</h1>

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
			<div  style="margin-left: 30%; margin-top: 5%">
				<input type="text" name="usuario" class="usuario" placeholder="Usuario">
			</div>

			<div style="margin-left: 30%;">
				<input type="password" name="password" class="password_btn" placeholder="Contraseña"><br><br>
				<button style="margin-left: 10%;" class="btn btn-primary" type="button" onclick="login.submit()">Iniciar Sesion</button>
			</div>

<!--Mensaje de error -->
			
			
		</form>

		<p style="margin-left: 33%;">
			¿Aun no tienes cuenta? <br>
		</p>
			<a style="margin-left: 43%;" href="registrate.php">Registrate</a>
		</p>
		<div class="errori">
<?php if(!empty($errores)): ?>
				<div>
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
		</div>
</div>
	</div>
</body>
</html>