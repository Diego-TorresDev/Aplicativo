<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contenido</title>
	<link rel="stylesheet" type="text/css" href="views/css/bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><strong>Alianza Maquila</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Funcionalidad</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Funcionalidad
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Funcionalidad</a>
          <a class="dropdown-item" href="#">Funcionalidad</a>
          <div class="dropdown-divider">Funcionalidad</div>
          <a class="dropdown-item" href="#">Funcionalidad</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><p>Hola de nuevo, <strong><?php echo $_SESSION['usuario']; ?> .</strong></p></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
     <a href = " cerrar.php " ><button type="button" class="btn btn-danger">Cerrar sesión</button></a >
    </form>
  </div>
</nav>
   <div class="card" style="width: 25%;margin-top: 3%; position: absolute;">
  <img src="views/imagenes/ajuste.png" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Ingreso de producción</h5>
    <p class="card-text">Descripción</p>
    <a href="#" class="btn btn-primary">Vamos</a>
  </div>
  </div>

   <div class="card" style="width: 25%;margin-top: 3%; position: absolute;  left: 30%; top: 11%;">
  <img src="views/imagenes/ajuste.png" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Seguimiento de producción</h5>
    <p class="card-text">Descripción</p>
    <a href="#" class="btn btn-primary">Vamos</a>
  </div>
  </div>

  <div class="card" style="width: 25%;margin-top: 3%; position: relative;  left: 60%; top: 3%;">
  <img src="views/imagenes/ajuste.png" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Tableros de calificación</h5>
    <p class="card-text">Descripción</p>
    <a href="#" class="btn btn-primary">Vamos</a>
  </div>
  </div>


</body>
</html>