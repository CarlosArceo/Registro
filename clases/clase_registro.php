<?php 

/**
* Creeado por Carlos Arceo 
* 2015
*/
class clsRegistro
{
	//Tabla de donde se obtiene los datos.
	public $tabla = 'licenciaturas';
	public $tablaPersonas = 'personasregistradas';
	public $tablaLicDatos = 'personaslicenciatura ';
	/* 
	* Creado por Carlos Arceo
	* return: Lista de todas las licenciaturas 
	*/
	public function obtenerLicenciatura(){

		//Conexion a la base de datos. 
		$conexion = new conexion();

		//Sql.
		$sql  = "SELECT * FROM $this->tabla;";

		//Ejecutamos la consulta
		$consulta = mysqli_query($conexion->obtener(),$sql);

		//Cerrar conexion a la base de datos 
		$conexion->cerrar();

		$resultado = array();
		while($row = mysqli_fetch_object($consulta)){
			$resultado[] = $row;
		}
		return $resultado;
	}
	public function validarCorreo($correo){

		//Conexion a la base de datos.
		$conexion = new Conexion();

		//Sql. 
		$sql = "SELECT * FROM $this->tablaPersonas WHERE correo = '$correo';";
		//echo $sql;
		//Ejecutamos la consulta 

		$consulta = mysqli_query($conexion->obtener(),$sql);

		$numColumna = mysqli_num_rows($consulta);
		//echo $numColumna;
		if ($numColumna > 0){
			return true;
		}
		else{
			return false;
		}

	}
	public function guardarDatos($personas,$lstLicenciatura){

		//Conexion a la base datos. 
		$conexion = new Conexion();

		//SQL. 
		$sql = " INSERT INTO $this->tablaPersonas (nombre,apellido,correo,numeroTel) VALUES ('$personas->nombrePersona','$personas->apellidoPersona', '$personas->correo',$personas->numeroTel);";
		//echo $sql;
		//Ejecutamos la consulta.
		$consulta = mysqli_query($conexion->obtener(), $sql);

		if ($consulta) {
			$idPersona = mysqli_insert_id($conexion->obtener());

			$guardarDaLic = $this->guardarDatosLicenciatura($idPersona,$lstLicenciatura,$conexion);

		}
		else{
			return false;
		}


	}
	public function guardarDatosLicenciatura($idPersona,$lstLicenciatura){

		$conexion = new Conexion();
		$total = count($lstLicenciatura);
		$sql2 = "";
		for ($i=0; $i < $total; $i++) { 		
			$sql2 = "INSERT INTO $this->tablaLicDatos (idPersona,idLicenciatura) VALUES ($idPersona,$lstLicenciatura[$i]);"; 
			//echo $sql2;
			$consulta12 = mysqli_query($conexion->obtener(), $sql2);
		}
		//$consulta12 = mysqli_query($conexion->obtener(), $sql2);

		
	}
}



 ?>