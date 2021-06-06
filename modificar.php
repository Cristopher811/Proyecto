<?php
	include("connect.php");

	$consulta = "UPDATE calificaciones SET mate=".$_POST['mate'].",  
										   fisica=".$_POST['fisica'].",
										   ingles=".$_POST['ingles'].",
										   metodologia=".$_POST['metodo'].",
										   progra=".$_POST['progra'].",
										   analisis=".$_POST['analisis'].",
										   internet=".$_POST['internet']."

	WHERE cuenta='".$_GET['cuenta']. "' AND parcial='" . $_GET['parcial'] . "'";

	mysqli_query($conex,$consulta);
	echo "Hecho pordos";
	echo $consulta;
	print_r($_POST);
?>
