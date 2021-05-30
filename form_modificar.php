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
			<input type="text" name="cuenta" placeholder="Número de cuenta">
			<input type="text" name="nombre" placeholder="Nombre completo">
 			<input type="text" name="semestre" placeholder="Semestre">
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

