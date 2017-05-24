<!DOCTYPE html>
<html>
<head>
	<title>Registros</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Sweet Alert Styles -->
	<link href="../alertas/sweetalert.css" rel="stylesheet">
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

	<!--Panel Nuevo Evento -->
	<div class="panel panel-default">
		<div class="panel-heading"><h4 class="">Nuevo Evento</h4></div>
			<div class="panel-body">
				<form method="POST" action="../funciones/guardar_evento.php" id="frEventoNuevo" name="frEventoNuevo">
					<div class="form-group col-lg-6 col-lg-offset-3">
						<label>Nombre Del Evento:</label>
						<input type="text" class="form-control" placeholder="Nombre del nuevo evento" name="nombreEvento" id="nombreEvento" autofocus=""></input>
					</div>				
					<div class="form-group col-lg-6 col-lg-offset-3">
						<label>Descripción del Evento</label>
						<textarea class="form-control" placeholder="Breve descripción del evento" name="descripcionEvento" id="descripcionEvento"></textarea>
					</div>
					<div class="form-group col-lg-6 col-lg-offset-3">
						<label>Fecha del Evento</label>
							<input type="date" class="form-control" step="1" min="<?php echo date("Y-m-d");?>" max="2020-12-31" value="<?php echo date("Y-m-d");?>" name="fechaEvento" id="fechaEvento"></input>
					</div>
					<div class="form-group col-lg-6 col-lg-offset-3">
						<label>Lugar del Evento</label>
						<input type="text" name="lugarEvento" id="lugarEvento" class="form-control" placeholder="Referencia del lugar ej: (Siglo XXI, Campus García Gineres, Centro de Mérida)"></input>
					</div>
					<div class="form-group col-lg-6 col-lg-offset-3">
						<button class="btn btn-success" type="button" id="btnGuardar" name="btnGuardar"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Evento</button>
						<button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
					</div>
				</form>
				<div id="resultado" hidden="">
					
				</div>
			</div>
		<div class="panel-footer">*<label>No se emite ningun tipo de notificación o recordatorio de los eventos creados en esta plataforma</label></div>
	</div>
	<?php 
		include "../info/evento.php"
	 ?>
</body>
	<!-- /Panel Nuevo Evento -->
	<script src="../jquery/jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("#btnGuardar").click(function(){
					if ($("#nombreEvento").val() ==""){
						swal("Por favor ingrese el nombre del evento");
						return false;
					}
					else if($("#descripcionEvento").val() == ""){
						swal("Por favor ingrese la descripción del evento");
						return false;
					}
					else if($("#fechaEvento").val() == ""){
						swal("Por favor ingrese la fecha del evento");
						return false;
					}
					else if($("#lugarEvento").val() == ""){
						swal("Por favor ingrese el lugar del evento");
						return false;
					}
					else{
						var url = "../funciones/guardar_evento.php"
						 $.ajax({
						 	type:"POST",
						 	url: url,
						 	data: $("#frEventoNuevo").serialize(),
						 	success : function (data){
						 		debugger;
						 		$("#resultado").html(data);
						 		if($("#resultado1").val() == 1){
						 			swal("Guardado Correctamente", "Has click en botón para cerrar", "success")
						 		}
						 		else{
						 			swal("Cancelled", "Your imaginary file is safe :)", "error");
						 		}
						 	},
						 	error: function(requestObject, error, errorThrown){
						 		alert("Lo sentimos algo salío mal intente más tarde");
						 	}
						 })
						 return false;
					}

			});
		});
	</script>
	<!-- Sweet Alert Script -->
	<script src="../alertas/sweetalert.min.js"></script>
	
	<script src="../bootstrap/js/bootstrap.js"></script>
</html>