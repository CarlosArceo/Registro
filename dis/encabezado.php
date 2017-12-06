<?php 

if(!isset($_SESSION))
    {
        session_start();
    }
    require_once '../clases/clase_usuario.php';
    $user_home = new usuario();

	if(!$user_home->is_logged_in())
	{
	  $user_home->redirect('');
	}

	if (isset($_SESSION['usuarioSession'])) {
		$stmt = $user_home->runQuery("SELECT * FROM usuarios WHERE idUsuario=:uid");
		$stmt->execute(array(":uid"=>$_SESSION['usuarioSession']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
	}
	


 ?>
<style type="text/css">
	.login1{
		    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: 400;
    line-height: 1.42857143;
    color: #333;
    white-space: nowrap;
	}
	.dropdown-menu {
	    min-width: 282px;
	}
	.input-group {
        margin: 6px -13px;
	}
</style>
	<?php 
		if (isset($row['idUsuario'])) {
			echo "<input type='text' name='idUsuario' value='$row[idUsuario]' hidden>";
		}
	 ?>
<nav class="navbar navbar-default">
		 	<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">
		      	<img src="../img/logo_sur.png" width="110px" class="img-thumbnail logo">
		      </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="../index.php">Acerca De</a></li>
		        <li><a href="menu_evento.php">Eventos</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Oferta Academicas <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="../vistas/vista_licenciatura.php">Licenciaturas</a></li>
		            <li><a href="#">Maestrias</a></li>
		            <li><a href="#">Posgrados</a></li>
		          </ul>
		        </li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Instalaciones</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php if (isset($row['usuarioNombre'])) {
		          	echo $row['nombreU'];
		          	echo '<ul class="dropdown-menu">
		          			   <li><a href="#">Panel de Control</a></li>
		          			   <li><a href="../vistas/personas_registradas.php">Personas Registradas</a></li>
		          			   <li><a href="#">Cerrar Sesión</a></li>
				          </ul>';
				   ?>
				   <span class="caret"></span></a>
				   <?php
		          }else{
		          	echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acceso <span class="caret"></span></a>';
		          	echo '<ul class="dropdown-menu col-lg-8">
				          	<form class="form-horizontal login1" method="POST" action="../funciones/login.php" id="login" >
				          		<div class="input-group">
							      <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
							      <input type="email" class="form-control" name="txtUsuario" id="txtUsuario" placeholder="Usuario" required="">
							    </div>
							    <div class="input-group">
							      <div class="input-group-addon"><span class="glyphicon glyphicon-info-sign"></span></div>
							      <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Contraseña" required="">
							    </div>	
							     <li role="separator" class="divider"></li>
							    <div class="form-group" style="text-align: center;">
							    	<button class="btn btn-success" name="btn-login">Inicar Sessión</button>
							    </div>
				          	</form>';
				          	?>
				          	<div class="cargando" style="text-align: center;" hidden="" id="cargando">
				          		<img src="../img/ring.gif" width="50%"><p style="color: white;">Valiando datos por favor espere</p>
				          	</div>
				          	<div class="alert alert-warning" style="text-align: center;"  id="error" hidden="">
				          		<p>Datos incorrectos valide la información</p>
				          	</div>
				          	<div id="resultado">
				          		
				          	</div>
				          	<?php
				          '</ul>';
		          	} ?>
		          
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		