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
			echo "<input type='text'  id='resultadoLic' value='1'> ";
		}

		else{
			$insertar = $clsRegistro->guardarDatos($infoPersona,$lstLicenciatua);

			if ($insertar) {
				echo "<input type='text' id='resultadoLic' value='2'> ";
			}
			else{
				echo "<input type='text' id='resultadoLic' value='3'> ";
			}
		}

	}else{
		
	}


 ?>