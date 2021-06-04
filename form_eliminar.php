<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trabajando con PHP + MySQL</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!--<div id="mainbox" onclick="openFunction()">&#9776; Menú</div>
	<div id="menu" class="sidemenu">
		<a href="#" class="closebtn" onclick="closeFunction()">&times;</a> 
		<a href="mostrar.php">Ver datos</a>
		<a href="form_modificar.php">Modificar datos</a>
		<a href="index.php">Ingresar datos</a>
	</div>-->
	<header>
		<nav>
			<ul class="nav_links">
				<li><a href="index.php">Ingresar</a></li>
				<li><a href="form_modificar.php">Modificar</a></li>
				<li><a href="mostrar.php">Ver alumnos</a></li>
			</ul>
			<a class="contacto"	href="info.html"><Button>Sobre nosotros</Button></a>
		</nav>
	</header>

	<form action="eliminar.php" name="forma1" method="post">
			<h3>Ingresa los datos del usuario que desees eliminar</h3>
			<input type="text" name="cuenta" placeholder="Número de cuenta">
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

			<input type="submit" value="Eliminar">
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

