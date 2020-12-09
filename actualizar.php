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


	$clave = $_POST['txtClave'];
	$nombre = $_POST['txtNombre'];
	$apellido = $_POST['txtApellido'];
	$usuario = $_POST['txtUsuario'];	
	
	

	mysqli_query ($conexion, "UPDATE registro set nombre = '$nombre', apellido = '$apellido', usuario = '$usuario'  where clave='$clave'")
	or die("Error al actualizar");

	mysqli_close($conexion);
	echo "Datos modificados correctamente";

?>



</body>
</html>