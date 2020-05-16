<!DOCTYPE html>
<html>
<head>
	<title>Solupelís</title>
	<link rel="stylesheet" type="text/css" href="../../Recursos/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Solupelís</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../../index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Usuario/vistaUsuario.php">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Películas</a>
      </li>
    </ul>
  </div>
</nav>
</div>


	<div class="container">
		<div class="row">
			<h2>CRUD DE PELÍCULAS</h2>
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						<ul class="nav nav-tabs card-header-tabs">
							<li class="nav-item">
								<a class="nav-link active" href="#">Películas</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12">
								<span class="btn btn-primary" data-toggle="modal" data-target="#insertarModal">
									<i class="fas fa-plus-circle"></i> Nuevo registro
								</span>
							</div>
						</div>
						<hr>
						<!-- Aqui llega -->
						<div class="row">
							<div class="col-lg-12" id="tablaDatos"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<?php require_once "modalInsertar.php" ?>
	<?php require_once "modalActualizar.php" ?>

	<script src="../../Recursos/js/jquery-3.4.1.min.js"></script>
	<script src="../../Recursos/js/popper.min.js"></script>
	<script src="../../Recursos/js/bootstrap.min.js"></script>
	<script src="../../Recursos/js/sweetalert.min.js"></script>
	<script src="../../Controlador/JS_ajax_CRUD/crudPelicula.js"></script>

    <script type="text/javascript">
		mostrar();
	</script>
</body>
</html>