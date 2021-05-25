<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
	<body>
		<center><h3><i><b>Eliminando registros desde PHP y MySQL</b></i></h3></center>
 		<?php
 			$conexion=mysqli_connect("localhost","*usuario*","*contraseña*","escuela");
 			$consultaSQL="DELETE FROM alumnos WHERE cuenta=".$_GET['noCuenta'];
 			mysqli_query($conexion, $consultaSQL);

 			echo "Registro eliminado exitosamente!<br><br>";
 			echo "<a href='verRegistros.php'>Regresar</a>";
 		?>
	</body>
</html>
