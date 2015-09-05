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
            $GLOBALS['variable'];
            $_SESSION['dolar'] = $_POST['dolaresInsertar'];
            $_SESSION['dolarA'] = $dolarAnt;
            $_SESSION['ttlC'] = $_POST['totalConv'];
            $_SESSION['cambio'] = $_POST['cambioInsertar'];
            $_SESSION['pesosA'] = $pesosAnt;
            $_SESSION['redondo'] = $redondoAnt;
            $_SESSION['tipoDivisa'] = "Dll Can";
            $_SESSION['tipoMov'] = "Venta";
            $_SESSION['updateDivisa'] = "dlls_can";
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");

            if ($dolarAnt >= $dolar && $ttcs == 0.00 ) {
                $query = "INSERT INTO movimientos (cantidad, divisa, tipo_cambio,tipo_movimiento, usuario) VALUES ({$_POST['dolaresInsertar']} ,'Dll Can',{$_POST['cambioInsertar']},'Venta','$nom')";
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
             $query = "UPDATE cajas SET dlls_can = $nuevoDolar, pesos = $nuevoPeso, redondeo = $nuevoRedondeo WHERE usuario = '$nom'";
               $resultado = mysql_query($query);
            }            

     ?>
     <!--Sección en la que se maneja la cantidad de billetes del arqueo-->
     <?php 
            //Se obtienen los valores actuales del arqueo en pesos
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT * FROM calculo_arqueo WHERE divisa = 'pesos' and usuario = '$nom'";
            $resultado = mysql_query($query);
            while ($fila = mysql_fetch_array($resultado)) {
                $GLOBALS['Pesos1000'] = $fila[d1000];
                $GLOBALS['Pesos500'] = $fila[d500];
                $GLOBALS['Pesos200'] = $fila[d200];
                $GLOBALS['Pesos100'] = $fila[d100];
                $GLOBALS['Pesos50'] = $fila[d50];
                $GLOBALS['Pesos20'] = $fila[d20];
                $GLOBALS['Pesos10'] = $fila[d10];
                $GLOBALS['Pesos5'] = $fila[d5];
                $GLOBALS['Peso1'] = $fila[d1];
                $GLOBALS['Centavos50'] = $fila[c5];
            }
     ?>
     <?php 
            $_SESSION['dolarA'] = $dolarAnt;
            $dolar = $_POST['dolaresInsertar'];
            $_SESSION['dolar'] = $_POST['dolaresInsertar'];
            $difPeso = $_POST['totalDif'];
            $difDolar = $_POST['totalDllDif'];
            $diferencia = $_POST['totalDifS'];

            $arq1000 = $Pesos1000 + $_POST['MIL'] + ($_POST['f1'] * 100);
            $arq500 = $Pesos500 + $_POST['500'] + ($_POST['f2'] * 100);
            $arq200 = $Pesos200 + $_POST['200'] + ($_POST['f3'] * 100);
            $arq100 = $Pesos100 + $_POST['100'] + ($_POST['f4'] * 100);
            $arq50 = $Pesos50 + $_POST['50'] + ($_POST['f5'] * 100);
            $arq20 = $Pesos20 + $_POST['20'] + ($_POST['f6'] * 100);
            $arq10 = $Pesos10 + $_POST['10'] + ($_POST['f7'] * 100);
            $arq5 = $Pesos5 + $_POST['5'] + ($_POST['f8'] * 100);
            $arq2 = $Pesos2 + $_POST['2'] + ($_POST['f9'] * 100);
            $arq1 = $Peso1 + $_POST['1'] + ($_POST['f10'] * 100);
            $arq05 = $Centavos50 + $_POST['05'] + ($_POST['f11'] * 100);

            //Variables usadas en la pantalla de revisión del arqueo
            $_SESSION['1000PArqueo'] = $arq1000;
            $_SESSION['500PArqueo'] = $arq500;
            $_SESSION['200PArqueo'] = $arq200;
            $_SESSION['100PArqueo'] = $arq100;
            $_SESSION['50PArqueo'] = $arq50;
            $_SESSION['20PArqueo'] = $arq20;
            $_SESSION['10PArqueo'] = $arq10;
            $_SESSION['5PArqueo'] = $arq5;
            $_SESSION['2PArqueo'] = $arq2;
            $_SESSION['1PArqueo'] = $arq1;
            $_SESSION['05PArqueo'] = $arq05;

            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            if ($dolarAnt >= $dolar && $diferencia == 0.00 && $difDolar == 0.00) {
                $query = "UPDATE calculo_arqueo SET d1000 = $arq1000, d500 = $arq500, d200 = $arq200, d100 = $arq100, d50 = $arq50, d20 = $arq20, d10 = $arq10, d5 = $arq5, d2 = $arq2, d1 = $arq1, c5 = $arq05 WHERE divisa = 'pesos' and usuario = '$nom'";
               $resultado = mysql_query($query);
            }            

     ?>
     <?php 
            //Se obtienen los valores actuales del arqueo en dólares
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT * FROM calculo_arqueo WHERE divisa = 'dolares' and usuario = '$nom'";
            $resultado = mysql_query($query);
            while ($fila = mysql_fetch_array($resultado)) {
                $GLOBALS['Dolares100'] = $fila[d100];
                $GLOBALS['Dolares50'] = $fila[d50];
                $GLOBALS['Dolares20'] = $fila[d20];
                $GLOBALS['Dolares10'] = $fila[d10];
                $GLOBALS['Dolares5'] = $fila[d5];
                $GLOBALS['Dolares2'] = $fila[d2];
                $GLOBALS['Dolar1'] = $fila[d1];
            }
     ?>
     <?php 
            $_SESSION['dolarA'] = $dolarAnt;
            $dolar = $_POST['dolaresInsertar'];
            $_SESSION['dolar'] = $_POST['dolaresInsertar'];
            $difPeso = $_POST['totalDif'];
            $difDolar = $_POST['totalDllDif'];
            $diferencia = $_POST['totalDifS'];

            $f15 = $_POST['f15'] * 100;
            $f16 = $_POST['f16'] * 100;
            $f17 = $_POST['f17'] * 100;
            $f18 = $_POST['f18'] * 100;
            $f19 = $_POST['f19'] * 100;
            $f20 = $_POST['f20'] * 100;
            $f21 = $_POST['f21'] * 100;
            $arq100D = $Dolares100 - $_POST['100Dll'] - $f15;
            $arq50D = $Dolares50 - $_POST['50Dll'] - $f16;
            $arq20D = $Dolares20 - $_POST['20Dll'] - $f17;
            $arq10D = $Dolares10 - $_POST['10Dll'] - $f18;
            $arq5D = $Dolares5 - $_POST['5Dll'] - $f19;
            $arq2D = $Dolares2 - $_POST['2Dll'] - $f20;
            $arq1D = $Dolar1 - $_POST['1Dll'] - $f21;

            //Variables usadas en la pantalla de revisión del arqueo
            $_SESSION['100DArqueo'] = $arq100D;
            $_SESSION['50DArqueo'] = $arq50D;
            $_SESSION['20DArqueo'] = $arq20D;
            $_SESSION['10DArqueo'] = $arq10D;
            $_SESSION['5DArqueo'] = $arq5D;
            $_SESSION['2DArqueo'] = $arq2D;
            $_SESSION['1DArqueo'] = $arq1D;

            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            if ($dolarAnt >= $dolar && $diferencia == 0.00 && $difDolar == 0.00) {
                $query = "UPDATE calculo_arqueo SET d100 = $arq100D, d50 = $arq50D, d20 = $arq20D, d10 = $arq10D, d5 = $arq5D,d2 = $arq2D, d1 = $arq1D WHERE divisa = 'dolares' and usuario = '$nom'";
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

//Entrada Pesos
$pf1000 = $_POST['fajillaPMill'];
$pm1000 = $_POST['MIL'];
$p1000 = $pm1000 + ($pf1000 / 1000) + $pesos1000 - ($_POST['fajillaPMillS'] / 1000) - $_POST['MILS'];
$pf500 = $_POST['fajillaP500'];
$pm500 = $_POST['500'];
$p500 = $pm500 + ($pf500 / 500) + $pesos500 - ($_POST['fajillaP500S'] / 500) - $_POST['m500S'];
$pf200 = $_POST['fajillaP200'];
$pm200 = $_POST['200'];
$p200 = $pm200 + ($pf200 / 200) + $pesos200 - ($_POST['fajillaP200S'] / 200) - $_POST['m200S'];
$pf100 = $_POST['fajillaP100'];
$pm100 = $_POST['100'];
$p100 = $pm100 + ($pf100 / 100) + $pesos100 - ($_POST['fajillaP100S'] / 100) - $_POST['m100S'];
$pf50 = $_POST['fajillaP50'];
$pm50 = $_POST['50'];
$p50 = $pm50 + ($pf50 / 50) + $pesos50 - ($_POST['fajillaP50S'] / 50) - $_POST['m50S'];
$pf20 = $_POST['fajillaP20'];
$pm20 = $_POST['20'];
$p20 = $pm20 + ($pf20 / 20) + $pesos20 - ($_POST['fajillaP20S'] / 20) - $_POST['m20S'];
$pf10 = $_POST['fajillaP10'];
$pm10 = $_POST['10'];
$p10 = $pm10 + ($pf10 / 10) + $pesos10 - ($_POST['fajillaP10S'] / 10) - $_POST['m10S'];
$pf5 = $_POST['fajillaP5'];
$pm5 = $_POST['5'];
$p5 = $pm5 + ($pf5 / 5) + $pesos5 - ($_POST['fajillaP5S'] / 5) - $_POST['m5S'];
$pf2 = $_POST['fajillaP2'];
$pm2 = $_POST['2'];
$p2 = $pm2 + ($pf2 / 2) + $pesos2 - ($_POST['fajillaP2S'] / 2) - $_POST['m2S'];
$pf1 = $_POST['fajillaP1'];
$pm1 = $_POST['1'];
$p1 = $pm1 + ($pf1 / 1) + $pesos1 - ($_POST['fajillaP1S'] / 1) - $_POST['m1S'];
$pf05 = $_POST['fajillaC50'];
$pm05 = $_POST['05'];
$p05 = $pm05 + ($pf05 / 0.5) + $pesos05 - ($_POST['fajillaC50S'] / 0.5) - $_POST['m05S'];


if ($dolarAnt >= $dolar && $ttcs == 0.00) {
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

//Salida de Dólares
$df100 = $_POST['f15'];
$dm100 = $_POST['d100Dll'];
$d100 = $canada100 - $dm100 - ($df100 * 100);
$df50 = $_POST['f16'];
$dm50 = $_POST['d50Dll'];
$d50 = $canada50 - $dm50 - ($df50 * 100);
$df20 = $_POST['f17'];
$dm20 = $_POST['d20Dll'];
$d20 = $canada20 - $dm20 - ($df20 * 100);
$df10 = $_POST['f18'];
$dm10 = $_POST['d10Dll'];
$d10 = $canada10 - $dm10 - ($df10 * 100);
$df5 = $_POST['f19'];
$dm5 = $_POST['d5Dll'];
$d5 = $canada5 - $dm5 - ($df5 * 100);
$df2 = $_POST['f20'];
$dm2 = $_POST['d2Dll'];
$d2 = $canada2 - $dm2 - ($df2 * 100);
$df1 = $_POST['f21'];
$dm1 = $_POST['d1Dll'];
$d1 = $canada1 - $dm1 - ($df1 * 100);


if ($dolarAnt >= $dolar && $ttcs == 0.00) {
    $query = "UPDATE arqueo SET c100 = $d100 , c50 = $d50 , c20 = $d20 , c10 = $d10 , c5 = $d5 , c2 = $d2 , c1 = $d1 where usuario = '$nom'";
   $resultado = mysql_query($query);  
}
else
{
        
}

 ?>       