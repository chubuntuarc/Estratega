<?php 
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$ven = $_POST['selVendedor'];
$query = "SELECT * FROM usuarios where nombre = '$ven'";
$resultado = mysql_query($query);
while ($fila = mysql_fetch_array($resultado)) {
    $GLOBALS['nombre'] = $fila[usuario];
}
?>

<?php 
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$query = "SELECT * FROM cajas WHERE usuario = '$nombre'";
$resultado = mysql_query($query);
while ($fila = mysql_fetch_array($resultado)) {
    $GLOBALS['dolarAnt'] = $fila[dolares];
    $GLOBALS['pesosAnt'] = $fila[pesos];
    $GLOBALS['euroAnt'] = $fila[euros];
    $GLOBALS['canAnt'] = $fila[dlls_can];
}
?>

<?php 
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");

$peso = $_POST['insertaPeso'];
$nuevoPeso = $pesosAnt + $peso;
$dolar = $_POST['insertaDolar'];
$nuevoDolar = $dolarAnt + $dolar;
$canada = $_POST['insertaCana'];
$nuevoCana = $canAnt + $canada;
$euro = $_POST['insertaEuro'];
$nuevoEuro = $euroAnt + $euro;

$tPeso = $_POST['totalConv'];
$tDollar = $_POST['totalDllConv'];
$tCana = $_POST['totalCanConv'];
$tEuro = $_POST['totalEuroConv'];

if ($tPeso != 0 || $tDollar != 0 || $tCana != 0 || $tEuro != 0) {
    ?> <script>alert("No se realizo correctamente el desglose");</script><?php   
}
else
{
    $query = "UPDATE cajas SET pesos = $nuevoPeso , dolares = $nuevoDolar , dlls_can = $nuevoCana , euros = $nuevoEuro where usuario = '$nombre'";
   $resultado = mysql_query($query);
    
}

 ?>

 <?php 
 $peso = $_POST['insertaPeso'];
 if ($peso != 0) {
     $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$query = "INSERT INTO movimientos (cantidad, divisa,tipo_movimiento, usuario) VALUES ($peso , 'Peso', 'Dotacion','$nombre - $nom')";
$resultado = mysql_query($query);
 }
?>

 <?php 
 $dolar = $_POST['insertaDolar'];
 if ($dolar != 0) {
     $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$query = "INSERT INTO movimientos (cantidad, divisa,tipo_movimiento, usuario) VALUES ($dolar , 'Dollar', 'Dotacion','$nombre - $nom')";
$resultado = mysql_query($query);
 }
?>

<?php 
 $canada = $_POST['insertaCana'];
 if ($canada != 0) {
     $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$query = "INSERT INTO movimientos (cantidad, divisa,tipo_movimiento, usuario) VALUES ($canada , 'Dll Can', 'Dotacion','$nombre - $nom')";
$resultado = mysql_query($query);
 }
?>

<?php 
 $euro = $_POST['insertaEuro'];
 if ($euro != 0) {
     $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$query = "INSERT INTO movimientos (cantidad, divisa,tipo_movimiento, usuario) VALUES ($euro , 'Euro', 'Dotacion','$nombre - $nom')";
$resultado = mysql_query($query);
 }
?>