<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h3><i><b>Modificando registros desde PHP a MySQL</b></i></h3>
	<?php
		//Paso 1: Conectarme al servidor y base de datos
		//Para mysqli_connect utiliza 4 parametros:
		//		Primer parametro: Nombre del servidor
		//		Segundo parametro: Usuario del gestor de la base de datos
		//		Tercer parametro: Contraseña del usuario
		//		Cuarto parametro: Nombre de la base de datos
		$conexion = mysqli_connect("localhost","*usuario*","*contraseña*","escuela");
		//Paso 2: Definir la consulta SQL (insert)
		$consultaSQL = "UPDATE alumnos SET cuenta=".$_POST['cuenta'].", nombreCompleto='".$_POST['nombre']."', semestre='".$_POST['semestre']."' WHERE cuenta=".$_POST['cuentaValidar'];

		echo "La consulta que vamos ejecutar: ".$consultaSQL;
		//Paso 3: Ejecutar la consulta con comando mysqli_query
		mysqli_query($conexion,$consultaSQL);
		//Paso 4: Envio mensaje de almacenamiento exitoso
		echo "<br>Registro modificado exitosamente!<br><br>";
 		echo "<a href='verRegistros.php'>Regresar</a>";
	?>
</body>
</html>
