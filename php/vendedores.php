<?php 
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$query = "SELECT * FROM usuarios order by nombre asc";
$resultado = mysql_query($query);
while ($fila = mysql_fetch_array($resultado)) {
	echo "<option>$fila[nombre]</option>";
}
 ?>