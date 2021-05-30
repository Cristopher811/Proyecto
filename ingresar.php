<?php
	include("connect.php")
	$consulta = "INSERT INTO alumnos (cuenta, ompleto, semestre) 
	VALUES(".$_POST['cuenta'].",'".$_POST['nombre']."','".$_POST['semestre']."')";
	mysqli_query($conex, $consulta);
	echo "Sísirve";
?>
