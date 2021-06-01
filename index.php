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
		<a href="form_modificar.php">Modificar Datos</a>
		<a href="form_eliminar.php">Eliminar Datos</a>
	</div>
	<form action="ingresar.php" name="forma1" method="post">
			<h3>Sistema de control escolar</h3>
			<input type="text" name="cuenta" placeholder="Número de cuenta" required autofocus>
			<input type="text" name="nombre" placeholder="Nombre completo" required>
			<input type="text" name="semestre" placeholder="Semestre" required>
			<h3>Calificaciones</h3>
			<input type="button" name="Parcial 1" value="Parcial 1">
			<input type="button" name="Parcial 2" value="Parcial 2">
			<input type="button" name="Parcial 3" value="Parcial 3">
			<input type="number" name="Mate" min="5" max="10" placeholder="Calificación de Matemáticas">
			<input type="number" name="Fisica" min="5" max="10" placeholder="Calificación de Física">	
			<input type="number" name="Ingles" min="5" max="10" placeholder="Calificación de Inglés">
			<input type="number" name="Metodo" min="5" max="10" placeholder="Calificación de Metodología de Investigación">
			<input type="number" name="Progra" min="5" max="10" placeholder="Calificación de Programación">
			<input type="number" name="Analisis" min="5" max="10" placeholder="Calificación de Análisis y Diseño de Sistemas">
			<input type="number" name="Internet" min="5" max="10" placeholder="Calificación de Programación de Internet">
			<input type="submit" value="Guardar datos">
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
