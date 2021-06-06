<?php
	include("connect.php");
$consulta = "DELETE FROM calificaciones WHERE cuenta='".$_GET['cuenta']. 
						"' AND parcial='" . $_GET['parcial'] . 
						"' AND semestre='" . $_GET['semestre']  . "'";
mysqli_query($conex, $consulta);
header('Location: mostrar.php');
?>
