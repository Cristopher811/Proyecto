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
		<a href="form_modificar.php">Modificar datos</a>
		<a href="index.php">Ingresar datos</a>
	</div>
	<form action="eliminar.php" name="forma1" method="post">
			<h3>Ingresa los datos que quieras eliminar</h3>
			<input type="text" name="cuenta" placeholder="Número de cuenta">
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

