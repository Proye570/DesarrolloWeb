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
	$sexo = $_POST['cmbSexo'];
	

	$insertar = "INSERT into registro values ('$clave', '$nombre', '$apellido', '$usuario', '$sexo')";

	$resultado = mysqli_query($conexion, $insertar)
		or die("Error al insertar los registros");

	mysqli_close($conexion);
	echo "Datos insertados correctamente";

?>
</body>
</html>