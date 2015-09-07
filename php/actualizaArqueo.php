<?php 
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
if (isset($_POST['listo'])) {
	if ($_POST['pesosReales'] == 0.0 && $_POST['dolaresReales'] == 0.0 && $_POST['eurosReales'] == 0.0 && $_POST['canadiensesReales'] == 0.0) {
    $GLOBALS['pesos1000'] = ($_POST['fajilla1000Pesos'] * 100) + $_POST['moneda1000Pesos'];
    $GLOBALS['pesos500'] = $_POST['fajilla500Pesos'] * 100) + $_POST['moneda500Pesos'];
    $GLOBALS['pesos200'] = $_POST['fajilla200Pesos'] * 100) + $_POST['moneda200Pesos'];
    $GLOBALS['pesos100'] = $_POST['fajilla100Pesos'] * 100) + $_POST['moneda100Pesos'];
    $GLOBALS['pesos50'] = $_POST['fajilla50Pesos'] * 100) + $_POST['moneda50Pesos'];
    $GLOBALS['pesos20'] = $_POST['fajilla20Pesos'] * 100) + $_POST['moneda20Pesos'];
    $GLOBALS['pesos10'] = $_POST['fajilla10Pesos'] * 100) + $_POST['moneda10Pesos'];
    $GLOBALS['pesos5'] = $_POST['fajilla5Pesos'] * 100) + $_POST['moneda5Pesos'];
    $GLOBALS['pesos2'] = $_POST['fajilla2Pesos'] * 100) + $_POST['moneda2Pesos'];
    $GLOBALS['pesos1'] = $_POST['fajilla1Pesos'] * 100) + $_POST['moneda1Pesos'];
    $GLOBALS['pesos05'] = $_POST['fajilla05Pesos'] * 100) + $_POST['moneda05Pesos'];
    $GLOBALS['dolares100'] = $_POST['fajilla100Dolares'] * 100) + $_POST['moneda100Dolares'];
    $GLOBALS['dolares50'] = $_POST['fajilla50Dolares'] * 100) + $_POST['moneda50Dolares'];
    $GLOBALS['dolares20'] = $_POST['fajilla20Dolares'] * 100) + $_POST['moneda20Dolares'];
    $GLOBALS['dolares10'] = $_POST['fajilla10Dolares'] * 100) + $_POST['moneda10Dolares'];
    $GLOBALS['dolares5'] = $_POST['fajilla5Dolares'] * 100) + $_POST['moneda5Dolares'];
    $GLOBALS['dolares2'] = $_POST['fajilla2Dolares'] * 100) + $_POST['moneda2Dolares'];
    $GLOBALS['dolares1'] = $_POST['fajilla1Dolares'] * 100) + $_POST['moneda1Dolares'];
    $GLOBALS['euros100'] = $_POST['fajilla100Euros'] * 100) + $_POST['moneda100Euros'];
    $GLOBALS['euros50'] = $_POST['fajilla50Euros'] * 100) + $_POST['moneda50Euros'];
    $GLOBALS['euros20'] = $_POST['fajilla20Euros'] * 100) + $_POST['moneda20Euros'];
    $GLOBALS['euros10'] = $_POST['fajilla10Euros'] * 100) + $_POST['moneda10Euros'];
    $GLOBALS['euros5'] = $_POST['fajilla5Euros'] * 100) + $_POST['moneda5Euros'];
    $GLOBALS['euros2'] = $_POST['fajilla2Euros'] * 100) + $_POST['moneda2Euros'];
    $GLOBALS['euros1'] = $_POST['fajilla1Euros'] * 100) + $_POST['moneda1Euros'];
    $GLOBALS['canada100'] = $_POST['fajilla100Canadienses'] * 100) + $_POST['moneda100Canadienses'];
    $GLOBALS['canada50'] = $_POST['fajilla50Canadienses'] * 100) + $_POST['moneda50Canadienses'];
    $GLOBALS['canada20'] = $_POST['fajilla20Canadienses'] * 100) + $_POST['moneda20Canadienses'];
    $GLOBALS['canada10'] = $_POST['fajilla10Canadienses'] * 100) + $_POST['moneda10Canadienses'];
    $GLOBALS['canada5'] = $_POST['fajilla5Canadienses'] * 100) + $_POST['moneda5Canadienses'];
    $GLOBALS['canada2'] = $_POST['fajilla2Canadienses'] * 100) + $_POST['moneda2Canadienses'];
    $GLOBALS['canada1'] = $_POST['fajilla1Canadienses'] * 100) + $_POST['moneda1Canadienses'];
    }
}
    
?>

<?php 
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$query = "UPDATE arqueo SET  p1000 = $pesos1000 , p500 = $pesos500 , p200 = $pesos200 , p100 = $pesos100 , p50 = $pesos50 , p20 = $pesos20 , p10 = $pesos10 , p5 = $pesos5 , p2 = $pesos2 , p1 = $pesos1 , p05 = $pesos05 where nombre = '$nom'";
if ($_POST['pesosReales'] == 0.0 && $_POST['dolaresReales'] == 0.0 && $_POST['eurosReales'] == 0.0 && $_POST['canadiensesReales'] == 0.0) {
	$resultado = mysql_query($query);
}
?>

<?php 
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$query = "UPDATE arqueo SET  d100 = $dolares100 , d50 = $dolares50 , d20 = $dolares20 , d10 = $dolares10 , d5 = $dolares5 , d2 = $dolares2 , d1 = $dolares1 where nombre = '$nom'";
if ($_POST['pesosReales'] == 0.0 && $_POST['dolaresReales'] == 0.0 && $_POST['eurosReales'] == 0.0 && $_POST['canadiensesReales'] == 0.0) {
	$resultado = mysql_query($query);
}
?>

<?php 
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$query = "UPDATE arqueo SET  e100 = $euros100 , e50 = $euros50 , e20 = $euros20 , e10 = $euros10 , e5 = $euros5 , e2 = $euros2 , e1 = $euros1 where nombre = '$nom'";
if ($_POST['pesosReales'] == 0.0 && $_POST['dolaresReales'] == 0.0 && $_POST['eurosReales'] == 0.0 && $_POST['canadiensesReales'] == 0.0) {
	$resultado = mysql_query($query);
}
?>

<?php 
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$query = "UPDATE arqueo SET  c100 = $canada100 , c50 = $canada50 , c20 = $canada20 , c10 = $canada10 , c5 = $canada5 , c2 = $canada2 , c1 = $canada1 where nombre = '$nom'";
if ($_POST['pesosReales'] == 0.0 && $_POST['dolaresReales'] == 0.0 && $_POST['eurosReales'] == 0.0 && $_POST['canadiensesReales'] == 0.0) {
	$resultado = mysql_query($query);
}
?>