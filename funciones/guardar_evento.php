<?php 
	include "../info/evento.php";
	include "../clases/clase_evento.php";
	require_once "../conexion/conexion.php";


	$nombre_evento = $_POST['nombreEvento'];
	$descripcion_evento = $_POST['descripcionEvento'];
	$fechaEvento = $_POST['fechaEvento'];
	$lugarEvento = $_POST['lugarEvento'];

	$infoEvento = new eventoNuevo();
	$infoEvento->nombreEvento = $nombre_evento;
	$infoEvento->descripcionEvento = $descripcion_evento;
	$infoEvento->fechaEvento = $fechaEvento;
	$infoEvento->lugarEvento = $lugarEvento;

	$clsEvento = new ClsEvento();

	$insertar = $clsEvento->insertar_evento($infoEvento);

	echo "<input id='resultado1' type='text' value='$insertar'/>"

 ?>