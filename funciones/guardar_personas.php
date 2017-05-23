<?php 

	include "../clases/clase_registro.php";
	include "../info/persona.php";
	include "../conexion/conexion.php";

	$clsRegistro = new clsRegistro();

	$infoPersona = new infoPersona();

	if (isset($_POST['correoAlumno'])) {
		$infoPersona->nombrePersona = $_POST['nombreAlumno'];
		$infoPersona->apellidoPersona = $_POST['apellidoAlumno'];
		$infoPersona->correo  =  $_POST['correoAlumno'];
		$infoPersona->numeroTel =  $_POST['telefonoAlumno'];
		$infoPersona->evento = $_POST['evento'];
		$lstLicenciatua = $_POST['lstLicenciatura'];


		if($clsRegistro->validarCorreo($infoPersona->correo)){
			$insertar = $clsRegistro->guardarDatos($infoPersona,$lstLicenciatua);
		}else{
			$insertar = $clsRegistro->guardarDatos($infoPersona,$lstLicenciatua);
		}

	}else{
		echo "Nada";
	}


 ?>