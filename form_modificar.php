<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trabajando con PHP + MySQL</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<nav>
			<ul class="nav_links">
				<li><a href="index.php">Ingresar</a></li>
				<li><a href="mostrar.php">Ver alumnos</a></li>
			</ul>
			<a class="contacto"	href="info.html"><Button>Sobre nosotros</Button></a>
		</nav>
	</header>

	<form action="modificar.php" name="forma1" method="post">
			<h3>Datos del alumno</h3>
			<input type="hidden" name="check_cuenta" value="<?= $_GET['cuenta']?>">
			<input type="hidden" name="check_parcial" value="<?= $_GET['parcial']?>">
			<input type="hidden" name="check_semestre" value="<?= $_GET['semestre']?>">
			<input type="hidden" name="check_nombre" value="<?= $_GET['nombre']?>">

			<input type="text" placeholder="Nombre completo" name="nombre">
			<input type="text" placeholder="Número de cuenta" name="cuenta">
			<input type="text" placeholder="Semestre" name="semestre">
			<h4>Selecciona la parcial con la que quieres interactuar</h4>
			<div class="radio">
			<input class="radio_input" type="radio" id="1" name="parcial" value="Parcial 1">
				<label class="radio_label" for="1">Parcial 1</label>

				<input class="radio_input" type="radio" id="2" name="parcial" value="Parcial 2">
				<label class="radio_label" for="2">Parcial 2</label>

				<input class="radio_input" type="radio" id="3" name="parcial" value="Parcial 3">
				<label class="radio_label" for="3">Parcial 3</label>
			</div>

			<h3>Calificaciones a modificar</h3>
			
			<input type="number" step="0.1" name="mate" min="5" max="10" placeholder="Calificación de Matemáticas">
			<input type="number" step="0.1" name="fisica" min="5" max="10" placeholder="Calificación de Física">	
			<input type="number" step="0.1" name="ingles" min="5" max="10" placeholder="Calificación de Inglés">
			<input type="number" step="0.1" name="metodo" min="5" max="10" placeholder="Calificación de Metodología de Investigación">
			<input type="number" step="0.1" name="progra" min="5" max="10" placeholder="Calificación de Programación">
			<input type="number" step="0.1" name="analisis" min="5" max="10" placeholder="Calificación de Análisis y Diseño de Sistemas">
			<input type="number" step="0.1" name="internet" min="5" max="10" placeholder="Calificación de Programación de Internet">
			
 			<input type="submit" value="Modificar">
	</form>
</body>
</html>

