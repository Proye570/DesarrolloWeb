<!DOCTYPE>
<html>
<head>
	<title> Eliminar registro </title>
</head>
<body>

<?php
$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "datos";


$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
or die ("Error al conectar");

$clave = $_POST['txtClave'];

mysqli_query($conexion,"DELETE FROM registro WHERE clave='$clave'")
or die ("Error al eliminar los datos");

mysqli_close($conexion); 
echo "Datos eliminados correctamente";
 ?>
</body>
</html>
