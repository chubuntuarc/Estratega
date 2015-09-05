<?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT * FROM cajas WHERE usuario = '$nom'";
            $resultado = mysql_query($query);
            while ($fila = mysql_fetch_array($resultado)) {
                $GLOBALS['dolarAnt'] = $fila[dolares];
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
            $GLOBALS['variable'];
            $_SESSION['dolar'] = $_POST['dolaresInsertar'];
            $_SESSION['dolarA'] = $dolarAnt;
            $_SESSION['ttlC'] = $_POST['totalConv'];
            $_SESSION['cambio'] = $_POST['cambioInsertar'];
            $_SESSION['pesosA'] = $pesosAnt;
            $_SESSION['redondo'] = $redondoAnt;
            $_SESSION['tipoDivisa'] = "Dollar";
            $_SESSION['tipoMov'] = "Venta";
            $_SESSION['updateDivisa'] = "dolares";
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");

            if ($dolarAnt >= $dolar && $ttcs == 0.00 ) {
                $query = "INSERT INTO movimientos (cantidad, divisa, tipo_cambio,tipo_movimiento, usuario) VALUES ({$_POST['dolaresInsertar']} ,'Dollar',{$_POST['cambioInsertar']},'Venta','$nom')";
                $resultado = mysql_query($query);
            }
            elseif ($dolarAnt < $dolar) {
                    ?> <script>alert("No cuenta con suficientes dólares en caja");</script><?php   
            }
            else if ($dolarAnt >= $dolar && $ttcs != 0.00 ) {
                $_SESSION['diferencia'] =$_POST['totalConvS'];
                ?> <script>document.location=("redondeo.php");</script><?php
            }
     ?>
      <?php 
            $totalCambio = $_POST['totalConvS'];
            $cambio = $_POST['cambioInsertar'];
            $peso = $_POST['pesosInsertar'];
            $difPeso = $_POST['totalDif'];
            $difDolar = $_POST['totalDllDif'];
            $dolar = $_POST['dolaresInsertar'];
            $diferencia = $_POST['totalConvS'];
            $nuevoPeso = $pesosAnt + $peso;
                $nuevoDolar = $dolarAnt - $dolar;
                $nuevoRedondeo = $redondoAnt - $diferencia;
                

            $_SESSION['dolar'] = $_POST['dolaresInsertar'];
            $_SESSION['dolarA'] = $dolarAnt;
            $_SESSION['ttlC'] = $_POST['pesosInsertar'];
            $_SESSION['cambio'] = $_POST['cambioInsertar'];
            $_SESSION['pesosA'] = $pesosAnt;
            $_SESSION['redondo'] = $redondoAnt;
            $_SESSION['tipoDivisa'] = "Dollar";
            $_SESSION['tipoMov'] = "Venta";

            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            if ($dolarAnt >= $dolar && $ttcs == 0.00) {
             $query = "UPDATE cajas SET dolares = $nuevoDolar, pesos = $nuevoPeso, redondeo = $nuevoRedondeo WHERE usuario = '$nom'";
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
    $GLOBALS['dolares100'] = $fila[d100];
    $GLOBALS['dolares50'] = $fila[d50];
    $GLOBALS['dolares20'] = $fila[d20];
    $GLOBALS['dolares10'] = $fila[d10];
    $GLOBALS['dolares5'] = $fila[d5];
    $GLOBALS['dolares2'] = $fila[d2];
    $GLOBALS['dolares1'] = $fila[d1];
}
?>

<?php 
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");

//Entrada Pesos
$pf1000 = $_POST['f1'];
$pm1000 = $_POST['MIL'];
$p1000 = $pm1000 + ($pf1000 * 100) + $pesos1000;
$pf500 = $_POST['f2'];
$pm500 = $_POST['500'];
$p500 = $pm500 + ($pf500 * 100) + $pesos500;
$pf200 = $_POST['f3'];
$pm200 = $_POST['200'];
$p200 = $pm200 + ($pf200 * 100) + $pesos200;
$pf100 = $_POST['f4'];
$pm100 = $_POST['100'];
$p100 = $pm100 + ($pf100 * 100) + $pesos100;
$pf50 = $_POST['f5'];
$pm50 = $_POST['50'];
$p50 = $pm50 + ($pf50 * 100) + $pesos50;
$pf20 = $_POST['f6'];
$pm20 = $_POST['20'];
$p20 = $pm20 + ($pf20 * 100) + $pesos20;
$pf10 = $_POST['f7'];
$pm10 = $_POST['10'];
$p10 = $pm10 + ($pf10 * 100) + $pesos10;
$pf5 = $_POST['f8'];
$pm5 = $_POST['5'];
$p5 = $pm5 + ($pf5 * 100) + $pesos5;
$pf2 = $_POST['f9'];
$pm2 = $_POST['2'];
$p2 = $pm2 + ($pf2 * 100) + $pesos2;
$pf1 = $_POST['f10'];
$pm1 = $_POST['1'];
$p1 = $pm1 + ($pf1 * 100) + $pesos1;


if ($tPeso != 0 || $tDollar != 0 || $tCana != 0 || $tEuro != 0) {
      
}
else
{
    $query = "UPDATE arqueo SET p1000 = $p1000 , p500 = $p500 , p200 = $p200 , p100 = $p100 , p50 = $p50 , p20 = $p20 , p10 = $p10 , p5 = $p5 , p2 = $p2 , p1 = $p1 where usuario = '$nom'";
   $resultado = mysql_query($query);
   
    
}

 ?>

 <?php 
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");

//Salida de Dólares
$df100 = $_POST['f15'];
$dm100 = $_POST['d100Dll'];
$d100 = $dolares100 - $dm100 - ($df100 * 100);
$df50 = $_POST['f16'];
$dm50 = $_POST['d50Dll'];
$d50 = $dolares50 - $dm50 - ($df50 * 100);
$df20 = $_POST['f17'];
$dm20 = $_POST['d20Dll'];
$d20 = $dolares20 - $dm20 - ($df20 * 100);
$df10 = $_POST['f18'];
$dm10 = $_POST['d10Dll'];
$d10 = $dolares10 - $dm10 - ($df10 * 100);
$df5 = $_POST['f19'];
$dm5 = $_POST['d5Dll'];
$d5 = $dolares5 - $dm5 - ($df5 * 100);
$df2 = $_POST['f20'];
$dm2 = $_POST['d2Dll'];
$d2 = $dolares2 - $dm2 - ($df2 * 100);
$df1 = $_POST['f21'];
$dm1 = $_POST['d1Dll'];
$d1 = $dolares1 - $dm1 - ($df1 * 100);


if ($tPeso != 0 || $tDollar != 0 || $tCana != 0 || $tEuro != 0) {
      
}
else
{
    $query = "UPDATE arqueo SET d100 = $d100 , d50 = $d50 , d20 = $d20 , d10 = $d10 , d5 = $d5 , d2 = $d2 , d1 = $d1 where usuario = '$nom'";
   $resultado = mysql_query($query);
   
    
}

 ?>
     
<!--
     <?php 
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");

//Salida Pesos
$pf1000 = $_POST['f22'];
$pm1000 = $_POST['MILS'];
$p1000 = $pm1000 + ($pf1000 * 100) - $pesos1000;
$pf500 = $_POST['f23'];
$pm500 = $_POST['m500S'];
$p500 = $pm500 + ($pf500 * 100) - $pesos500;
$pf200 = $_POST['f24'];
$pm200 = $_POST['m200S'];
$p200 = $pm200 + ($pf200 * 100) - $pesos200;
$pf100 = $_POST['f25'];
$pm100 = $_POST['m100S'];
$p100 = $pm100 + ($pf100 * 100) - $pesos100;
$pf50 = $_POST['f26'];
$pm50 = $_POST['m50S'];
$p50 = $pm50 + ($pf50 * 100) - $pesos50;
$pf20 = $_POST['f27'];
$pm20 = $_POST['m20S'];
$p20 = $pm20 + ($pf20 * 100) - $pesos20;
$pf10 = $_POST['f28'];
$pm10 = $_POST['m10S'];
$p10 = $pm10 + ($pf10 * 100) - $pesos10;
$pf5 = $_POST['f29'];
$pm5 = $_POST['m5S'];
$p5 = $pm5 + ($pf5 * 100) - $pesos5;
$pf2 = $_POST['f30'];
$pm2 = $_POST['m2S'];
$p2 = $pm2 + ($pf2 * 100) - $pesos2;
$pf1 = $_POST['f31'];
$pm1 = $_POST['m1S'];
$p1 = $pm1 + ($pf1 * 100) - $pesos1;


if ($tPeso != 0 || $tDollar != 0 || $tCana != 0 || $tEuro != 0) {
      
}
else
{
    $query = "UPDATE arqueo SET p1000 = $p1000 , p500 = $p500 , p200 = $p200 , p100 = $p100 , p50 = $p50 , p20 = $p20 , p10 = $p10 , p5 = $p5 , p2 = $p2 , p1 = $p1 where usuario = '$nom'";
   $resultado = mysql_query($query);
   
    
}

 ?>  -->