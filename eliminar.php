<?php
	include("connect.php");
	$consulta = "DELETE FROM alumnos WHERE cuenta=".$_POST['cuenta']; 
	$consulta2 = "DELETE FROM calificaciones WHERE cuenta='".$_GET['cuenta']. "' AND parcial='" . $_GET['parcial'] . "'";
	mysqli_query($conex, $consulta);
	mysqli_query($conex, $consulta2);
	echo "Eliminado";
?>
