<?php include_once("php/sesion.php"); ?>
<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Estratega Compra Dólares</title>
    <script src="js/script.js"></script>
    <!--Funciones de desglose y conversión de divisas-->
    <script type="text/javascript" src="js/desglose.js"></script>
    <!--Adicionales-->
    <link rel="stylesheet" type="text/css" href="css/tabla.css">
    <link rel="stylesheet" type="text/css" href="css/vendedor.css">
    <!--Elementos por defecto-->
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
                    <a href="vendedor.php">Venta</a>
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
                                    <div class="panel-body" id="compra">
                                    </div></div></div>
                            <div class="media-body"></div></div></div>
                             
                        <div class="row" >
                        <div class="item col-xs-12 col-lg-7">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline margin-none">Compra</h4>
                                </div>
                                <div class="tabla ">
                                <form>
                                <div id="partea">
                                    <input id="divisaConv" type="text" placeholder="Dólares" onkeypress="divisa(this.form)" name="divisaConv" tabindex=1 autofocus autocomplete="off">
                                </div>
                                <div id="parteb">
                                 <?php 
                                    $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
                                    mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
                                    $query = "SELECT * FROM ajuste_cambio_compra order by id_ajuste asc";
                                    $resultado = mysql_query($query);
                                   
                                    while ($fila = mysql_fetch_array($resultado)) {
                                         $GLOBALS['xyz'] = $fila[dollar];

                                        }
                                       
                                     ?>
                                    <input id="tipoCambioConv" type="text" placeholder="Cambio" onkeypress="cambio(this.form)"  name="tipoCambioConv" value="<?php echo "$xyz"; ?>" tabindex=2 autocomplete="off">
                                </div>
                                <div id="partec">
                                    <input id="pesosConv" type="text" placeholder="Pesos" onkeypress="pesos(this.form)" name="pesosConv" tabindex=3 autocomplete="off">
                                </div>
                                <div id="parted">
                                <a id="seleccionadod" href="vendedor2.php">Dólares</a>
                                <a href="canada2.php">Canadienses</a>
                                <a href="euro2.php">Euros</a></div>
                             </div></form>
                             <div class="panel-footer text-right"> </div></div> </div>
                              
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
        <thead id="tabCompra">
            <tr>
                <th >Denominación</th>
                <th>Salida</th>
                <th></th>
                <th>Entrada</th>
                <th></th>
                <th>Cambio</th>
                <th></th>
            </tr>
            <tr>
                <th ></th>
                <th>F</th>
                <th id="cant">Pesos</th>
                <th>F</th>
                <th>Dólares</th>
                <th>F</th>
                <th>Dólares</th>
            </tr>
        </thead>
        <tbody class="manejoT">
        <tr>
            <td>1000.00</td>
            <td><input type="text" placeholder="0" id="f1" onkeypress="fajilla1000PC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaPMill" name="fajillaPMill" value="0" >
            <td><input id="MIL" name="MIL" type="text" placeholder="0" tabindex=4 onkeypress="pesos1000C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoValMil" name="pesoValMil" value="0">
            
            <td><input type="text" readonly="" id="f12"></td>
            <td><input type="text" readonly=""></td>

            <td><input type="text" readonly="" ></td>
            <td><input type="text" readonly=""></td>


            
        </tr>
        <tr>
            <td>500.00</td>
            <td><input type="text" placeholder="0" id="f2" onkeypress="fajilla500PC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP500" name="fajillaP500" value="0" >
            <td><input id="500" name="500" type="text" placeholder="0" tabindex=5 onkeypress="pesos500C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal500" name="pesoVal500" value="0">

            <td><input type="text" readonly="" id="f13"></td>
            <td><input type="text" readonly=""></td>

            <td><input type="text" readonly="" ></td>
            <td><input type="text" readonly=""></td>
        </tr>
        <tr>
            <td>200.00</td>
            <td><input type="text" placeholder="0" id="f3" onkeypress="fajilla200PC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP200" name="fajillaP200" value="0" >
            <td><input id="200" name="200" type="text" placeholder="0" tabindex=6 onkeypress="pesos200C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal200" name="pesoVal200" value="0">

            <td><input type="text" readonly="" id="f14"></td>
            <td><input type="text" readonly=""></td>
            
            <td><input type="text" readonly="" ></td>
            <td><input type="text" readonly=""></td>
        </tr>
        <tr>
            <td>100.00</td>
            <td><input type="text" placeholder="0" id="f4" onkeypress="fajilla100PC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP100" name="fajillaP100" value="0" >
            <td><input id="100" name="100" type="text" placeholder="0" tabindex=7 onkeypress="pesos100C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal100" name="pesoVal100" value="0">

            <td><input type="text" placeholder="0" id="f15" onkeypress="fajilla100DC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaD100" name="fajillaD100" value="0" >
            <td><input id="d100Dll" name="d100Dll" type="text" placeholder="0" tabindex=18 onkeypress="dolares100C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="dolarVal100" name="dolarVal100" value="0">

            <td><input type="text" placeholder="0" id="f25" onkeypress="fajilla100PSC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP100S" name="fajillaP100S" value="0" >
            <td><input id="m100S" name="m100S" type="text" placeholder="0" tabindex=26 onkeypress="pesos100SC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal100S" name="pesoVal100S" value="0">
        </tr>
        <tr>
            <td>50.00</td>
            <td><input type="text" placeholder="0" id="f5" onkeypress="fajilla50PC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP50" name="fajillaP50" value="0" >
            <td><input id="50" name="50" type="text" placeholder="0" tabindex=8 onkeypress="pesos50C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal50" name="pesoVal50" value="0">

            <td><input type="text" placeholder="0" id="f16" onkeypress="fajilla50DC(this.form)" autocomplete="off"></td>
             <input type="hidden" id="fajillaD50" name="fajillaD50" value="0" >
            <td><input id="d50Dll" name="d50Dll" type="text" placeholder="0" tabindex=19 onkeypress="dolares50C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="dolarVal50" name="dolarVal50" value="0">

            <td><input type="text" placeholder="0" id="f26" onkeypress="fajilla50PSC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP50S" name="fajillaP50S" value="0" >
            <td><input id="m50S" name="m50S" type="text" placeholder="0" tabindex=27 onkeypress="pesos50SC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal50S" name="pesoVal50S" value="0">
        </tr>  
        <tr>
            <td>20.00</td>
            <td><input type="text" placeholder="0" id="f6" onkeypress="fajilla20PC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP20" name="fajillaP20" value="0" >
            <td><input id="20" name="20" type="text" placeholder="0" tabindex=9 onkeypress="pesos20C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal20" name="pesoVal20" value="0">

            <td><input type="text" placeholder="0" id="f17" onkeypress="fajilla20DC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaD20" name="fajillaD20" value="0" >
            <td><input id="d20Dll" name="d20Dll" type="text" placeholder="0" tabindex=20 onkeypress="dolares20C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="dolarVal20" name="dolarVal20" value="0">

            <td><input type="text" placeholder="0" id="f27" onkeypress="fajilla20PSC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP20S" name="fajillaP20S" value="0" >
            <td><input id="m20S" name="m20S" type="text" placeholder="0" tabindex=28 onkeypress="pesos20SC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal20S" name="pesoVal20S" value="0">
        </tr> 
        <tr>
            <td>10.00</td>
            <td><input type="text" placeholder="0" id="f7" onkeypress="fajilla10PC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP10" name="fajillaP10" value="0" >
            <td><input id="10" name="10" type="text" placeholder="0" tabindex=10 onkeypress="pesos10C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal10" name="pesoVal10" value="0">

            <td><input type="text" placeholder="0" id="f18" onkeypress="fajilla10DC(this.form)" autocomplete="off"</td>
            <input type="hidden" id="fajillaD10" name="fajillaD10" value="0" >
            <td><input id="d10Dll" name="d10Dll" type="text" placeholder="0" tabindex=21 onkeypress="dolares10C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="dolarVal10" name="dolarVal10" value="0">

            <td><input type="text" placeholder="0" id="f28" onkeypress="fajilla10PSC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP10S" name="fajillaP10S" value="0" >
            <td><input id="m10S" name="m10S" type="text" placeholder="0" tabindex=29 onkeypress="pesos10SC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal10S" name="pesoVal10S" value="0">
        </tr> 
        <tr>
            <td>5.00</td>
            <td><input type="text" placeholder="0" id="f8" onkeypress="fajilla5PC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP5" name="fajillaP5" value="0" >
            <td><input id="5" name="5" type="text" placeholder="0" tabindex=11 onkeypress="pesos5C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal5" name="pesoVal5" value="0">

            <td><input type="text" placeholder="0" id="f19" onkeypress="fajilla5DC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaD5" name="fajillaD5" value="0" >
            <td><input id="d5Dll" name="d5Dll" type="text" placeholder="0" tabindex=22 onkeypress="dolares5C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="dolarVal5" name="dolarVal5" value="0">

            <td><input type="text" placeholder="0" id="f29" onkeypress="fajilla5PSC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP5S" name="fajillaP5S" value="0" >
            <td><input id="m5S" name="m5S" type="text" placeholder="0" tabindex=30 onkeypress="pesos5SC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal5S" name="pesoVal5S" value="0">
        </tr> 
        <tr>
            <td>2.00</td>
            <td><input type="text" placeholder="0" id="f9" onkeypress="fajilla2PC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP2" name="fajillaP2" value="0" >
            <td><input id="2" name="2" type="text" placeholder="0" tabindex=12 onkeypress="pesos2C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal2" name="pesoVal2" value="0">

            <td><input type="text" placeholder="0" id="f20" onkeypress="fajilla2DC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaD2" name="fajillaD2" value="0" >
            <td><input id="d2Dll" name="d2Dll" type="text" placeholder="0" tabindex=23 onkeypress="dolares2C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="dolarVal2" name="dolarVal2" value="0">

            <td><input type="text" placeholder="0" id="f30" onkeypress="fajilla2PSC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP2S" name="fajillaP2S" value="0" >
            <td><input id="m2S" name="m2S" type="text" placeholder="0" tabindex=31 onkeypress="pesos2SC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal2S" name="pesoVal2S" value="0">
        </tr> 
        <tr>
            <td>1.00</td>
            <td><input type="text" placeholder="0" id="f10" onkeypress="fajilla1PC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP1" name="fajillaP1" value="0" >
            <td><input id="1" name="1" type="text" placeholder="0" tabindex=13 onkeypress="pesos1C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal1" name="pesoVal1" value="0">
            
            <td><input type="text" placeholder="0" id="f21" onkeypress="fajilla1DC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaD1" name="fajillaD1" value="0" >
            <td><input id="d1Dll" name="d1Dll" type="text" placeholder="0" tabindex=24 onkeypress="dolares1C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="dolarVal1" name="dolarVal1" value="0">

            <td><input type="text" placeholder="0" id="f31" onkeypress="fajilla1PSC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP1S" name="fajillaP1S" value="0" >
            <td><input id="m1S" name="m1S" type="text" placeholder="0" tabindex=32 onkeypress="pesos1SC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal1S" name="pesoVal1S" value="0">
        </tr> 
         <tr>
            <td>0.50</td>
            <td><input type="text" placeholder="0" id="f11" onkeypress="fajilla50CC(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaC50" name="fajillaC50" value="0" >
            <td><input id="05" name="05" type="text" placeholder="0" tabindex=14 onkeypress="pesos05C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal05" name="pesoVal05" value="0">
    
            <td><input type="text" readonly="" id="f33"></td>
            <td><input type="text" readonly="" ></td>

            <td><input type="text" readonly="" ></td>
            <td><input type="text" readonly=""></td>
        </tr> 
         <tr>
            <td></td>
            <td></td>
            <td><input id="totalConv" name="totalConv" type="text" placeholder="Total" readonly></td>
            <td></td>
            <td><input id="totalDllConv" name="totalDllConv" type="text" placeholder="Total" readonly></td>
            <td></td>
            <td><input id="totalConvS" name="totalConvS" type="text" placeholder="Total" readonly></td>
        </tr> 
         <tr>
            <td>Cambio</td>
            <td></td>
            <td><input id="totalDif" name="totalDif" type="text" placeholder="Diferencia" readonly></td>
             <td></td>
            <td><input id="totalDllDif" name="totalDllDif" type="hidden" placeholder="Diferencia" readonly></td>
            <td></td>
            <td><input id="totalDifS" name="totalDifS" type="text" placeholder="Diferencia" readonly></td>
        </tr> 
        <tr>
            <td></td>
            <td></td>
            <input type="hidden" id="dolaresInsertar" name="dolaresInsertar">
            <input type="hidden" id="cambioInsertar" name="cambioInsertar">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated type="submit" id="registraMov" value="Listo" tabindex=33></td>
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
            $totalCambio = $_POST['totalConvS'];
            $cambio = $_POST['cambioInsertar'];
            $peso = $dll * $cambio;
            $difPeso = $_POST['totalDif'];
            $difDolar = $_POST['totalDllDif'];
            $dolar = $_POST['dolaresInsertar'];
            $diferencia = $_POST['totalDifS'];
            $nuevoPeso = $pesosAnt - $peso;
                $nuevoDolar = $dolarAnt + $dolar;
                $nuevoRedondeo = $redondo + $diferencia;

            $_SESSION['dolar'] = $_POST['dolaresInsertar'];
            $_SESSION['dolarA'] = $dolarAnt;
            $_SESSION['ttlC'] = $_POST['totalConv'];
            $_SESSION['cambio'] = $_POST['cambioInsertar'];
            $_SESSION['pesosA'] = $pesosAnt;
            $_SESSION['redondo'] = $redondoAnt;
            $_SESSION['diferencia'] =$_POST['totalDif'];
            $_SESSION['tipoDivisa'] = "Dollar";
            $_SESSION['tipoMov'] = "Compra";
            $_SESSION['updateDivisa'] = "dolares";

            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            if ($pesosAnt >= $peso && $diferencia == 0.00 && $difPeso == 0.00 && $totalCambio == 0.00) {
                $query = "INSERT INTO movimientos (cantidad, divisa, tipo_cambio,tipo_movimiento, usuario) VALUES ({$_POST['dolaresInsertar']} ,'Dollar',{$_POST['cambioInsertar']},'Compra','$nom')";
                $resultado = mysql_query($query);

            }

            elseif ($pesosAnt < $peso) {
                    ?> <script>alert("No cuenta con suficiente efectivo en caja");</script><?php   
            }
            else
            {
                ?> <script>
                document.location=("redondeo.php");</script><?php 
                                        
            }
     ?>
     <?php 
            $cambio = $_POST['cambioInsertar'];
            $peso = $_POST['totalConv'];
            $difPeso = $_POST['totalDif'];
            $difDolar = $_POST['totalDllDif'];
            $dolar = $_POST['dolaresInsertar'];
            $diferencia = $_POST['totalDifS'];
            $nuevoPeso = $pesosAnt - $peso;
                $nuevoDolar = $dolarAnt + $dolar;
                $nuevoRedondeo = $redondoAnt + $difPeso;

            $_SESSION['dolar'] = $_POST['dolaresInsertar'];
            $_SESSION['dolarA'] = $dolarAnt;
            $_SESSION['ttlC'] = $_POST['totalConv'];
            $_SESSION['cambio'] = $_POST['cambioInsertar'];
            $_SESSION['pesosA'] = $pesosAnt;
            $_SESSION['redondo'] = $redondoAnt;
            $_SESSION['diferencia'] =$_POST['totalDif'];
            $_SESSION['tipoDivisa'] = "Dollar";
            $_SESSION['tipoMov'] = "Compra";

            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            if ($pesosAnt >= $peso && $diferencia == 0.00 && $difPeso == 0.00) {
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
            $peso = $_POST['totalConv'];
            $_SESSION['dolarA'] = $dolarAnt;
            $dolar = $_POST['dolaresInsertar'];
            $_SESSION['dolar'] = $_POST['dolaresInsertar'];
            $difPeso = $_POST['totalDif'];
            $difDolar = $_POST['totalDllDif'];
            $diferencia = $_POST['totalDifS'];

            $arq1000 = $Pesos1000 - $_POST['MIL'] - ($_POST['f1'] * 100);
            $arq500 = $Pesos500 - $_POST['500'] - ($_POST['f2'] * 100);
            $arq200 = $Pesos200 - $_POST['200'] - ($_POST['f3'] * 100);
            $arq100 = $Pesos100 - $_POST['100'] - ($_POST['f4'] * 100);
            $arq50 = $Pesos50 - $_POST['50'] - ($_POST['f5'] * 100);
            $arq20 = $Pesos20 - $_POST['20'] - ($_POST['f6'] * 100);
            $arq10 = $Pesos10 - $_POST['10'] - ($_POST['f7'] * 100);
            $arq5 = $Pesos5 - $_POST['5'] - ($_POST['f8'] * 100);
            $arq2 = $Pesos2 - $_POST['2'] - ($_POST['f9'] * 100);
            $arq1 = $Peso1 - $_POST['1'] - ($_POST['f10'] * 100);
            $arq05 = $Centavos50 - $_POST['05'] - ($_POST['f11'] * 100);

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
            if ($pesosAnt >= $peso && $diferencia == 0.00 && $difPeso == 0.00) {
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
                $GLOBALS['Dolar1'] = $fila[d1];
            }
     ?>
     <?php 
            $peso = $_POST['totalConv'];
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
            $arq100D = $Dolares100 + $_POST['100Dll'] + $f15;
            $arq50D = $Dolares50 + $_POST['50Dll'] + $f16;
            $arq20D = $Dolares20 + $_POST['20Dll'] + $f17;
            $arq10D = $Dolares10 + $_POST['10Dll'] + $f18;
            $arq5D = $Dolares5 + $_POST['5Dll'] + $f19;
            $arq2D = $Dolares2 + $_POST['2Dll'] + $f20;
            $arq1D = $Dolar1 + $_POST['1Dll'] + $f21;

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
            if ($pesosAnt >= $peso && $diferencia == 0.00 && $difPeso == 0.00) {
                $query = "UPDATE calculo_arqueo SET d100 = $arq100D, d50 = $arq50D, d20 = $arq20D, d10 = $arq10D, d5 = $arq5D,d2 = $arq2D, d1 = $arq1D WHERE divisa = 'dolares' and usuario = '$nom'";
               $resultado = mysql_query($query);
            }            
     ?>
</div>
                                <div class="panel-footer text-right">
                                </div>
                            </div>
                        </div>    
                                  
    <!-- Footer -->
    <footer class="footer"><strong>Control de Gastos</strong> v1.0.0 &copy; Copyright 2015 </footer>
    
    <!-- Diseño de bloques -->
    <script src="js/vendor-core.min.js"></script>
    <script src="js/module-layout.min.js"></script>
    <!-- Control de la animación de la barra superior -->
    <script src="js/theme-core.min.js"></script>
</body>
</html>