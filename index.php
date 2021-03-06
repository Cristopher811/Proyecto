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
				<li><a href="mostrar.php">Ver alumnos</a></li>
			</ul>
			<a class="contacto"	href="info.html"><Button>Sobre nosotros</Button></a>
		</nav>
	</header>
	<form action="ingresar.php" name="forma1" method="post">
			<h3>Sistema de control escolar</h3>

			<input type="text" name="cuenta" placeholder="Número de cuenta" required autofocus>
			<input type="text" name="nombre" placeholder="Nombre completo" required>
			<input type="text" name="semestre" placeholder="Semestre" required>

			<h3>Calificaciones</h3>

			<h4>Selecciona la parcial con la que quieres interactuar</h4>
			<div class="radio">
				<input class="radio_input" type="radio" id="1" name="parcial" value="Parcial 1">
				<label class="radio_label" for="1">Parcial 1</label>

				<input class="radio_input" type="radio" id="2" name="parcial" value="Parcial 2">
				<label class="radio_label" for="2">Parcial 2</label>

				<input class="radio_input" type="radio" id="3" name="parcial" value="Parcial 3">
				<label class="radio_label" for="3">Parcial 3</label>
			</div>
			<h4>Ingresa la calificación en cada materia</h4>
			<input type="number" step="0.1" min="5" max="10" name="mate" placeholder="Calificación de Matemáticas VI">
			<input type="number" step="0.1" min="5" max="10" name="fisica" placeholder="Calificación de Física IV">
			<input type="number" step="0.1" min="5" max="10" name="ingles" placeholder="Calificación de Inglés IV">
			<input type="number" step="0.1" min="5" max="10" name="metodo" placeholder="Calificación de Metodología de la Investigación">
			<input type="number" step="0.1" min="5" max="10" name="progra" placeholder="Calificación de Programación IV">
			<input type="number" step="0.1" min="5" max="10" name="analisis" placeholder="Calificación de Análisis y Desarrollo de Sistemas">
			<input type="number" step="0.1" min="5" max="10" name="internet" placeholder="Calificación de Programación en Internet II">

			<input type="submit" value="Guardar datos">
	</form>
</body>
</html>
