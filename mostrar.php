<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ver alumnos</title>
	<link rel="stylesheet" href="style_table.css">
</head>
<body>
	<header>
		<nav>
			<ul class="nav_links">
				<li><a href="index.php">Ingresar</a></li>
			</ul>
			<a class="contacto"	href="info.html"><Button>Sobre nosotros</Button></a>
		</nav>
	</header>

	<table class="datatable">
		<thead class="head">
			<tr>
				<th>Número de Cuenta</th>
				<th>Alumno</th>
				<th>Semestre</th>
				<th>Parcial</th>
				<th>Matemáticas VI</th>
				<th>Física IV</th>
				<th>Inglés</th>
				<th>Metodología de la Investigación</th>
				<th>Programación IV</th>
				<th>Análisis y Diseño de sistemas</th>
				<th>Programación de Internet II</th>
				<th>Acciones</th>
			</tr>
		</thead>
<?php
		include("connect.php");
		$consulta = "select * from calificaciones order by semestre ASC, nombre ASC, parcial ASC";
		$resultado = mysqli_query($conex, $consulta);
		while($datos=mysqli_fetch_array($resultado)){
			echo "
						<tbody>
						<tr>
							<td>".$datos['cuenta']."</td>
							<td>".$datos['nombre']."</td>
							<td>".$datos['semestre']."</td>
							<td>".$datos['parcial']."</td>
							<td>".$datos['mate']."</td>
							<td>".$datos['fisica']."</td>
							<td>".$datos['ingles']."</td>
							<td>".$datos['metodologia']."</td>
							<td>".$datos['progra']."</td>
							<td>".$datos['analisis']."</td>
							<td>".$datos['internet']."</td>
							<td><a href='form_modificar.php?cuenta=".$datos['cuenta'].
																						"&parcial=".$datos['parcial'].
																						"&semestre=".$datos['semestre'].
																						"&nombre=".$datos['nombre']."'>Modificar</a>
							<a href='eliminar.php?cuenta=".$datos['cuenta'].
																						"&parcial=".$datos['parcial'].
																						"&semestre=".$datos['semestre']."'>Eliminar</a></td>

						</tr>
					</tbody>
					";
		}
?>	
	</table>
</body>
</html>
