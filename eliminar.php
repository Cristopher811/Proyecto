<?php
	include("connect.php");
	$consulta = "DELETE FROM calificaciones WHERE cuenta='".$_GET['cuenta']. "' AND parcial='" . $_GET['parcial'] . "'";
	mysqli_query($conex, $consulta);
	echo "Eliminado";
?>
