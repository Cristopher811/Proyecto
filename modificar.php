<?php
	include("connect.php");
	$consulta = "UPDATE alumnos SET cuenta=".$_POST['cuenta'].", nombreCompleto='".$_POST['nombre']."', semestre='".$_POST['semestre']."' WHERE cuenta=".$_POST['cuentaValidar'];
	mysqli_query($conex,$consulta);
	echo "Hecho pordos";
?>
