<?php
	session_start();
	$bandera = false;
	
	/* VALIDA SI LOS DATOS INGRESADOS EN EL LOGIN SON CORRECTOS O NO*/
	if(isset($_GET['error']))
		$bandera = true;

	/*SI LA SESION ESTA ACTIVA DA ACCESO AL SISTEMA*/
	if(isset($_SESSION['activo']))
	{
		header("Location: views/max.php?op=home");
	}
	

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="css/estilosLogin.css">
	<link rel="stylesheet" href="assets/fontawesome/css/fontawesome-all.css">
</head>
<body>
	<br><br>
	<h1 align="center">Inicio de Sesión</h1>
	<div class="wrap">
		<!-- ** FORMULARIO LOGIN** -->
		<form action="controller/verificarLogin.php" method="POST">
			<i class="fas fa-user"></i>
			<input type="text" name="usuario" id="usuario" placeholder="Usuario" required>
			<i class="fas fa-key"></i>
			<input type="password" name="password" id="password" placeholder="Contraseña" required>
			<!-- == VALIDA SI HAY ERROR EN DATOS INGRESADOS ==-->
			<?php if ($bandera): ?>
				<div class="alert error">
					ERROR :: USUARIO Y/O CONTRASEÑA INCORRECTA
				</div>
			<?php endif; ?>
			<input type="submit" name="submit" class="btn btn-primary" value="ACCEDER">
		</form>
	</div>

	<!-- FOOTER -->
<footer class="main-footer" align="center">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <p>Max Galery &copy; 2018-2019</p>
      </div>
      
    </div>
  </div>
</footer>
</body>
</html>