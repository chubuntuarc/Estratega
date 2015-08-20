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
     