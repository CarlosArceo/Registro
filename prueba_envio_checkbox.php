
<!DOCTYPE html>
<html>
<head>
	<title>Pruebas</title>
</head>
<body>
<?php 
	if (isset($_POST['enviar'])) {
		print_r($_POST['lista']);
		//echo "Valor del primer CheckBox es igual a :"  . ;
	}else{
		echo "No";
	}

 ?>
	<form action="" method="POST">
		<input type="checkbox" name="lista[]" value="1"> Valor 1
		<input type="checkbox" name="lista[]" value="2"> Valor 2
		<input type="checkbox" name="lista[]" value="3"> Valor 3
		<input type="submit" name="enviar" value="Enivar Formulario">
	</form>
</body>
</html>