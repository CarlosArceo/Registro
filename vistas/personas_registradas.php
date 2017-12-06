<?php 
	include "../clases/clase_registro.php";
	include "../conexion/conexion.php";
	$clsRegistro = new clsRegistro();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Personas Registradas</title>
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
<style type="text/css">
.menu_lateral {
    position: fixed;
    min-width: 18%;
    z-index: 1000;
    display: inline-block;
    overflow: auto;
    max-height: 100%;
}
.lado_derecho {
    position: fixed;
    left: 250px;
    display: inline-block;
    overflow: auto;
    max-height: 100%;
    height: 80%;
}
</style>
<body>
	<header>
		<?php include '../dis/encabezado.php'; ?>
	</header>

	<div class="container-fluid">
		<div class="col-lg-2 menu_lateral">
			<nav class="row">
				<!-- Menu lateral -->
				<ul class="nav nav-pills nav-stacked" role="tablist">
					   <li role="presentation" class="active"><a href="personas_registradas.php" >Todo</a></li>
			 		<?php 
			 			$lstLicencitaturas = $clsRegistro->obtenerLicenciatura();
			 			foreach ($lstLicencitaturas as $lstLicencitatura) {
			 			 	?>
			 			 	<li role="presentation" ><a href="personas_registradas.php?id=<?php echo $lstLicencitatura->idLicenciatura ?>"><?php echo $lstLicencitatura->nombre ?></a></li>
			 			 <?php
			 			 } 
			 		 ?>
				</ul>
			</nav>
		</div>
		<div class="col-lg-10 lado_derecho">
			<form class="form-inline">
				<!-- <div class="form-group">
					<label><p>Faltrar Por:</p></label>
					<select class="form-control" name="filtro" id="filtro"> 
						<option value=""></option>
						<option value="1">Eventos</option>
						<option value="2">Licenciaturas</option>
					</select>
				</div> -->
			</form>
			<div id="tableCarreras">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Correo</th>
							<th>Evento</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							if (isset($_GET['id'])) 
							{	
								$idLicenciatura = $_GET['id'];
								$verDatos = $clsRegistro->obtenerDatosPorLic($idLicenciatura);
								if ($verDatos > 1) 
							{
								foreach ($verDatos as $datos) {
								?>
								<tr>
									<td ><?php echo $datos->personas->nombre; ?></td>
									<td><?php echo $datos->personas->apellido;?></td>
									<td><?php echo $datos->personas->correo;?></td>
									<td>Open House</td>
								</tr>
								<?php
								}
							}else{
								echo "<td colspan='4'>Sin Registros</td>";
							}
							}else
							{
								$verDatos = $clsRegistro->obtenerDatos();
								foreach ($verDatos as $datos) {
								?>
								<tr>
									<td ><?php echo $datos->nombre; ?></td>
									<td><?php echo $datos->apellido;?></td>
									<td><?php echo $datos->correo;?></td>
									<td>Open House</td>
								</tr>
								<?php
								}
							}

						 ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
	<script src="../jquery/jquery.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>.
</html>