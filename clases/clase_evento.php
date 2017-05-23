<?php 
/**
* Creado por Carlos Arceo
* 11.05.2017
* 
*/
class ClsEvento
{
	public function insertar_evento($infoEvento)
	{
		//Conexion a la base de datos. 
		$conexion = new Conexion();

		//Generamos el sql. 
		$sql = "INSERT INTO eventoNuevo (nombreEvento,descripcionEvento,fechaEvento,lugarEvento) VALUES ('$infoEvento->nombreEvento','$infoEvento->descripcionEvento','$infoEvento->fechaEvento','$infoEvento->lugarEvento');";
		//Ejecutamos la consulta 
		$consulta = mysqli_query($conexion->obtener(),$sql);

		//Cerrar la conexion a la base de datos. 
		$conexion->cerrar();

		if ($consulta){
			return true;
		}
		else
		{
			return false;
		}
	}
	/*
	* <summery>
	* 	Función que realiza la busqueda de los eventos disponibles en la base de datos no recibe ningun parametro. 
	* <summery>
	* 	Return: Una lista en forma de objeto con el id del evento y el nombre. 
	*/
	public function obtenerEventos(){

		//Conexion a la base de datos. 
		$conexion = new conexion();

		//SQL
		$sql = "SELECT idEvento,nombreEvento FROM eventonuevo;";
				
		$consulta = mysqli_query($conexion->obtener(),$sql);

		$conexion->cerrar();

		$resultado = array();
		while ($row = mysqli_fetch_object($consulta)) {
			$resultado[] = $row;
		}
		return $resultado;
	}
}
	
 ?>