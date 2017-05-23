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
	<div class="container animated fadeInRight">
		<img src="../img/oferta/relaciones.png" class="img-responsive">
	</div>
	<div class="container-fluid">
		<a href="vista_licenciatura.php">
			<button class="btn btn-info regresar">
				<span class="glyphicon glyphicon-arrow-left"></span> 
			</button>
		</a>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="formulario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	        <h3 class="modal-title text-center" id="exampleModalLongTitle">Hola</h3>
	        <p class="text-justify">
	        	Si deseas recibir más información sobre esta licenciatura o si quieres que la universidad del sur se ponga encontacto contigo solo ingresas los datos en el siguiente formulario. 
	        </p>
	        
	      </div>
	      <div class="modal-body">
	        <div class="formulario">
	        	<!-- INICIO DE FORMULARIO -->
	        	<form>
	        		<div class="form-group">
	        			<label>Nombre(s):</label>
	        			<input type="text" name="" class="form-control" placeholder="Ingresa tu nombre" required=""></input>
	        		</div>
	        		<div class="form-group">
	        			<label>Apellido(s)</label>
	        			<input type="text" name="" class="form-control" placeholder="Ingrese tu apellido" required="" />
	        		</div>
	        		<div class="form-group">
	        			<label>Correo Electronico</label>
	        			<input type="email" name="" class="form-control" placeholder="Ingresa tu correo (ejemplo@ejemplo.com)" required="">
	        		</div>
	        		<div class="form-group">
	        			<label>Número de telefono</label>
	        			<input type="text" name="" class="form-control" placeholder="Ingresa tu número celular a 10 digitos">
	        		</div>
	        		<div class="form-group">
	        			<input type="checkbox" name="" required=""> Acepto recibir información de la universidad del sur
	        		</div>
	        	
	        </div>
	        <div class="container-fluid">
	        	<label class="label label-default">
	        		*Nota
	        	</label>
	        	<p class="nota">
	        		Tus datos ingresado en está página son utilizados únicamente para la información relacionada con la universidad, no le brindamos tus datos personales a otras companias.
	        	</p>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Ventana</button>
	        <button type="submit" class="btn btn-primary">Aceptar</button>
	        </form>
	      </div>
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