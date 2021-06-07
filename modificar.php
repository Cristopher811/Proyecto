<?php
include("connect.php");
	$consulta = "UPDATE calificaciones SET mate=".$_POST['mate'].",  
										   fisica=".$_POST['fisica'].",
										   ingles=".$_POST['ingles'].",
										   metodologia=".$_POST['metodo'].",
										   progra=".$_POST['progra'].",
										   analisis=".$_POST['analisis'].",
											 internet=".$_POST['internet'].",
											 cuenta='".$_POST['cuenta']."',
											 nombre='".$_POST['nombre']."',
											 parcial='".$_POST['parcial']."',
											 semestre='".$_POST['semestre']."'
											 
	WHERE cuenta='".$_POST['check_cuenta']. "' AND parcial='" . $_POST['check_parcial'] . "' AND semestre='" .$_POST['check_semestre'] . "' AND nombre = '" .$_POST['check_nombre'] . "'";

mysqli_query($conex,$consulta);
header('Location: mostrar.php');
?>

