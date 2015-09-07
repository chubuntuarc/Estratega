<?php 
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$ven = $_POST['selVendedor'];
$query = "SELECT * FROM arqueo where usuario = '$nom'";
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

$GLOBALS['sumaPesos'] = ($pesos1000 * 1000) + ($pesos500 * 500) + ($pesos200 * 200) + ($pesos100 * 100) + ($pesos50 * 50) + ($pesos20 * 20) + ($pesos10 * 10) + ($pesos5 * 5) + ($pesos2 * 2) + $pesos1 + ($pesos05 * 0.5);
$GLOBALS['sumaDolares'] = ($dolares100 * 100) + ($dolares50 * 50) + ($dolares20 * 20) + ($dolares10 * 10) + ($dolares5 * 5) + ($dolares2 * 2) + $dolares1;
$GLOBALS['sumaEuros'] = ($euros100 * 100) + ($euros50 * 50) + ($euros20 * 20) + ($euros10 * 10) + ($euros5 * 5) + ($euros2 * 2) + $euros1;
$GLOBALS['sumaCanadienses'] = ($canada100 * 100) + ($canada50 * 50) + ($canada20 * 20) + ($canada10 * 10) + ($canada5 * 5) + ($canada2 * 2) + $canada1;
?>