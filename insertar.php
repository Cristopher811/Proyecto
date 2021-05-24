<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trabajando con PHP a MySQL</title>
</head>
<body>
	<h3><i><b>Insertando registros desde PHP a MySQL</b></i></h3>
	<?php
		//Paso 1: Conectarme al servidor y base de datos
		//Para mysqli_connect utiliza 4 parametros:
		//		Primer parametro: Nombre del servidor
		//		Segundo parametro: Usuario del gestor de la base de datos
		//		Tercer parametro: Contraseña del usuario
		//		Cuarto parametro: Nombre de la base de datos
		$conexion = mysqli_connect("localhost","root","sci300megabyte","escuela");
		//Paso 2: Definir la consulta SQL (insert)
		$consultaSQL = "INSERT INTO alumnos 
						(cuenta, nombreCompleto, semestre) 
						VALUES
						(".$_POST['cuenta'].",'".$_POST['nombre']."','".$_POST['semestre']."')
						";
		echo "La consulta que vamos ejecutar: ".$consultaSQL;
		//Paso 3: Ejecutar la consulta con comando mysqli_query
		mysqli_query($conexion,$consultaSQL);
		//Paso 4: Envio mensaje de almacenamiento exitoso
		echo "<br><br><i><b>Almacenamiento exitoso en la base de datos</b></i>";
	?>
</body>
</html>
