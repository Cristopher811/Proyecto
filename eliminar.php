<?php
	include("connect.php");
	$consulta = "DELETE FROM alumnos WHERE cuenta=".$_POST['cuenta']; 
	$consulta2 = "DELETE FROM calificaciones WHERE cuenta='".$_POST['cuenta']. "' AND parcial='" . $_POST['parcial'] . "'";
	mysqli_query($conex, $consulta);
	mysqli_query($conex, $consulta2);
	print_r($_POST);
	echo $consulta2;
	echo "Eliminado";
?>
