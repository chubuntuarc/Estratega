<?php 
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$query = "SELECT * FROM cajas WHERE usuario = '$nom'";
$resultado = mysql_query($query);
while ($fila = mysql_fetch_array($resultado)) {
    $GLOBALS['pesosAnt'] = $fila[pesos];
}
 ?>
<?php 
$peso = $_POST["cantidadAS"];
$cambio = $_POST["totalDif"];
$nuevoPeso = $pesosAnt - $peso;
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
if ($peso <= $pesosAnt) {
	if ($cambio == 0) {
		$query = "UPDATE cajas SET pesos = $nuevoPeso WHERE usuario = '$nom'";
        $resultado = mysql_query($query);
	}
	else
	{
		?> <script>alert("Existe un adiferencia en el desglose");</script><?php 
	}
        
}
else
        {
            ?> <script>alert("No cuenta con suficiente efectivo en caja");</script><?php 
        }
?>
<?php
$peso = $_POST["cantidadAS"];
$cambio = $_POST["totalDif"];
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$query = "INSERT INTO adicionales (concepto, comentario, tipo, cantidad,usuario)
VALUES ('{$_POST["conceptoAS"]}','{$_POST["comentarioAS"]}','Salida',{$_POST["cantidadAS"]},'$nom')";
if ($peso <= $pesosAnt && $cambio == 0) {
     $resultado = mysql_query($query);
}
?>
