<?php include("php/sesion.php"); ?>
<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Estratega Venta Canadienses</title>
    <script src="js/script.js"></script>
    <!--Funciones de desglose y conversión de divisas-->
    <script type="text/javascript" src="js/desglose.js"></script>
     <!--Elementos adicionales-->
    <link rel="stylesheet" type="text/css" href="css/tabla.css">
    <link rel="stylesheet" type="text/css" href="css/vendedor.css">
    <link rel="icon" type="image/png" href="favicon.ico" />
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
                <div class="menux col-xs-9 col-lg-9">
                    <a href="movimientos.php" >Información</a>
                    <a href="canada2.php">Compra</a>
                    <?php 
                if ($roluser == 'admin') {
                  echo '<a href="admin.php">Panel</a>'; 
                }?>
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
                                    <input id="divisaConv" type="text" placeholder="Dll Can"  onkeypress="divisa(this.form)"  name="divisaConv" tabindex=1 autofocus autocomplete="off">
                                </div>
                                <div id="parte4">
                                <a href="vendedor.php">Dólares</a>
                                <a id="seleccionado"  href="canada.php">Canadienses</a>
                                <a href="euro.php">Euros</a>
                               </div>  
                                <div id="parte2">
                                    <?php include_once("php/tipo_cambio_dvcan.php"); ?><!--Obtener el tipo de cambio a la venta-->
                                    <input id="tipoCambioConv" type="text" placeholder="Cambio"  onkeypress="cambio(this.form)" name="tipoCambioConv" value="<?php echo "$xyz"; ?>" tabindex=2 autocomplete="off">
                                </div>
                                <div id="parte3">
                                    <input id="pesosConv" type="text" placeholder="Pesos" onkeypress="pesos(this.form)" name="pesosConv" tabindex=3 autocomplete="off">
                                </div>
                                </form>
                             </div><div class="panel-footer text-right"> </div></div> </div>
                              
                    <div class="row" data-toggle="isotope">

                        <div class="item col-xs-12 col-lg-9">
                    

                                 </div>
                                 </div>

