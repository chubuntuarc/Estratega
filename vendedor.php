<?php session_start();
$GLOBALS['nom'] = $_SESSION['user'];
error_reporting(0);
$host = "localhost";
$user = "root";
$pw = "";
$db = "estra";
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$query = "SELECT nombre from usuarios where usuario = '$nom'";
$resultado = mysql_query($query);
while ($fila = mysql_fetch_array($resultado)) { 
    $GLOBALS['identificar']= $fila[nombre];       }

?>
<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jesus Arciniega">
    <title>Estratega Venta Dólares</title>
    <script src="js/script.js"></script>
    <!--Funciones de desglose y conversión de divisas-->
 
    <script src="js/desglose.js"></script>
    <!--Elementos adicionales-->
    <link rel="stylesheet" type="text/css" href="css/tabla.css">
    <link rel="stylesheet" type="text/css" href="css/vendedor.css">
    <!-- Elementos por defecto-->
    <link href="css/vendor.min.css" rel="stylesheet">
    <link href="css/theme-core.min.css" rel="stylesheet">
    <link href="css/module-essentials.min.css" rel="stylesheet" />
    <link href="css/module-material.min.css" rel="stylesheet" />
    <link href="css/module-layout.min.css" rel="stylesheet" />
    <link href="css/module-sidebar.min.css" rel="stylesheet" />
    <link href="css/module-sidebar-skins.min.css" rel="stylesheet" />
    <link href="css/module-navbar.min.css" rel="stylesheet" />
    <link href="css/module-messages.min.css" rel="stylesheet" />
    <link href="css/module-carousel-slick.min.css" rel="stylesheet" />
    <link href="css/module-charts.min.css" rel="stylesheet" />
    <link href="css/module-maps.min.css" rel="stylesheet" />
    <link href="css/module-colors-alerts.min.css" rel="stylesheet" />
    <link href="css/module-colors-background.min.css" rel="stylesheet" />
    <link href="css/module-colors-buttons.min.css" rel="stylesheet" />
    <link href="css/module-colors-text.min.css" rel="stylesheet" />
    


