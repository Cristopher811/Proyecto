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

			<h4>Selecciona la parcial con la que quieres interactuar</h4>
			<div class="radio">
				<input class="radio_input" type="radio" id="1" name="parcial" value="0">
				<label class="radio_label" for="1">Parcial 1</label>

				<input class="radio_input" type="radio" id="2" name="parcial" value="0">
				<label class="radio_label" for="2">Parcial 2</label>

				<input class="radio_input" type="radio" id="3" name="parcial" value="0">
				<label class="radio_label" for="3">Parcial 3</label>
			</div>
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
