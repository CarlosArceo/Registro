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
	<title>Registrar</title>
</head>
	<body>
		<header>
			<?php include '../dis/encabezado.php'; ?>
		</header>
		<?php 
			include "../conexion/conexion.php";
			include "../clases/clase_registro.php";
			include "../clases/clase_evento.php";
			$clsRegistro = new clsRegistro();	
			$clsEvento = new ClsEvento();

			$lstLicenciatura = $clsRegistro->obtenerLicenciatura();

			$lstPrimeros8 = array_slice($lstLicenciatura, 0, 7);

			$lstSegundo = array_slice($lstLicenciatura, 7);


			$lstEvento = $clsEvento->obtenerEventos();


			
		 ?>
		 <!-- DIV FORMULARIO -->
		 <div class="container-fluid animated bounceInLeft" id="divRegistro" name="">
		 	<form action="../funciones/guardar_personas.php" method="POST" class="form-inline" id="formulario1">
		 		<div class="form-group">
		 			<label>Nombre(s):</label>
		 			<input type="text" name="nombreAlumno" class="form-control" placeholder="Carlos Alberto" required="" autofocus="" tabindex="1">
		 		</div>
		 		<div class="form-group">
		 			<label>Apellido(S):</label>
		 			<input type="text" name="apellidoAlumno" class="form-control" placeholder="Arceo Moo" required="" tabindex="2">
		 		</div>
		 		<div class="form-group">
		 			<label>Correo Electronico:</label>
		 			<input type="email" name="correoAlumno" class="form-control" placeholder="carlos.arceo@ejemplo.com" required="" tabindex="3">
		 		</div>
		 		<div class="form-group">
		 			<label>Número de Telefono:</label>
		 			<input type="text" name="telefonoAlumno" class="form-control" placeholder="(999)9452553" required="" tabindex="4">
		 		</div>
		 		<div class="form-group">
		 			<label>Evento:</label>
		 			<select name="evento" id="evento" class="form-control" tabindex="5" required="">
		 				<option>Seleccionar</option>
		 				<?php 
		 					foreach ($lstEvento as $lstEventos) {
		 						echo "<option value='$lstEventos->idEvento'>$lstEventos->nombreEvento </option>";
		 					}
		 				 ?>
		 			</select>
		 		</div>
		 		<div class="form-group">
		 			 <div class="panel panel-info">
		 			 	<div class="panel-heading"><h3 class="panel-title">Licenciatura Disponibles</h3></div>
		 			 		<div class="panel-body">
		 			 			<div class="alert alert-warning" hidden="" id="warning">
		 			 				<p>Por favor seleccione una o más licenciaturas</p>
		 			 			</div>
		 			 			<div style="display: inline-flex;">
		 			 				<ul class='col-lg-12' >
		 			 					<input type="checkbox" name="todos" value="15" id="todos"  onclick="changeState(this,document.getElementById('todos'))" > SELECCIONAR TODAS
		 			 				</ul>
		 			 				<div>
		 			 					<?php 

		 			 					foreach ($lstPrimeros8 as $lstPrimeros82) {
											echo "<ul class='col-lg-6'><input type='checkbox' name='lstLicenciatura[]' value='$lstPrimeros82->idLicenciatura' id='$lstPrimeros82->idLicenciatura'> $lstPrimeros82->nombre</ul>";
										}
										foreach ($lstSegundo as $lstSegundos) {
											echo "<ul class='col-lg-6'><input type='checkbox' name='lstLicenciatura[]' value='$lstSegundos->idLicenciatura' id='$lstSegundos->idLicenciatura'> $lstSegundos->nombre</ul>" ;
										}
		 			 				 ?>
		 			 				</div>
		 			 			</div>
		 			 		</div>
		 			 		<div class="panel-footer"></div>
		 			 </div>
		 		</div>
		 		<div class="form-group">
		 			<button type="submit" class="btn btn-success btn-lg btn-block"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Datos</button>
		 		</div>
		 	</form>
		 </div>
	</body>
	<script src="../jquery/jquery.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript">

		function changeState(check){
			debugger;
			var total = check.value;
			total++;
			var numero
				for(numero = 1; numero < total; numero++ ){
					if(check.checked){
			        	document.getElementById(numero).setAttribute('checked','checked'); //atributo y valor
			     	}	
			     	else{
			      		document.getElementById(numero).removeAttribute('checked'); //el atributo
			    	}
				}
			 
			}

		$(document).ready(function(){
			$("#formulario1").submit(function(){				
				debugger;
				var seleccinados = $("input[name='lstLicenciatura[]']:checked").length;
				if (seleccinados > 0){
					//Enviamos los vales por Ajax.
					// 	$.ajax({
					// 	type: 'POST',
					// 	url: $(this).attr('action'),
					// 	data: $(this).serialize(),

					// 	//Success
					// 	success: function(data){
					// 		$("#resultado").html(data);
					// 	},
					// 	//Error
					// 	error:function(requestObject, error, errorThrown){
					// 		alert("Lo sentimos algo salío mal intente más tarde")
					// 	}
					// })
					//return false;
				}
				else{
					$("#warning").show();
					return false;

				}
			});
			
		});
	</script>
</html>