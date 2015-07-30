<!DOCTYPE html>
<html>
<head>
	<title>Login Estratega</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<div class="wrapper">
	<div class="container">
		<h1><img src="images/estratega.png"></h1>
		
		<form method="post" class="form">
			<input name="usuario" type="text" placeholder="Usuario"required>
			<input name="clave" type="password" placeholder="Contraseña" required>
			<button name="login" type="submit" id="login-button">Acceder</button>
		</form>
		<?php 

		if(isset($_POST['login'])){
			session_start();
			$_SESSION['user'] = $_POST['usuario'];
			$_SESSION['pass'] = $_POST['clave'];
			$passw = $_POST['clave'];
			error_reporting(0);
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "estra";
			$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
			mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
			$query = "SELECT * from usuarios where usuario = '{$_POST['usuario']}'";
			$resultado = mysql_query($query);
			while ($fila = mysql_fetch_array($resultado)) {
                                        $valor = $fila[pass];
                                    }
			if ($passw == $valor) {
				header('Location: movimientos.php');
			}
			else
			{
				  echo "<script>alert('Usuario y/o contraseña incorrectos');</script>";
			}
				
			}
			 ?>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
<footer class="footer">
        <strong>Control de Gastos</strong> v1.0.0 &copy; Copyright 2015
        Desarrollado por <a href="">Valkiria Tech</a>
</footer>
</body>
</html>