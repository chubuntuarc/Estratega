<?php
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$query = "INSERT INTO adicionales (concepto, comentario, tipo, cantidad,documento,usuario)
VALUES ('Agua','','Salida',{$_POST["cantidadAS"]},'NO','$nom')";
$resultado = mysql_query($query);
?>