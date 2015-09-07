<?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT * FROM cajas WHERE usuario = '$nom'";
            $resultado = mysql_query($query);
            while ($fila = mysql_fetch_array($resultado)) {
                $GLOBALS['dolarAnt'] = $fila[dlls_can];
                $GLOBALS['pesosAnt'] = $fila[pesos];
                $GLOBALS['redondoAnt'] = $fila[redondeo];
            }
     ?>
    <?php 
            $totalCambio = $_POST['totalConv'];
            $dolar = $_POST['dolaresInsertar'];
            $difPeso = $_POST['totalDif'];
            $diferencia = $_POST['totalDifS'];
            $difDolar = $_POST['totalDllDif'];
            $ttcs = $_POST['totalConvS'];
            $peso = $_POST['subtotal'];
            $GLOBALS['variable'];
            $_SESSION['dolar'] = $_POST['dolaresInsertar'];
            $_SESSION['dolarA'] = $dolarAnt;
            $_SESSION['ttlC'] = $_POST['totalConv'];
            $_SESSION['cambio'] = $_POST['cambioInsertar'];
            $_SESSION['pesosA'] = $pesosAnt;
            $_SESSION['redondo'] = $redondoAnt;
            $_SESSION['tipoDivisa'] = "Dll Can";
            $_SESSION['tipoMov'] = "Compra";
            $_SESSION['updateDivisa'] = "dlls_can";
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");

            if ($pesosAnt >= $peso && $totalCambio == 0.00 && $ttcs == 0.00 ) {
                $query = "INSERT INTO movimientos (cantidad, divisa, tipo_cambio,tipo_movimiento, usuario) VALUES ({$_POST['dolaresInsertar']} ,'Dll Can',{$_POST['cambioInsertar']},'Compra','$nom')";
                $resultado = mysql_query($query);
            }
            elseif ($pesosAnt < $peso ) {
                    ?> <script>alert("No cuenta con suficientes pesos en caja");</script><?php   
            }
            else if ($pesosAnt >= $peso && $totalCambio != 0.00 ) {
                $_SESSION['diferencia'] =$_POST['totalConv'];
                ?> <script>document.location=("redondeo2.php");</script><?php
            }
     ?>
      <?php 
            $totalCambio = $_POST['totalConv'];
            $cambio = $_POST['cambioInsertar'];
            $peso = $_POST['subtotal'];
            $difPeso = $_POST['totalDif'];
            $difDolar = $_POST['totalDllDif'];
            $dolar = $_POST['dolaresInsertar'];
            $diferencia = $_POST['totalConvS'];
            $nuevoPeso = $pesosAnt - $peso;
                $nuevoDolar = $dolarAnt + $dolar;
                $nuevoRedondeo = $redondoAnt + $totalCambio;
                

            $_SESSION['dolar'] = $_POST['dolaresInsertar'];
            $_SESSION['dolarA'] = $dolarAnt;
            $_SESSION['ttlC'] = $_POST['pesosInsertar'];
            $_SESSION['cambio'] = $_POST['cambioInsertar'];
            $_SESSION['pesosA'] = $pesosAnt;
            $_SESSION['redondo'] = $redondoAnt;
            $_SESSION['tipoDivisa'] = "Dll Can";
            $_SESSION['tipoMov'] = "Compra";

            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            if ($pesosAnt >= $peso && $totalCambio == 0.00) {
             $query = "UPDATE cajas SET dlls_can = $nuevoDolar, pesos = $nuevoPeso, redondeo = $nuevoRedondeo WHERE usuario = '$nom'";
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

 <?php 
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");

//Entrada de Dólares
$df100 = $_POST['f15'];
$dm100 = $_POST['d100Dll'];
$d100 = $canada100 + $dm100 + ($df100 * 100) - $_POST['f25'] - $_POST['m100S'];
$df50 = $_POST['f16'];
$dm50 = $_POST['d50Dll'];
$d50 = $canada50 + $dm50 + ($df50 * 100) - $_POST['f26'] - $_POST['m50S'];
$df20 = $_POST['f17'];
$dm20 = $_POST['d20Dll'];
$d20 = $canada20 + $dm20 + ($df20 * 100) - $_POST['f27'] - $_POST['m20S'];
$df10 = $_POST['f18'];
$dm10 = $_POST['d10Dll'];
$d10 = $canada10 + $dm10 + ($df10 * 100) - $_POST['f28'] - $_POST['m10S'];
$df5 = $_POST['f19'];
$dm5 = $_POST['d5Dll'];
$d5 = $canada5 + $dm5 + ($df5 * 100) - $_POST['f29'] - $_POST['m5S'];
$df2 = $_POST['f20'];
$dm2 = $_POST['d2Dll'];
$d2 = $canada2 + $dm2 + ($df2 * 100) - $_POST['f30'] - $_POST['m2S'];
$df1 = $_POST['f21'];
$dm1 = $_POST['d1Dll'];
$d1 = $canada1 + $dm1 + ($df1 * 100) - $_POST['f31'] - $_POST['m1S'];


if ($pesosAnt >= $peso && $totalCambio == 0.00) {
    $query = "UPDATE arqueo SET c100 = $d100 , c50 = $d50 , c20 = $d20 , c10 = $d10 , c5 = $d5 , c2 = $d2 , c1 = $d1 where usuario = '$nom'";
   $resultado = mysql_query($query);  
}
else
{
        
}

 ?>          