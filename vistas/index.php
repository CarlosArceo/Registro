<?php 

if(!isset($_SESSION))
    {
        session_start();
    }
    require_once '../clases/clase_usuario.php';
    require_once '../dbconfig.php';
    $user_home = new usuario();

	if(!$user_home->is_logged_in())
	{
	  $user_home->redirect('');
	}

	if (isset($_SESSION['usuarioSession'])) {
		$stmt = $user_home->runQuery("SELECT * FROM usuarios WHERE idUsuario=:uid");
		$stmt->execute(array(":uid"=>$_SESSION['usuarioSession']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		echo " <input type='text' name='idUsuario' value=".$row['idUsuario']." hidden>";
	}
	


 ?>

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
		<?php include "../dis/encabezado.php"; ?>
	</header>
	<!-- Contenido Principal -->
	<div class="contenido_principal">
		<div class="container-fluid" style="width: auto; height: 480px;">
			<h2 class="text-center titulo animated fadeInLeft retraso1"> Tres razones porque estudiar en la Universidad Del Sur </h2>
			<nav class="container razones animated fadeInUp retraso">
				<ul>
					<li>
						<strong>Titulación Automática</strong> sin <strong>Examen</strong> y sin <strong>Tesis</strong>
					</li>
					<li>
						<strong>Interweek</strong> Estudia 3 días a la semana
					</li>
					<li>
						<strong>Planes</strong> de estudio más cortos  a nivel nacional
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="contenido_principal">
		<div class="container-fluid" style="width: auto; height: 480px;">
			<h2 class="text-center titulo animated fadeInLeft retraso1"> Tres razones porque estudiar en la Universidad Del Sur </h2>
			<nav class="container razones animated fadeInUp retraso">
				<ul>
					<li>
						<strong>Titulación Automática</strong> sin <strong>Examen</strong> y sin <strong>Tesis</strong>
					</li>
					<li>
						<strong>Interweek</strong> Estudia 3 días a la semana
					</li>
					<li>
						<strong>Planes</strong> de estudio más cortos  a nivel nacional
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="contenido_principal" id="principal">
		<div class="container-fluid" style="width: auto; height: 480px;">
			<h2 class="text-center titulo animated fadeInLeft retraso1"> Tres razones porque estudiar en la Universidad Del Sur </h2>
			<nav class="container razones animated fadeInUp retraso">
				<ul>
					<li>
						<strong>Titulación Automática</strong> sin <strong>Examen</strong> y sin <strong>Tesis</strong>
					</li>
					<li>
						<strong>Interweek</strong> Estudia 3 días a la semana
					</li>
					<li>
						<strong>Planes</strong> de estudio más cortos  a nivel nacional
					</li>
				</ul>
			</nav>
		</div>
	</div>
</body>
	<script src="../jquery/jquery.js"></script>
	<script type="text/javascript" src="../jquery/jquery.scrollfire.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/login.js"></script>
	<script type="text/javascript">

	</script>
</html>