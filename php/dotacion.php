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

<?php 
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$ven = $_POST['selVendedor'];
$query = "SELECT * FROM arqueo where usuario = '$nombre'";
$resultado = mysql_query($query);
while ($fila = mysql_fetch_array($resultado)) {
    $GLOBALS['pesos1000'] = $fila[p1000];
    $GLOBALS['pesos500'] = $fila[p500];
    $GLOBALS['pesos200'] = $fila[p200];
    $GLOBALS['pesos100'] = $fila[p100];
    $GLOBALS['pesos50'] = $fila[p50];
    $GLOBALS['pesos20'] = $fila[p20];
    $GLOBALS['pesos10'] = $fila[p10];
    $GLOBALS['pesos5'] = $fila[p5];
    $GLOBALS['pesos2'] = $fila[p2];
    $GLOBALS['pesos1'] = $fila[p1];
    $GLOBALS['pesos05'] = $fila[p05];
    $GLOBALS['dolares100'] = $fila[d100];
    $GLOBALS['dolares50'] = $fila[d50];
    $GLOBALS['dolares20'] = $fila[d20];
    $GLOBALS['dolares10'] = $fila[d10];
    $GLOBALS['dolares5'] = $fila[d5];
    $GLOBALS['dolares2'] = $fila[d2];
    $GLOBALS['dolares1'] = $fila[d1];
    $GLOBALS['euros100'] = $fila[e100];
    $GLOBALS['euros50'] = $fila[e50];
    $GLOBALS['euros20'] = $fila[e20];
    $GLOBALS['euros10'] = $fila[e10];
    $GLOBALS['euros5'] = $fila[e5];
    $GLOBALS['euros2'] = $fila[e2];
    $GLOBALS['euros1'] = $fila[e1];
    $GLOBALS['canada100'] = $fila[c100];
    $GLOBALS['canada50'] = $fila[c50];
    $GLOBALS['canada20'] = $fila[c20];
    $GLOBALS['canada10'] = $fila[c10];
    $GLOBALS['canada5'] = $fila[c5];
    $GLOBALS['canada2'] = $fila[c2];
    $GLOBALS['canada1'] = $fila[c1];
}
?>

<?php 
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");

//Pesos
$pf1000 = $_POST['f1000p'];
$pm1000 = $_POST['p1000'];
$p1000 = $_POST['p1000'];
$pf500 = $_POST['f500p'];
$pm500 = $_POST['p500'];
$p500 = $pm500 + ($pf500 * 100);
$pf200 = $_POST['f200p'];
$pm200 = $_POST['p200'];
$p200 = $pm200 + ($pf200 * 100);
$pf100 = $_POST['f100p'];
$pm100 = $_POST['p100'];
$p100 = $pm100 + ($pf100 * 100);
$pf50 = $_POST['f50p'];
$pm50 = $_POST['p50'];
$p50 = $pm50 + ($pf50 * 100);
$pf20 = $_POST['f20p'];
$pm20 = $_POST['p20'];
$p20 = $pm20 + ($pf20 * 100);
$pf10 = $_POST['f10p'];
$pm10 = $_POST['p10'];
$p10 = $pm10 + ($pf10 * 100);
$pf5 = $_POST['f5p'];
$pm5 = $_POST['p5'];
$p5 = $pm5 + ($pf5 * 100);
$pf2 = $_POST['f2p'];
$pm2 = $_POST['p2'];
$p2 = $pm2 + ($pf2 * 100);
$pf1 = $_POST['f1p'];
$pm1 = $_POST['p1'];
$p1 = $pm1 + ($pf1 * 100);


if ($tPeso != 0 || $tDollar != 0 || $tCana != 0 || $tEuro != 0) {
    ?> <script>alert("Realize nuevamente el desglose");</script><?php   
}
else
{
    $query = "UPDATE arqueo SET p1000 = $p1000 , p500 = $p500 , p200 = $p200 , p100 = $p100 , p50 = $p50 , p20 = $p20 , p10 = $p10 , p5 = $p5 , p2 = $p2 , p1 = $p1 where usuario = '$nombre'";
   $resultado = mysql_query($query);
   echo $p1000;
    
}

 ?>