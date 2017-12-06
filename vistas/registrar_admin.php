<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Sweet Alert Styles -->
	<link href="../alertas/sweetalert.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:100,600">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<title>Registrar Usuario</title>
</head>
	<style type="text/css">
		.login{
			 display: block;
		    padding: 3px 20px;
		    clear: both;
		    font-weight: 400;
		    line-height: 1.42857143;
		    color: #333;
		    white-space: nowrap;
			max-width: 441px;
		    padding: 19px 29px 29px;
		    margin: 0 auto 20px;
		    background-color: #fff;
		    border: 1px solid #e5e5e5;
		    max-height: 301px;
		    height: 303px;
		    -webkit-border-radius: 5px;
		    -moz-border-radius: 5px;
		    border-radius: 5px;
		    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
		    -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
		    box-shadow: -20px 14px 2px rgba(0,0,0,.05);
		}
		.centrado-porcentual {
		    position: absolute;
		    left: 50%;
		    top: 50%;
		    transform: translate(-50%, -50%);
		    -webkit-transform: translate(-50%, -50%);
		}
		.error{
		    position: absolute;
		    min-width: 58%;
		    top: 335px;
		}
	</style>
<body>
	<?php include "../dis/encabezado.php" ?>
	<div class="container-fluid col-lg-6 centrado-porcentual">
		
		<form action="../funciones/guardar_admin.php" method="POST" class="login" id="frmAdmin">
			<h3 style="font-family: 'Raleway', sans-serif; font-weight: bolder; text-align: center;">Registro de usuario administradores</h3>
			<div class="form-group">
				<input type="text" name="nombreU" placeholder="Nombre De Usuario" class="form-control" required="" autofocus="" tabindex="1">
			</div>
			<div class="form-group">
				<input type="text" name="usuariosNombre" placeholder="Nombre Completo" class="form-control" required="" tabindex="2">
			</div>
			<div class="form-group">
				<input type="email" name="correo" placeholder="Correo Electronico" class="form-control" required="" tabindex="3">
			</div>
			<div class="form-group">
				<input type="password" name="password" placeholder="Contraseña" class="form-control" required="" tabindex="4">
			</div>
			<div class="form-group" role="group" aria-label="">
				<input type="submit" class="btn btn-primary col-lg-6" name="btn-signup" tabindex="5" value="Registrar"></input>
				<!-- <button type="button" class="btn btn-default col-lg-4 col-lg-offset-1">Inicar Sessión</button> -->
			</div>
			<div class="alert alert-warning error" hidden="">
				El usuario ya existe
			</div>
			<div class="alert alert-success error" hidden="">
				Usuario registrado con éxito
			</div>
		</form>
		<div id="resultado1">
			
		</div>
	</div>
</body>
	<!-- Jquery -->
	<script src="../jquery/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#frmAdmin").submit(function(){
				debugger;
				$.ajax({
					type: 'POST',
					url: $(this).attr('action'),
					data: $(this).serialize(),

					//Success
						success: function(data){
							$("#resultado1").html(data);
							if ($("#resultadoI").val() == 0) {
								$('#frmAdmin').each(function(){this.reset();	});		
							}else{

							}
																
						},
						//Error
						error:function(requestObject, error, errorThrown){
							alert("Lo sentimos algo salío mal intente más tarde")
						}
				});
				return false;
			});
		});
	</script>
	<script src="../bootstrap/js/bootstrap.js"></script>
	<!-- Sweet Alert Script -->
	<script src="../alertas/sweetalert.min.js"></script>
</html>