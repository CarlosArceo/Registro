<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>
<style type="text/css">
p.exito {
    font-family: -webkit-body;
    font-size: 20px;
    font-style: normal;
}
</style>
<body>
	<div class="container">
		<h3 class="text-center">Formulario de nuevo evento Back End</h3>
		<form id="frEventoNuevo" action="../index.php" method="POST" name="fr">
			<div class="form-group">
				<label>Nombre del Evento</label>
				<input type="text" name="nombreEvento" class="form-control" placeholder="Escriba el nombre del evento" id="nombreEvento">
			</div>
			<div class="form-group">
				<label>Descripción del Evento</label>
				<textarea class="form-control"  name="descripcionEvento" placeholder="Escriba la descripción del evento"  id="descripcionEvento"></textarea>
			</div>
			<div class="form-group">
				<label>Fecha del evento</label>
				<input type="date" name="fechaEvento" class="form-control" step="1" min="<?php echo date("Y-m-d");?>" max="2020-12-31" value="<?php echo date("Y-m-d");?>" id="fechaEvento">
			</div>
			<div class="form-group">
				<label>Lugar del evento</label>
				<input type="text" name="lugarEvento" class="form-control" placeholder="Escriba el lugar del evento ej:(Siglo XXI, Cento de Mérida, Campus García Gineres)" id="lugarEvento"></input>
			</div>
			<div class="form-group">
				<button type="button" name="btnGuardar"  id="btnGuardar" class="btn btn-success">Guardar</button>
				<button type="reset" name="btnReset" class="btn btn-danger">Cancelar</button>
			</div>
		</form>
	</div>
	<div class="container alert alert-success text-center" id="success" hidden="">
		<p class="exito">Éxito! Evento creado con éxito</p>
	</div>
	<div class="container alert alert-warning text-center" id="warning" hidden=""
		<p class="exito">Advertencia! Exite un evento con ese nombre</p>
	</div>
	<div class="container alert alert-danger text-center" id="danger" hidden="">
		<p class="exito">Peligro! Evento no creado correctamente valide la información</p>
	</div>
</body>
	<!-- Jquery -->
	<script type="text/javascript" src="../jquery.js"></script>

	<script type="text/javascript">
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
						swal({ 
						 title: "¿Seguro que deseas continuar?", 
						 text: "No podrás deshacer este paso...", 
						 type: "warning", 
						 showCancelButton: true,
						 cancelButtonText: "Mmm... mejor no", 
						 confirmButtonColor: "#DD6B55", 
						 confirmButtonText: "¡Adelante!", 
						 closeOnConfirm: false }, 

						 function(){ 
						 swal("¡Hecho!", 
						 "mensaje de confirmación.", 
						 "success"); 
						 setTimeout(function(){ document.fr.submit() }, 1000);
						 });
					}

			});

		}); 
	</script>
	
	<!-- Sweet Alert Script -->
	<script src="../alertas/sweetalert.min.js"></script>
	<!-- Sweet Alert Styles -->
	<link href="../alertas/sweetalert.css" rel="stylesheet">
	<script src="../bootstrap/js/bootstrap.min.js"></script>
</html>