<!--Sección de Desglose de moneda-->                     
<div class="row" >
    <div class="item col-xs-12 col-lg-5">
        <div class="panel panel-default paper-shadow" data-z="0.5">
            <div class="panel-heading">
                <h4 class="text-headline margin-none">Desglose</h4>
                <p class="text-subhead text-light">Desglose de moneda</p>
            </div>
         <form method="post" class="desglose">
            <div class="tabla ">
    <table>
        <thead>
                <tr><th >Denominación</th>
                <th>Entrada</th>
                <th></th>
                <th>Salida</th>
                <th></th>
                <th>Cambio</th>
                <th></th></tr>
                <tr><th ></th>
                <th>F</th>
                <th id="cant">Pesos</th>
                <th>F</th>
                <th>Dólares</th>
                <th>F</th>
                <th>Pesos</th></tr>
        </thead>
        <tbody class="manejoT">
        <tr>
            <td>1000.00</td>
            <td><input type="text" placeholder="0" id="f1" onkeypress="fajilla1000P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaPMill" name="fajillaPMill" value="0" >
            <td><input id="MIL" name="MIL" type="text" placeholder="0" tabindex=4 onkeypress="pesos1000(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoValMil" name="pesoValMil" value="0">
            
            <td><input type="text" readonly="" id="f12"></td>
            <td><input type="text" readonly=""></td>

            <td><input type="text" placeholder="0" id="f22" onkeypress="fajilla1000PS(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaPMillS" name="fajillaPMillS" value="0" >
            <td><input id="MILS" name="MILS" type="text" placeholder="0" tabindex=15 onkeypress="pesos1000S(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoValMilS" name="pesoValMilS" value="0">
        </tr>
        <tr>
            <td>500.00</td>
            <td><input type="text" placeholder="0" id="f2" onkeypress="fajilla500P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP500" name="fajillaP500" value="0" >
            <td><input id="500" name="500" type="text" placeholder="0" tabindex=5 onkeypress="pesos500(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal500" name="pesoVal500" value="0">

            <td><input type="text" readonly="" id="f13"></td>
            <td><input type="text" readonly=""></td>

            <td><input type="text" placeholder="0" id="f23" onkeypress="fajilla500PS(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP500S" name="fajillaP500S" value="0" >
            <td><input id="m500S" name="m500S" type="text" placeholder="0" tabindex=16 onkeypress="pesos500S(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal500S" name="pesoVal500S" value="0">
        </tr>
        <tr>
            <td>200.00</td>
            <td><input type="text" placeholder="0" id="f3" onkeypress="fajilla200P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP200" name="fajillaP200" value="0" >
            <td><input id="200" name="200" type="text" placeholder="0" tabindex=6 onkeypress="pesos200(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal200" name="pesoVal200" value="0">

            <td><input type="text" readonly="" id="f14"></td>
            <td><input type="text" readonly=""></td>
            
            <td><input type="text" placeholder="0" id="f24" onkeypress="fajilla200PS(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP200S" name="fajillaP200S" value="0" >
            <td><input id="m200S" name="m200S" type="text" placeholder="0" tabindex=17 onkeypress="pesos200S(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal200S" name="pesoVal200S" value="0">
        </tr>
        <tr>
            <td>100.00</td>
            <td><input type="text" placeholder="0" id="f4" onkeypress="fajilla100P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP100" name="fajillaP100" value="0" >
            <td><input id="100" name="100" type="text" placeholder="0" tabindex=7 onkeypress="pesos100(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal100" name="pesoVal100" value="0">

            <td><input type="text" placeholder="0" id="f15" onkeypress="fajilla100D(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaD100" name="fajillaD100" value="0" >
            <td><input id="d100Dll" name="d100Dll" type="text" placeholder="0" tabindex=26 onkeypress="dolares100(this.form)" autocomplete="off"></td>
            <input type="hidden" id="dolarVal100" name="dolarVal100" value="0">

            <td><input type="text" placeholder="0" id="f25" onkeypress="fajilla100PS(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP100S" name="fajillaP100S" value="0" >
            <td><input id="m100S" name="m100S" type="text" placeholder="0" tabindex=18 onkeypress="pesos100S(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal100S" name="pesoVal100S" value="0">
        </tr>
        <tr>
            <td>50.00</td>
            <td><input type="text" placeholder="0" id="f5" onkeypress="fajilla50P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP50" name="fajillaP50" value="0" >
            <td><input id="50" name="50" type="text" placeholder="0" tabindex=8 onkeypress="pesos50(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal50" name="pesoVal50" value="0">

            <td><input type="text" placeholder="0" id="f16" onkeypress="fajilla50D(this.form)" autocomplete="off"></td>
             <input type="hidden" id="fajillaD50" name="fajillaD50" value="0" >
            <td><input id="d50Dll" name="d50Dll" type="text" placeholder="0" tabindex=27 onkeypress="dolares50(this.form)" autocomplete="off"></td>
            <input type="hidden" id="dolarVal50" name="dolarVal50" value="0">

            <td><input type="text" placeholder="0" id="f26" onkeypress="fajilla50PS(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP50S" name="fajillaP50S" value="0" >
            <td><input id="m50S" name="m50S" type="text" placeholder="0" tabindex=19 onkeypress="pesos50S(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal50S" name="pesoVal50S" value="0">
        </tr>  
        <tr>
            <td>20.00</td>
            <td><input type="text" placeholder="0" id="f6" onkeypress="fajilla20P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP20" name="fajillaP20" value="0" >
            <td><input id="20" name="20" type="text" placeholder="0" tabindex=9 onkeypress="pesos20(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal20" name="pesoVal20" value="0">

            <td><input type="text" placeholder="0" id="f17" onkeypress="fajilla20D(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaD20" name="fajillaD20" value="0" >
            <td><input id="d20Dll" name="d20Dll" type="text" placeholder="0" tabindex=28 onkeypress="dolares20(this.form)" autocomplete="off"></td>
            <input type="hidden" id="dolarVal20" name="dolarVal20" value="0">

            <td><input type="text" placeholder="0" id="f27" onkeypress="fajilla20PS(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP20S" name="fajillaP20S" value="0" >
            <td><input id="m20S" name="m20S" type="text" placeholder="0" tabindex=20 onkeypress="pesos20S(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal20S" name="pesoVal20S" value="0">
        </tr> 
        <tr>
            <td>10.00</td>
            <td><input type="text" placeholder="0" id="f7" onkeyup="fajilla10P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP10" name="fajillaP10" value="0" >
            <td><input id="10" name="10" type="text" placeholder="0" tabindex=10 onkeyup="pesos10(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal10" name="pesoVal10" value="0">

            <td><input type="text" placeholder="0" id="f18" onkeypress="fajilla10D(this.form)" autocomplete="off"</td>
            <input type="hidden" id="fajillaD10" name="fajillaD10" value="0" >
            <td><input id="d10Dll" name="d10Dll" type="text" placeholder="0" tabindex=29 onkeypress="dolares10(this.form)" autocomplete="off"></td>
            <input type="hidden" id="dolarVal10" name="dolarVal10" value="0">

            <td><input type="text" placeholder="0" id="f28" onkeypress="fajilla10PS(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP10S" name="fajillaP10S" value="0" >
            <td><input id="m10S" name="m10S" type="text" placeholder="0" tabindex=21 onkeypress="pesos10S(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal10S" name="pesoVal10S" value="0">
        </tr> 
        <tr>
            <td>5.00</td>
            <td><input type="text" placeholder="0" id="f8" onkeypress="fajilla5P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP5" name="fajillaP5" value="0" >
            <td><input id="5" name="5" type="text" placeholder="0" tabindex=11 onkeypress="pesos5(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal5" name="pesoVal5" value="0">

            <td><input type="text" placeholder="0" id="f19" onkeypress="fajilla5D(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaD5" name="fajillaD5" value="0" >
            <td><input id="d5Dll" name="d5Dll" type="text" placeholder="0" tabindex=30 onkeypress="dolares5(this.form)" autocomplete="off"></td>
            <input type="hidden" id="dolarVal5" name="dolarVal5" value="0">

            <td><input type="text" placeholder="0" id="f29" onkeypress="fajilla5PS(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP5S" name="fajillaP5S" value="0" >
            <td><input id="m5S" name="m5S" type="text" placeholder="0" tabindex=22 onkeypress="pesos5S(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal5S" name="pesoVal5S" value="0">
        </tr> 
        <tr>
            <td>2.00</td>
            <td><input type="text" placeholder="0" id="f9" onkeypress="fajilla2P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP2" name="fajillaP2" value="0" >
            <td><input id="2" name="2" type="text" placeholder="0" tabindex=12 onkeypress="pesos2(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal2" name="pesoVal2" value="0">

            <td><input type="text" placeholder="0" id="f20" onkeypress="fajilla2D(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaD2" name="fajillaD2" value="0" >
            <td><input id="d2Dll" name="d2Dll" type="text" placeholder="0" tabindex=31 onkeypress="dolares2(this.form)" autocomplete="off"></td>
            <input type="hidden" id="dolarVal2" name="dolarVal2" value="0">

            <td><input type="text" placeholder="0" id="f30" onkeypress="fajilla2PS(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP2S" name="fajillaP2S" value="0" >
            <td><input id="m2S" name="m2S" type="text" placeholder="0" tabindex=23 onkeypress="pesos2S(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal2S" name="pesoVal2S" value="0">
        </tr> 
        <tr>
            <td>1.00</td>
            <td><input type="text" placeholder="0" id="f10" onkeypress="fajilla1P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP1" name="fajillaP1" value="0" >
            <td><input id="1" name="1" type="text" placeholder="0" tabindex=13 onkeypress="pesos1(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal1" name="pesoVal1" value="0">
            
            <td><input type="text" placeholder="0" id="f21" onkeypress="fajilla1D(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaD1" name="fajillaD1" value="0" >
            <td><input id="d1Dll" name="d1Dll" type="text" placeholder="0" tabindex=32 onkeypress="dolares1(this.form)" autocomplete="off"></td>
            <input type="hidden" id="dolarVal1" name="dolarVal1" value="0">

            <td><input type="text" placeholder="0" id="f31" onkeypress="fajilla1PS(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP1S" name="fajillaP1S" value="0" >
            <td><input id="m1S" name="m1S" type="text" placeholder="0" tabindex=24 onkeypress="pesos1S(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal1S" name="pesoVal1S" value="0">
        </tr> 
         <tr>
            <td>0.50</td>
            <td><input type="text" placeholder="0" id="f11" onkeypress="fajilla50C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaC50" name="fajillaC50" value="0" >
            <td><input id="05" name="05" type="text" placeholder="0" tabindex=14 onkeypress="pesos05(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal05" name="pesoVal05" value="0">
    
            <td><input type="text" readonly="" id="f33"></td>
            <td><input type="text" readonly="" ></td>

            <td><input type="text" placeholder="0" id="f32" onkeypress="fajilla50CS(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaC50S" name="fajillaC50S" value="0" >
            <td><input id="m05S" name="m05S" type="text" placeholder="0" tabindex=25 onkeypress="pesos05S(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal05S" name="pesoVal05S" value="0">
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
            <td><input id="totalDif" name="totalDif" type="hidden" placeholder="Diferencia" readonly></td>
             <td></td>
            <td><input id="totalDllDif" type="hidden" placeholder="Diferencia" readonly></td>
            <td></td>
            <td><input id="totalDifS" name="totalDifS" type="hidden" placeholder="Diferencia" readonly></td>
        </tr> 
        <tr>
            <td></td>
            <td></td>
            <input type="hidden" id="dolaresInsertar" name="dolaresInsertar">
            <input type="hidden" id="cambioInsertar" name="cambioInsertar">
            <input type="hidden" id="pesosInsertar" name="pesosInsertar">
            <input type="hidden" id="subtotal" name="subtotal">
            <input type="hidden" id="subtotalDll" name="subtotalDll">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated type="submit" id="registraMov" value="Listo" tabindex=33></td>
        </tr> 
        </tbody>
    </table>
    </form>
    <?php include_once("php/venta_dolares_can.php"); ?><!--Operaciones de la venta de dólares canadienses-->
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