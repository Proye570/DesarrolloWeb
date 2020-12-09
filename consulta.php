<!DOCTYPE>
<html>
<head>
	<title> X</title>
</head>
<body>
<?php
	$server = "localhost";
	$usuario = "root";
	$contraseña = "";
	$bd = "datos";

	$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
		or die("Error en la conexión");

	$consulta = mysqli_query($conexion, "SELECT * from registro")
	or die("Error al traer los datos");

	echo '<table border="1">';
	echo '<tr>';
	echo '<th id="clave">Clave</th>';
	echo '<th id="nombre">Nombre</th>';
	echo '<th id="apellido">Apellido</th>';
	echo '<th id="usuario">Usuario</th>';
	echo '<th id="sexo">Sexo</th>';
	echo '</tr>';

	while ($extraido = mysqli_fetch_array($consulta))
{
	echo '<tr>';
	echo '<td>'.$extraido['clave'].'</td>';
	echo '<td>'.$extraido['nombre'].'</td>';
	echo '<td>'.$extraido['apellido'].'</td>';
	echo '<td>'.$extraido['usuario'].'</td>';
	echo '<td>'.$extraido['sexo'].'</td>';
	echo '<tr>';

}


	mysqli_close($conexion);
	echo '</table>';

?>



</body>
</html>