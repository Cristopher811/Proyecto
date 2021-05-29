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
		<a href="Mostrar.php">Ver datos</a>
		<a href="Modificar.php">Modificar Datos</a>
		<a href="Eliminar.php">Eliminar Datos</a>
	</div>
	<form action="insertar.php" name="forma1" method="post">
			<h3>Ingresa tus datos</h3>
			<input type="text" name="cuenta" placeholder="Número de cuenta">
			<input type="text" name="nombre" placeholder="Nombre completo">
 			<input type="text" name="semestre" placeholder="Semestre">
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
	
	<?php
		include("ingresar.php");
	?>	

</body>
</html>
