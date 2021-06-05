<?php
	include("connect.php");
	$consulta = "INSERT INTO calificaciones (cuenta, nombreCompleto, semestre, mate, fisica, ingles, metodologia, 
		progra, analisis, internet, parcial)
		values('$_POST[cuenta]',
					'$_POST[nombre]',
					'$_POST[semestre]',		
					 $_POST[mate],
					 $_POST[fisica],
					 $_POST[ingles],
					 $_POST[metodo],
					 $_POST[progra],
					 $_POST[analisis],
					 $_POST[internet],
					'$_POST[parcial]'
					)";
											
	mysqli_query($conex, $consulta); //linea 19//
	echo "Sísirve";
	print_r($consulta)
?>
