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
				<li><a href="form_eliminar.php">Eliminar</a></li>
				<li><a href="mostrar.php">Ver alumnos</a></li>
			</ul>
			<a class="contacto"	href="info.html"><Button>Sobre nosotros</Button></a>
		</nav>
	</header>

	<form action="modificar.php" name="forma1" method="post">
			<h3>Calificaciones a modificar</h3>
			<input type="text" name="cuenta" value="<?= $_GET['cuenta']?>">
			<input type="text" name"parcial" value="<?= $_GET['parcial']?>">
			<h4>Selecciona la parcial con la que quieres interactuar</h4>

			<input type="number" name="mate" min="5" max="10" placeholder="Calificación de Matemáticas">
			<input type="number" name="fisica" min="5" max="10" placeholder="Calificación de Física">	
			<input type="number" name="ingles" min="5" max="10" placeholder="Calificación de Inglés">
			<input type="number" name="metodo" min="5" max="10" placeholder="Calificación de Metodología de Investigación">
			<input type="number" name="progra" min="5" max="10" placeholder="Calificación de Programación">
			<input type="number" name="analisis" min="5" max="10" placeholder="Calificación de Análisis y Diseño de Sistemas">
			<input type="number" name="internet" min="5" max="10" placeholder="Calificación de Programación de Internet">
			
 			<input type="submit" value="Modificar">
	</form>
	    <!-- script-menu  -->
  <script type="text/javascript">
      function openFunction(){
				document.getElementById("menu").style.width="200px";
        }
      function closeFunction(){
          document.getElementById("menu").style.width="0px";
        }
	</script>
</body>
</html>

