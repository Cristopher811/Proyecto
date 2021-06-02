<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trabajando con PHP + MySQL</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="mainbox" onclick="openFunction()">&#9776; Menú</div>
	<div id="menu" class="sidemenu">
		<a href="#" class="closebtn" onclick="closeFunction()">&times;</a> 
		<a href="mostrar.php">Ver datos</a>
		<a href="form_eliminar.php">Eliminar datos</a>
		<a href="index.php">Ingresar datos</a>
	</div>
	<form action="modificar.php" name="forma1" method="post">
			<h3>Ingresa los datos que quieras modificar</h3>
			<input type="hidden" name="cuentaValidar" size="25" value="
			<?php echo $_GET['cuenta']; ?>">
			<input type="text" name="cuenta" placeholder="Número de cuenta" required autofocus>
			<input type="text" name="nombre" placeholder="Nombre completo" required>
			<input type="text" name="semestre" placeholder="Semestre" required>
			<h3>Calificaciones</h3>
			<h4>Selecciona la parcial con la que quieres interactuar</h4>
			<div class="radio">
				<input class="radio_input" type="radio" id="1" name="parcial" value="0">
				<label class="radio_label" for="1">Parcial 1</label>

				<input class="radio_input" type="radio" id="2" name="parcial" value="0">
				<label class="radio_label" for="2">Parcial 2</label>

				<input class="radio_input" type="radio" id="3" name="parcial" value="0">
				<label class="radio_label" for="3">Parcial 3</label>
			</div>

			<input type="number" name="Mate" min="5" max="10" placeholder="Calificación de Matemáticas">
			<input type="number" name="Fisica" min="5" max="10" placeholder="Calificación de Física">	
			<input type="number" name="Ingles" min="5" max="10" placeholder="Calificación de Inglés">
			<input type="number" name="Metodo" min="5" max="10" placeholder="Calificación de Metodología de Investigación">
			<input type="number" name="Progra" min="5" max="10" placeholder="Calificación de Programación">
			<input type="number" name="Analisis" min="5" max="10" placeholder="Calificación de Análisis y Diseño de Sistemas">
			<input type="number" name="Internet" min="5" max="10" placeholder="Calificación de Programación de Internet">
			
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

