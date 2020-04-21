<?php
	include_once dirname(__FILE__) . '/config.php';
	$con = mysqli_connect(HOST_DB, USUARIO_DB, USUARIO_PASS, NOMBRE_DB);
		if (mysqli_connect_errno()) {
		echo "Error en la conexión: " . mysqli_connect_error();
	}
	$sql = "SELECT * FROM Personas";
	$resultado = mysqli_query($con,$sql);
	while($fila = mysqli_fetch_array($resultado)) {
	  echo $fila ['Nombre'] . " " . $fila ['Apellido'];
	  echo "<br>";
	}
	mysqli_close($con);
?>
