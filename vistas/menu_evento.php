<!DOCTYPE html>
<html>
<head>
	<title>Registros</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:100,600">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
	<header>
		<?php include '../dis/encabezado.php'; ?>
	</header>
	<!-- Contenido Principal -->
	<div class="container-fluid">
		<div class="col-lg-6">
			<div class="caja">
				<a href="evento_nuevo.php">Crear Evento</a>
			</div>
		</div>		
		<div class="col-lg-6">
			<div class="caja">
				<a href="registrar_alumno.php">Registrar Interesados</a>
			</div>
		</div>
	</div>
</body>
	<script src="../jquery/jquery.js"></script>
	<script>
		$(document).ready(function(){
			//$("#formulario").modal("show");
		});
	</script>
	
	<script src="../bootstrap/js/bootstrap.js"></script>
</html>