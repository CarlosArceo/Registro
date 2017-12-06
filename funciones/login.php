<?php 


	session_start();
	require_once '../clases/clase_usuario.php';
	$user_login = new usuario();

	// if($user_login->is_logged_in()!="")
	// {
	// 	$user_login->redirect("#login");
	// }

	// if(isset($_POST['btnLogin']))
	// {
	// 	$email = trim($_POST['txtUsuario']);
	// 	$upass = trim($_POST['txtPassword']);

	// 	if($user_login->login($email,$upass))
	// 	{
	// 		echo "<input type='text' id='txtLogin' value='1' />";
	// 	}else{
	// 		echo "<input type='text' id='txtLogin' value='2' />";
	// 	}
	// }
		$email = trim($_POST['txtUsuario']);
		$upass = trim($_POST['txtPassword']);

		if($user_login->login($email,$upass))
		{
			echo "<input type='text' id='txtLogin' value='1' hidden />";
		}else{
			echo "<input type='text' id='txtLogin' value='2' hidden />";
		}
 ?>