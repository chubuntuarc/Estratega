<?php 
$host = "localhost";
$user = "root";
$pw = "";
$db = "estra";
 $dolar = $_POST['dolaresInsertar'];
$difPeso = $_POST['totalDif'];
$difDolar = $_POST['totalDllDif'];
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$query = "INSERT INTO movimientos (cantidad, divisa, tipo_cambio,tipo_movimiento, usuario) VALUES ({$_POST['dolaresInsertar']} ,'Dollar',{$_POST['cambioInsertar']},'Venta','$nom')";
$resultado = mysql_query($query);
 ?>