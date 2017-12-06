<?php
session_start();
require_once '../clases/clase_usuario.php';

$reg_user = new usuario();

// if($reg_user->is_logged_in()!="")
// {
// 	$reg_user->redirect('home.php');
// }
$uname = trim($_POST['nombreU']);
	$nombreUsuario = trim($_POST['usuariosNombre']);
	$email = trim($_POST['correo']);
	$upass = trim($_POST['password']);
	$code = md5(uniqid(rand()));
	
	$stmt = $reg_user->runQuery("SELECT * FROM usuarios WHERE correo=:email_id");
	$stmt->execute(array(":email_id"=>$email));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if($stmt->rowCount() > 0)
	{
		$msg = "
		      <div class='alert alert-danger'>
				<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Lo siento !</strong>  El correo ya existe.
			  </div>
			  ";

		if (isset($msg)) {
				echo $msg;
				echo "<input type='text' id='resultadoI' value='1' hidden />";
			}
			else{
			}
		
	}
	else
	{
		if($reg_user->register($uname,$nombreUsuario,$email,$upass,$code))
		{			
			$id = $reg_user->lasdID();		
			$key = base64_encode($id);
			$id = $key;
			
			// $message = "					
			// 			Hola $uname,
			// 			<br /><br />
			// 			Bienvenido a SICLO!<br/>
			// 			Para completar su registro, haga clic en el enlace siguiente<br/>
			// 			<br /><br />
			// 			<a href='http://s654497612.onlinehome.mx/siclo/verify.php?id=$id&code=$code'>Click HERE to Activate :)</a>
			// 			<br /><br />
			// 			Gracias.";
						
			// $subject = "Confirmar Registro";
						
			//$reg_user->send_mail($email,$message,$subject);	
			$msg = "
					<div class='alert alert-success'>
						<button class='close' data-dismiss='alert'>&times;</button>
						<strong>Exito!</strong> Datos Guardados
			  		</div>
					";
			if (isset($msg)) {
				echo $msg;
				echo "<input type='text' id='resultadoI' value='0' hidden/>";
			}
			else{
			}
		}
		else
		{
			echo "Lo siento , No se puede verificar el correo electronico proporcionado...";
		}		
	}
?>