</head>
<body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top navbar-size-large navbar-size-xlarge paper-shadow" data-z="0" data-animated role="navigation">
        <div class="container">
          <div class="navbar-brand navbar-brand-logo">
                    <img id="logoxx" src="images/estratega.png">
                </div>
                <div class="menux col-xs-3 col-lg-9">
                    <a href="movimientos.php" >Información</a>
                    <a href="vendedor2.php">Compra</a>
                </div>
                    
            </div>
    </div>
    <div class="parallax overflow-hidden bg-blue-400 page-section third">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media v-middle">
                <div class="media-left text-center">
                    <a href="#">
                        <img src="images/people/user.png" alt="people" class="img-circle width-80" />
                    </a>
                </div>
                <div class="media-body">
                    <h1 class="text-white text-display-1 margin-v-0"><?php echo "$identificar"; ?></h1>
                    <span><a href="login.php" class="botonx" id="logout">Cerrar sesión</a></span>
                </div>
                <div class="media-right">
                    <span class="label bg-blue-500">Vendedor</span>

                    
                </div>
            </div>
        </div>
    </div>
     <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="panel panel-default">
                        <div class="media v-middle">
                            <div class="media-left">
                                <div class="bg-green-400 text-white">
                                    <div class="panel-body" id="venta">
                                    </div></div></div>
                            <div class="media-body"></div></div></div>
                             
                        <div class="row" >
                        <div class="item col-xs-12 col-lg-7">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline margin-none">Venta</h4>
                                </div>
                                <div class="tabla ">
                                <form>
                                  <div id="parte1">
                                    <input id="divisaConv" type="text" placeholder="Dólares" onkeypress="divisa(this.form)"  name="divisaConv" tabindex=1  autofocus>
                                </div>
                                <div id="parte4">
                                <a id="seleccionado" href="vendedor.php">Dólares</a>
                                <a href="canada.php">Canadienses</a>
                                <a href="euro.php">Euros</a>
                               </div>  
                                <div id="parte2">
                                    <?php 
                                    $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
                                    mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
                                    $query = "SELECT * FROM ajuste_cambio order by id_ajuste asc";
                                    $resultado = mysql_query($query);
                                   
                                    while ($fila = mysql_fetch_array($resultado)) {
                                         $GLOBALS['xyz'] = $fila[dollar];
                                        
                                            
                                        }
                                       
                                     ?>
                                    <input id="tipoCambioConv" type="text" placeholder="Cambio" onkeypress="cambio(this.form)" name="tipoCambioConv" value="<?php echo "$xyz"; ?>" tabindex=2>
                                </div>
                                <div id="parte3">
                                    <input id="pesosConv" type="text" placeholder="Pesos" onkeypress="pesos(this.form)" name="pesosConv" tabindex=3>
                                </div>
                               </form>
                             </div><div class="panel-footer text-right"> </div></div> </div>
                              
                    <div class="row" data-toggle="isotope">

                        <div class="item col-xs-12 col-lg-9">
                    

                                 </div>
                                 </div>
                    <div class="row" >
                        <div class="item col-xs-4 col-lg-5">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline margin-none">Desglose</h4>
                                    <p class="text-subhead text-light">Desglose de moneda</p>
                                </div>
                             <form method="post" class="desglose">
                                <div class="tabla ">

    <table>
        <thead>
            <tr>
                <th >Denominación</th>
                <th></th>
                <th id="cant">Pesos</th>
                <th></th>
                <th>Dólares</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>1000.00</td>
            <td><input type="text" placeholder="0" id="f1" onkeypress="fajilla1000P(this.form)"></td>
            <input type="hidden" id="fajillaPMill" name="fajillaPMill" value="0" >
            <td><input id="MIL" name="MIL" type="text" placeholder="0" tabindex=4 onkeypress="pesos1000(this.form)"></td>
            <input type="hidden" id="pesoValMil" name="pesoValMil" value="0">
            <td><input type="text" readonly="" id="f12"></td>
            <td><input type="text" readonly=""></td>
            <input type="hidden" id="arqueo1000P" name="arqueo1000P" value="0" >
        </tr>
        <tr>
            <td>500.00</td>
            <td><input type="text" placeholder="0" id="f2" onkeypress="fajilla500P(this.form)"></td>
            <input type="hidden" id="fajillaP500" name="fajillaP500" value="0" >
            <td><input id="500" name="500" type="text" placeholder="0" tabindex=5 onkeypress="pesos500(this.form);"></td>
            <input type="hidden" id="pesoVal500" name="pesoVal500" value="0">
            <td><input type="text" readonly="" id="f13"></td>
            <td><input type="text" readonly=""></td>
            <input type="hidden" id="arqueo500P" name="arqueo500P" value="0" >
        </tr>
        <tr>
            <td>200.00</td>
            <td><input type="text" placeholder="0" id="f3" onkeypress="fajilla200P(this.form)"></td>
            <input type="hidden" id="fajillaP200" name="fajillaP200" value="0" >
            <td><input id="200" name="200" type="text" placeholder="0" tabindex=6 onkeypress="pesos200(this.form)"></td>
            <input type="hidden" id="pesoVal200" name="pesoVal200" value="0">
            <td><input type="text" readonly="" id="f14"></td>
            <td><input type="text" readonly=""></td>
            <input type="hidden" id="arqueo200P" name="arqueo200P" value="0" >
        </tr>
        <tr>
            <td>100.00</td>
            <td><input type="text" placeholder="0" id="f4" onkeypress="fajilla100P(this.form)"></td>
            <input type="hidden" id="fajillaP100" name="fajillaP100" value="0" >
            <td><input id="100" name="100" type="text" placeholder="0" tabindex=7 onkeypress="pesos100(this.form)"></td>
            <input type="hidden" id="pesoVal100" name="pesoVal100" value="0">
            <td><input type="text" placeholder="0" id="f15" onkeypress="fajilla100D(this.form)"></td>
            <input type="hidden" id="fajillaD100" name="fajillaD100" value="0" >
            <td><input id="100Dll" type="text" placeholder="0" tabindex=15 onkeypress="dolares100(this.form)"></td>
            <input type="hidden" id="dolarVal100" name="dolarVal100" value="0">
            <input type="hidden" id="arqueo100P" name="arqueo100P" value="0" >
            <input type="hidden" id="arqueo100D" name="arqueo100D" value="0" >
        </tr>
        <tr>
            <td>50.00</td>
            <td><input type="text" placeholder="0" id="f5" onkeypress="fajilla50P(this.form)"></td>
            <input type="hidden" id="fajillaP50" name="fajillaP50" value="0" >
            <td><input id="50" name="50" type="text" placeholder="0" tabindex=8 onkeypress="pesos50(this.form)"></td>
            <input type="hidden" id="pesoVal50" name="pesoVal50" value="0">
            <td><input type="text" placeholder="0" id="f16" onkeypress="fajilla50D(this.form)"></td>
             <input type="hidden" id="fajillaD50" name="fajillaD50" value="0" >
            <td><input id="50Dll" type="text" placeholder="0" tabindex=16 onkeypress="dolares50(this.form)"></td>
            <input type="hidden" id="dolarVal50" name="dolarVal50" value="0">
            <input type="hidden" id="arqueo50P" name="arqueo50P" value="0" >
            <input type="hidden" id="arqueo50D" name="arqueo50D" value="0" >
        </tr>  
        <tr>
            <td>20.00</td>
            <td><input type="text" placeholder="0" id="f6" onkeypress="fajilla20P(this.form)"></td>
            <input type="hidden" id="fajillaP20" name="fajillaP20" value="0" >
            <td><input id="20" name="20" type="text" placeholder="0" tabindex=9 onkeypress="pesos20(this.form)"></td>
            <input type="hidden" id="pesoVal20" name="pesoVal20" value="0">
            <td><input type="text" placeholder="0" id="f17" onkeypress="fajilla20D(this.form)"></td>
            <input type="hidden" id="fajillaD20" name="fajillaD20" value="0" >
            <td><input id="20Dll" type="text" placeholder="0" tabindex=17 onkeypress="dolares20(this.form)"></td>
            <input type="hidden" id="dolarVal20" name="dolarVal20" value="0">
            <input type="hidden" id="arqueo20P" name="arqueo20P" value="0" >
            <input type="hidden" id="arqueo20D" name="arqueo20D" value="0" >
        </tr> 
        <tr>
            <td>10.00</td>
            <td><input type="text" placeholder="0" id="f7" onkeypress="fajilla10P(this.form)"></td>
            <input type="hidden" id="fajillaP10" name="fajillaP10" value="0" >
            <td><input id="10" name="10" type="text" placeholder="0" tabindex=10 onkeypress="pesos10(this.form)"></td>
            <input type="hidden" id="pesoVal10" name="pesoVal10" value="0">
            <td><input type="text" placeholder="0" id="f18" onkeypress="fajilla10D(this.form)"</td>
            <input type="hidden" id="fajillaD10" name="fajillaD10" value="0" >
            <td><input id="10Dll" type="text" placeholder="0" tabindex=18 onkeypress="dolares10(this.form)"></td>
            <input type="hidden" id="dolarVal10" name="dolarVal10" value="0">
            <input type="hidden" id="arqueo10P" name="arqueo10P" value="0" >
            <input type="hidden" id="arqueo10D" name="arqueo10D" value="0" >
        </tr> 
        <tr>
            <td>5.00</td>
            <td><input type="text" placeholder="0" id="f8" onkeypress="fajilla5P(this.form)"></td>
            <input type="hidden" id="fajillaP5" name="fajillaP5" value="0" >
            <td><input id="5" name="5" type="text" placeholder="0" tabindex=11 onkeypress="pesos5(this.form)"></td>
            <input type="hidden" id="pesoVal5" name="pesoVal5" value="0">
            <td><input type="text" placeholder="0" id="f19" onkeypress="fajilla5D(this.form)"></td>
            <input type="hidden" id="fajillaD5" name="fajillaD5" value="0" >
            <td><input id="5Dll" type="text" placeholder="0" tabindex=19 onkeypress="dolares5(this.form)"></td>
            <input type="hidden" id="dolarVal5" name="dolarVal5" value="0">
            <input type="hidden" id="arqueo5P" name="arqueo5P" value="0" >
            <input type="hidden" id="arqueo5D" name="arqueo5D" value="0" >

        </tr> 
        <tr>
            <td>2.00</td>
            <td><input type="text" placeholder="0" id="f9" onkeypress="fajilla2P(this.form)"></td>
            <input type="hidden" id="fajillaP2" name="fajillaP2" value="0" >
            <td><input id="2" name="2" type="text" placeholder="0" tabindex=12 onkeypress="pesos2(this.form)"></td>
            <input type="hidden" id="pesoVal2" name="pesoVal2" value="0">
            <td><input type="text" placeholder="0" id="f20" onkeypress="fajilla2D(this.form)"></td>
            <input type="hidden" id="fajillaD2" name="fajillaD2" value="0" >
            <td><input id="2Dll" type="text" placeholder="0" tabindex=20 onkeypress="dolares2(this.form)"></td>
            <input type="hidden" id="dolarVal2" name="dolarVal2" value="0">
            <input type="hidden" id="arqueo2P" name="arqueo2P" value="0" >
            <input type="hidden" id="arqueo2D" name="arqueo2D" value="0" >
        </tr> 
        <tr>
            <td>1.00</td>
            <td><input type="text" placeholder="0" id="f10" onkeypress="fajilla1P(this.form)"></td>
            <input type="hidden" id="fajillaP1" name="fajillaP1" value="0" >
            <td><input id="1" name="1" type="text" placeholder="0" tabindex=13 onkeypress="pesos1(this.form)"></td>
            <input type="hidden" id="pesoVal1" name="pesoVal1" value="0">
            <td><input type="text" placeholder="0" id="f21" onkeypress="fajilla1D(this.form)"></td>
            <input type="hidden" id="fajillaD1" name="fajillaD1" value="0" >
            <td><input id="1Dll" type="text" placeholder="0" tabindex=21 onkeypress="dolares1(this.form)"></td>
            <input type="hidden" id="dolarVal1" name="dolarVal1" value="0">
            <input type="hidden" id="arqueo1P" name="arqueo1P" value="0" >
            <input type="hidden" id="arqueo1D" name="arqueo1D" value="0" >
        </tr> 
         <tr>
            <td>0.50</td>
            <td><input type="text" placeholder="0" id="f11" onkeypress="fajilla50C(this.form)"></td>
            <input type="hidden" id="fajillaC50" name="fajillaC50" value="0" >
            <script language="javascript" type="text/javascript">
                  </script>
            <td><input id="05" name="05" type="text" placeholder="0" tabindex=14 onkeypress="pesos05(this.form)"></td>
            <input type="hidden" id="pesoVal05" name="pesoVal05" value="0">
            <td><input type="text" readonly="" id="f22"></td>
            <td><input type="text" readonly="" ></td>
            <input type="hidden" id="arqueo05P" name="arqueo05P" value="0" >
        </tr> 
         <tr>
            <td></td>
            <td></td>
            <td><input id="totalConv" name="totalConv" type="text" placeholder="Total" readonly></td>
            <td></td>
            <td><input id="totalDllConv" name="totalDllConv" type="text" placeholder="Total" readonly></td>
        </tr> 
         <tr>
            <td>Cambio</td>
            <td></td>
            <td><input id="totalDif" name="totalDif" type="text" placeholder="Diferencia" readonly></td>
            <td></td>
            <td><input id="totalDllDif" type="text" placeholder="Diferencia" readonly></td>
        </tr> 
        <tr>
            <td></td>
            <td></td>
            <input type="hidden" id="dolaresInsertar" name="dolaresInsertar">
            <input type="hidden" id="cambioInsertar" name="cambioInsertar">
            <td> <input class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated type="submit" id="registraMov" value="Registrar" tabindex=22></td>
        </tr> 
        </tbody>
    </table>
   
    </form>
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
            $dolar = $_POST['dolaresInsertar'];
            $difPeso = $_POST['totalDif'];
            $difDolar = $_POST['totalDllDif'];
            $GLOBALS['variable'];
            $_SESSION['dolar'] = $_POST['dolaresInsertar'];
            $_SESSION['dolarA'] = $dolarAnt;
            $_SESSION['ttlC'] = $_POST['totalConv'];
            $_SESSION['cambio'] = $_POST['cambioInsertar'];
            $_SESSION['pesosA'] = $pesosAnt;
            $_SESSION['redondo'] = $redondoAnt;
            $_SESSION['diferencia'] =$_POST['totalDif'];
            $_SESSION['tipoDivisa'] = "Dollar";
            $_SESSION['tipoMov'] = "Venta";
            $_SESSION['updateDivisa'] = "dolares";
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            if ($dolarAnt >= $dolar && $difPeso == 0.00 && $difDolar == 0.00) {
                $query = "INSERT INTO movimientos (cantidad, divisa, tipo_cambio,tipo_movimiento, usuario) VALUES ({$_POST['dolaresInsertar']} ,'Dollar',{$_POST['cambioInsertar']},'Venta','$nom')";
                $resultado = mysql_query($query);
            }
            elseif ($dolarAnt < $dolar) {
                    ?> <script>alert("No cuenta con suficientes dólares en caja");</script><?php   
            }
            else
            {
                ?> <script>alert("Existe una diferencia en el desglose");
                document.location=("redondeo.php");</script><?php   
                                        
            }
            
     ?>
      <?php 
            $cambio = $_POST['cambioInsertar'];
            $peso = $_POST['totalConv'];
            $difPeso = $_POST['totalDif'];
            $difDolar = $_POST['totalDllDif'];
            $dolar = $_POST['dolaresInsertar'];
            $diferencia = $_POST['totalDif'];
            $nuevoPeso = $pesosAnt + $peso;
                $nuevoDolar = $dolarAnt - $dolar;
                $nuevoRedondeo = $redondoAnt - $diferencia;

            $_SESSION['dolar'] = $_POST['dolaresInsertar'];
            $_SESSION['dolarA'] = $dolarAnt;
            $_SESSION['ttlC'] = $_POST['totalConv'];
            $_SESSION['cambio'] = $_POST['cambioInsertar'];
            $_SESSION['pesosA'] = $pesosAnt;
            $_SESSION['redondo'] = $redondoAnt;
            $_SESSION['diferencia'] =$_POST['totalDif'];
            $_SESSION['tipoDivisa'] = "Dollar";
            $_SESSION['tipoMov'] = "Venta";

            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            if ($dolarAnt >= $dolar && $difPeso == 0.00 && $difDolar == 0.00) {
                $query = "UPDATE cajas SET dolares = $nuevoDolar, pesos = $nuevoPeso, redondeo = $nuevoRedondeo WHERE usuario = '$nom'";
               $resultado = mysql_query($query);
            }            

     ?>
     <!--Sección en la que se manejan los inputs ocultos con la cantidad de billetes del arqueo-->
     <?php 
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

            $_SESSION['1000PArqueo'] = $_POST['arqueo1000P'] + $Pesos1000;
            $_SESSION['500PArqueo'] = $_POST['arqueo500P'] + $Pesos500;
            $_SESSION['200PArqueo'] = $_POST['arqueo200P'] + $Pesos200;
            $_SESSION['100PArqueo'] = $_POST['arqueo100P'] + $Pesos100;
            $_SESSION['50PArqueo'] = $_POST['arqueo50P'] + $Pesos50;
            $_SESSION['20PArqueo'] = $_POST['arqueo20P'] + $Pesos20;
            $_SESSION['10PArqueo'] = $_POST['arqueo10P'] + $Pesos10;
            $_SESSION['5PArqueo'] = $_POST['arqueo5P'] + $Pesos5;
            $_SESSION['2PArqueo'] = $_POST['arqueo2P'] + $Pesos2;
            $_SESSION['1PArqueo'] = $_POST['arqueo1P'] + $Peso1;
            $_SESSION['05PArqueo'] = $_POST['arqueo05P'] + $Centavos50;

            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            if ($dolarAnt >= $dolar && $difPeso == 0.00 && $difDolar == 0.00) {
                $query = "UPDATE calculo_arqueo SET d1000 = $1000PArqueo, d500 = $500PArqueo, d200 = $200PArqueo, d100 = $100PArqueo, d50 = $50PArqueo, d20 = $20PArqueo, d10 = $10PArqueo, d5 = $5PArqueo, d2 = $2PArqueo, d1 = $1PArqueo, c5 = $05PArqueo WHERE divisa = 'pesos' and usuario = '$nom'";
               $resultado = mysql_query($query);
            }            

     ?>
     <?php 
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
                $GLOBALS['Dolar1'] = $fila[d1];
            }
     ?>
     <?php 
            $_SESSION['dolarA'] = $dolarAnt;
            $dolar = $_POST['dolaresInsertar'];
            $_SESSION['dolar'] = $_POST['dolaresInsertar'];
            $difPeso = $_POST['totalDif'];
            $difDolar = $_POST['totalDllDif'];

            $_SESSION['100DArqueo'] = $_POST['arqueo100D'] - $Dolares100;
            $_SESSION['50DArqueo'] = $_POST['arqueo50D'] - $Dolares50;
            $_SESSION['20DArqueo'] = $_POST['arqueo20D'] - $Dolares20;
            $_SESSION['10DArqueo'] = $_POST['arqueo10D'] - $Dolares10;
            $_SESSION['5DArqueo'] = $_POST['arqueo5D'] - $Dolares5;
            $_SESSION['1DArqueo'] = $_POST['arqueo1D'] - $Dolar1;

            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            if ($dolarAnt >= $dolar && $difPeso == 0.00 && $difDolar == 0.00) {
                $query = "UPDATE calculo_arqueo SET d100 = $100DArqueo, d50 = $50DArqueo, d20 = $20DArqueo, d10 = $10DArqueo, d5 = $5DArqueo, d1 = $1DArqueo WHERE divisa = 'dolares' and usuario = '$nom'";
               $resultado = mysql_query($query);
            }            
     ?>
     
