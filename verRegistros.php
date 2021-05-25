<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<center><h3><i><b>Mostrando registros desde PHP y MySQL</b></i></h3></center>
 		<table border="1" cellpadding="0" cellspacing="0">
 			<tr>
 				<td width="150" align="center">N&uacute;mero de Cuenta</td>
 				<td width="300" align="center">Nombre Completo</td>
 				<td width="100" align="center">Semestre</td>
 				<td width="150" align="center"></td>
 				<td width="150" align="center"></td>
 			</tr>
 		<?php
 			$conexion=mysqli_connect("localhost","root","sci300megabyte","escuela");
 			$consultaSQL="SELECT * FROM alumnos ORDER BY nombreCompleto ASC";
 			$resultado=mysqli_query($conexion, $consultaSQL);
 			while($datos=mysqli_fetch_array($resultado))
 			{
 				echo "
 					<tr>
 					 <td align='center'>".$datos['cuenta']."</td>
 					 <td align='center'>".$datos['nombreCompleto']."</td>
 					 <td align='center'>".$datos['semestre']."</td>
 					 <td align='center'><a href='modificar.php?noCuenta=".$datos['cuenta']."&nombre=".$datos['nombreCompleto']."&semestre=".$datos['semestre']."'>Modificar</a></td>
 					 <td align='center'><a href='eliminar.php?noCuenta=".$datos['cuenta']."'>Eliminar</a></td>
 					</tr>
 				";
 			}
 		?>
 		</table>
</body>
</html>
