<?php
	include("connect.php");
	$consulta = "DELETE FROM alumnos WHERE cuenta=".$_POST['cuenta']; 
	mysqli_query($conex, $consulta);
	echo "Eliminado";
?>
