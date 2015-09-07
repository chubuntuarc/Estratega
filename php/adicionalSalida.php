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

<!--Sección en la que se maneja la cantidad de billetes del arqueo-->

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
}
?>

<?php 
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");

//Salida Pesos
$pf1000 = $_POST['fajillaPMill'];
$pm1000 = $_POST['MIL'];
$p1000 = $pesos1000 - $pm1000 - ($pf1000 / 1000);
$pf500 = $_POST['fajillaP500'];
$pm500 = $_POST['500'];
$p500 = $pesos500 - $pm500 - ($pf500 / 500);
$pf200 = $_POST['fajillaP200'];
$pm200 = $_POST['200'];
$p200 = $pesos200 - $pm200 - ($pf200 / 200);
$pf100 = $_POST['fajillaP100'];
$pm100 = $_POST['100'];
$p100 = $pesos100 - $pm100 - ($pf100 / 100);
$pf50 = $_POST['fajillaP50'];
$pm50 = $_POST['50'];
$p50 = $pesos50 - $pm50 - ($pf50 / 50);
$pf20 = $_POST['fajillaP20'];
$pm20 = $_POST['20'];
$p20 = $pesos20 - $pm20 - ($pf20 / 20);
$pf10 = $_POST['fajillaP10'];
$pm10 = $_POST['10'];
$p10 = $pesos10 - $pm10 - ($pf10 / 10);
$pf5 = $_POST['fajillaP5'];
$pm5 = $_POST['5'];
$p5 = $pesos5 - $pm5 - ($pf5 / 5);
$pf2 = $_POST['fajillaP2'];
$pm2 = $_POST['2'];
$p2 = $pesos2 - $pm2 - ($pf2 / 2);
$pf1 = $_POST['fajillaP1'];
$pm1 = $_POST['1'];
$p1 = $pesos1 - $pm1 - ($pf1 / 1);
$pf05 = $_POST['fajillaC50'];
$pm05 = $_POST['05'];
$p05 = $pesos05 - $pm05 - ($pf05 / 0.5);


if ($pesosAnt >= $peso && $totalCambio == 0.00) {
    $query = "UPDATE arqueo SET p1000 = $p1000 , p500 = $p500 , p200 = $p200 , p100 = $p100 , p50 = $p50 , p20 = $p20 , p10 = $p10 , p5 = $p5 , p2 = $p2 , p1 = $p1 , p05 = $p05 where usuario = '$nom'";
   $resultado = mysql_query($query);
}
else
{
      
}

 ?>