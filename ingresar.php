<?php
	include("connect.php");
	$consulta = "INSERT INTO alumnos (cuenta, nombreCompleto, semestre) 
	VALUES(".$_POST['cuenta'].",'".$_POST['nombre']."','".$_POST['semestre']."')";
	$consulta2 = "INSERT INTO calificaciones (
								cuenta, nombreCompleto, mate, fisica, ingles, metodologia, progra, analisis, internet, parcial)
								values(
								".$_POST['cuenta'].",
								'".$_POST['nombre']."',
								'".$_POST['mate']."',
								'".$_POST['fisica']."',
								'".$_POST['ingles']."',
								'".$_POST['metodologia']."',
								'".$_POST['progra']."',
								'".$_POST['analisis']."',
								'".$_POST['internet']."',
								'".$_POST['parcial']."')";				
	mysqli_query($conex, $consulta);
	mysql_query($conex, $consulta2);
	echo "Sísirve";
?>
