<?php
	include("connect.php");
	$consulta = "INSERT INTO alumnos (cuenta, nombreCompleto, semestre) 
	VALUES(".$_POST['cuenta'].",'".$_POST['nombre']."','".$_POST['semestre']."')";
  $consulta2 = "INSERT INTO calificaciones (cuenta, nombreCompleto, mate, fisica, ingles, metodologia, progra,analisis,internet, parcial) values(".$POST['cuenta'].",'".$_POST['nombre']."','".$_POST['Mate']."','".$_POST['Fisica']."','".$_POST[Ingles]."', '".$_POST[Metodo]."','".$_POST[Progra]."','".$_POST[Analisis]."','".$_POST[Internet]"')";
	mysqli_query($conex, $consulta, $consulta2);
	echo "Sísirve";
?>
