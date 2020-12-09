<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> ACCESORIOS SYSTEM TEAM</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="css/simple-line-icons.css"/>
<link rel="stylesheet" type="text/css" href="css/animate.css"/>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.theme.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,100,200,300,500,600,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps:400,700' rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="main-header" id="main-header">
  <nav class="navbar mynav navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#">Accesorios ST</a> </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="/Avance/index.php">Home</a></li>
          <li><a href="/Avance/alta.php">REGISTRO</a></li>
          <li><a href="/Avance/baja.php">BAJA</a></li>
          <li><a href="/Avance/cambio.php">ACTUALIZAR</a></li>
          <li><a href="/Avance/tabla.php">CONSULTAR TABLA</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<div class="banner" id="banner">
  <div class="bg-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="banner-text">
            <h2>Accesorios System <span></span> </h2>
            <p> REGISTRO DE USUARIO </p>
            <a href="#" class="banner-button"></a> </div>
        </div>
      </div>
    </div>
  </div>
</div>

<br>
<br>

	<form action="registro.php" method="POST">
	Clave: <input type="text" name="txtClave"> <br/>
	Nombre: <input type="text" name="txtNombre"> <br/>
	Apellido: <input type="text" name="txtApellido"> <br/>
	Usuario: <input type="text" name="txtUsuario"> <br/>
	Sexo:
	<select name="cmbSexo">
		<option value="Masculino">Masculino</option>
		<option value="Femenino">Femenino</option>
	</select> <br/>

	<input type="submit" value="Registrar" name="btnRegistrar">
	</form>
</body>
</html>
