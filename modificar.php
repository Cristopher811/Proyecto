<?php
include("connect.php");
	$consulta = "UPDATE calificaciones SET mate=".$_POST['mate'].",  
										   fisica=".$_POST['fisica'].",
										   ingles=".$_POST['ingles'].",
										   metodologia=".$_POST['metodo'].",
										   progra=".$_POST['progra'].",
										   analisis=".$_POST['analisis'].",
										   internet=".$_POST['internet']."
	WHERE cuenta='".$_POST['cuenta']. "' AND parcial='" . $_POST['parcial'] . "' AND semestre='" .$_POST['semestre'] . "'";
	mysqli_query($conex,$consulta);
	header('Location: mostrar.php');
?>