</div>
                                <div class="panel-footer text-right">
                                </div>
                            </div>
                        </div>    
                                  
    <!-- Footer -->
    <footer class="footer">
        <strong>Control de Gastos</strong> v1.0.0 &copy; Copyright 2015
    </footer>
    <!-- // Footer -->

    <!-- Extras -->
    <script src="js/vendor-core.min.js"></script>
    <script src="js/vendor-countdown.min.js"></script>
    <script src="js/vendor-tables.min.js"></script>
    <script src="js/vendor-forms.min.js"></script>
    <script src="js/vendor-carousel-slick.min.js"></script>
    <script src="js/vendor-player.min.js"></script>
    <script src="js/vendor-charts-flot.min.js"></script>
    <script src="js/vendor-nestable.min.js"></script>
    <script src="js/module-essentials.min.js"></script>
    <script src="js/module-material.min.js"></script>
    <script src="js/module-layout.min.js"></script>
    <script src="js/module-sidebar.min.js"></script>
    <script src="js/module-carousel-slick.min.js"></script>
    <script src="js/module-player.min.js"></script>
    <script src="js/module-messages.min.js"></script>
    <script src="js/module-maps-google.min.js"></script>
    <script src="js/module-charts-flot.min.js"></script>
    <script src="js/theme-core.min.js"></script>
    
</body>
</html>