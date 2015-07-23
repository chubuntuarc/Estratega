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
    <!-- Compressed Vendor BUNDLE
    Includes vendor (3rd party) styling such as the customized Bootstrap and other 3rd party libraries used for the current theme/module -->
    <link href="css/vendor.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/tabla.css">
    <link rel="stylesheet" type="text/css" href="css/vendedor.css">
    <!-- Compressed Theme BUNDLE
Note: The bundle includes all the custom styling required for the current theme, however
it was tweaked for the current theme/module and does NOT include ALL of the standalone modules;
The bundle was generated using modern frontend development tools that are provided with the package
To learn more about the development process, please refer to the documentation. -->
    <!-- <link href="css/theme.bundle.min.css" rel="stylesheet"> -->
    <!-- Compressed Theme CORE
This variant is to be used when loading the separate styling modules -->
    <link href="css/theme-core.min.css" rel="stylesheet">
    <!-- Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL modules are 100% compatible -->
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
     <!--Funciones para realizar la conversión-->
            <script language="javascript" type="text/javascript">
                function conPesos ( form ) 
                {
                    form.pesosConv.value = (form.divisaConv.value * form.tipoCambioConv.value).toFixed(2)
                }               
            </script>
             <script language="javascript" type="text/javascript">
                function conPesos2 ( form ) 
                {
                    form.pesosConv.value =(form.divisaConv.value * form.tipoCambioConv.value).toFixed(2)
                }               
            </script>
            
             <script language="javascript" type="text/javascript">
                function conDivisa ( form ) 
                {
                  form.divisaConv.value = (form.pesosConv.value / form.tipoCambioConv.value).toFixed(2)
                }               
            </script>

            <!--Funciones para igualar valores -->
            <!--Funciones en el campo de divisa-->
            <script language="javascript" type="text/javascript">
                function divisa1 ( form ) 
                { $("#divisaConv").keyup(function () {
                    $("#totalConv").val($("#pesosConv").val()); });
                 } </script>

            <script language="javascript" type="text/javascript">
                function divisa2 ( form ) 
                { $("#divisaConv").keyup(function () {
                    $("#totalDllConv").val($("#divisaConv").val()); });
                 } </script>
                              
             <script language="javascript" type="text/javascript">
                function divisa3 ( form ) 
                { $("#divisaConv").keyup(function () {
                    $("#dolaresInsertar").val($("#divisaConv").val()); }); 
                }  </script>             

            <script language="javascript" type="text/javascript">
                function divisa4 ( form ) 
                { $("#divisaConv").keyup(function () {
                    $("#cambioInsertar").val($("#tipoCambioConv").val()); }); 
                } </script>             
            
            <!--Funciones en el campo de Tipo de cambio-->
            <script language="javascript" type="text/javascript">
                function cambio1 ( form ) 
                { $("#tipoCambioConv").keyup(function () {
                    $("#totalConv").val($("#pesosConv").val()); }); 
                } </script> 

            <script language="javascript" type="text/javascript">
                function cambio2 ( form ) 
                { $("#tipoCambioConv").keyup(function () {
                    $("#totalDllConv").val($("#divisaConv").val()); });
                 } </script>
                     
            <script language="javascript" type="text/javascript">
                function cambio3 ( form ) 
                { $("#tipoCambioConv").keyup(function () {
                    $("#dolaresInsertar").val($("#divisaConv").val()); }); 
                } </script> 

            <script language="javascript" type="text/javascript">
                function cambio4 ( form ) 
                { $("#tipoCambioConv").keyup(function () {
                    $("#cambioInsertar").val($("#tipoCambioConv").val()); }); 
                } </script>                
            
            <!--Funciones en el campo de Pesos-->
            <script language="javascript" type="text/javascript">
                function pesos1 ( form ) 
                { $("#pesosConv").keyup(function () {
                    $("#totalConv").val($("#pesosConv").val()); }); 
                } </script> 

            <script language="javascript" type="text/javascript">
                function pesos2 ( form ) 
                { $("#pesosConv").keyup(function () {
                    $("#totalDllConv").val($("#divisaConv").val()); });
                 } </script>    

            <script language="javascript" type="text/javascript">
                function pesos3 ( form ) 
                { $("#pesosConv").keyup(function () {
                    $("#dolaresInsertar").val($("#divisaConv").val()); }); 
                } </script> 

            <script language="javascript" type="text/javascript">
                function pesos4 ( form ) 
                { $("#pesosConv").keyup(function () {
                    $("#cambioInsertar").val($("#tipoCambioConv").val()); }); 
                } </script>
</head>
<body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top navbar-size-large navbar-size-xlarge paper-shadow" data-z="0" data-animated role="navigation">
        <div class="container">
          <div class="navbar-brand navbar-brand-logo">
                    <img id="logoxx" src="images/estratega.png">
                </div>
                <div class="menux col-xs-3 col-lg-9">
                    <a href="movimientos.php" >Movimientos</a>
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
                        <div class="item col-xs-12 col-lg-8">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline margin-none">Venta</h4>
                                </div>
                                <div class="tabla ">
                                <form>
                                  <div id="parte1">
                                    <input id="divisaConv" type="text" placeholder="Dólares" onkeyup="conPesos(this.form)" onkeypress="divisa1(this.form);divisa2(this.form);divisa3(this.form);divisa4(this.form)"  name="divisaConv" tabindex=1 autofocus>
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
                                    <input id="tipoCambioConv" type="text" placeholder="Cambio" onkeyup="conPesos2(this.form)" onkeypress="cambio1(this.form);cambio2(this.form);cambio3(this.form);cambio4(this.form)" name="tipoCambioConv" value="<?php echo "$xyz"; ?>" tabindex=2>
                                </div>
                                <div id="parte3">
                                    <input id="pesosConv" type="text" placeholder="Pesos" onkeyup="conDivisa(this.form)" onkeypress="pesos1(this.form);pesos2(this.form);pesos3(this.form);pesos4(this.form)" name="pesosConv" tabindex=3>
                                </div>
                               </form>
                             </div><div class="panel-footer text-right"> </div></div> </div>
                              
                    <div class="row" data-toggle="isotope">

                        <div class="item col-xs-12 col-lg-9">
                    

                                 </div>
                                 </div>
                    <div class="row" >
                        <div class="item col-xs-4 col-lg-4">
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
                <th id="cant">Pesos</th>
                <th>Dólares</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>1000.00</td>
            <script language="javascript" type="text/javascript">
                function pesos1000 ( form ) 
                { $("#MIL").keyup(function () {
                    $("#pesoValMil").val($("#MIL").val() * 1000); }); 
                }
                function pesos1001 ( form ) 
                { $("#MIL").keyup(function () {
                    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val()).toFixed(2)); }); 
                }  </script>
            <td><input id="MIL" name="MIL" type="text" placeholder="0" tabindex=4 onkeypress="pesos1000(this.form);pesos1001(this.form)"></td>
            <input type="hidden" id="pesoValMil" name="pesoValMil">
            <td><input type="text" readonly=""></td>
        </tr>
        <tr>
            <td>500.00</td>
            <script language="javascript" type="text/javascript">
                function pesos500 ( form ) 
                { $("#500").keyup(function () {
                    $("#pesoVal500").val($("#500").val() * 500); }); 
                }
                function pesos501 ( form ) 
                { $("#500").keyup(function () {
                    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val()).toFixed(2)); }); 
                }  </script>
            <td><input id="500" name="500" type="text" placeholder="0" tabindex=5 onkeypress="pesos500(this.form);pesos501(this.form)"></td>
            <input type="hidden" id="pesoVal500" name="pesoVal500">
            <td><input type="text" readonly=""></td>
        </tr>
        <tr>
            <td>200.00</td>
            <script language="javascript" type="text/javascript">
                function pesos200 ( form ) 
                { $("#200").keyup(function () {
                    $("#pesoVal200").val($("#200").val() * 200); }); 
                }
                function pesos201 ( form ) 
                { $("#200").keyup(function () {
                    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val() - $("#pesoVal200").val()).toFixed(2)); }); 
                }  </script>
            <td><input id="200" name="200" type="text" placeholder="0" tabindex=6 onkeypress="pesos200(this.form);pesos201(this.form)"></td>
            <input type="hidden" id="pesoVal200" name="pesoVal200">
            <td><input type="text" readonly=""></td>
        </tr>
        <tr>
            <td>100.00</td>
            <script language="javascript" type="text/javascript">
                function pesos100 ( form ) 
                { $("#100").keyup(function () {
                    $("#pesoVal100").val($("#100").val() * 100); }); 
                }
                function pesos101 ( form ) 
                { $("#100").keyup(function () {
                    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val() - $("#pesoVal200").val() - $("#pesoVal100").val()).toFixed(2)); }); 
                }  </script>
            <td><input id="100" name="100" type="text" placeholder="0" tabindex=7 onkeypress="pesos100(this.form);pesos101(this.form)"></td>
            <input type="hidden" id="pesoVal100" name="pesoVal100">
            <script language="javascript" type="text/javascript">
                function dolares100 ( form ) 
                { $("#100Dll").keyup(function () {
                    $("#dolarVal100").val($("#100Dll").val() * 100); }); 
                }
                function dolares101 ( form ) 
                { $("#100Dll").keyup(function () {
                    $("#totalDllDif").val(($("#totalDllConv").val() - $("#dolarVal100").val()).toFixed(2)); }); 
                }  </script>
            <td><input id="100Dll" type="text" placeholder="0" tabindex=15 onkeypress="dolares100(this.form);dolares101(this.form)"></td>
            <input type="hidden" id="dolarVal100" name="dolarVal100">
        </tr>
        <tr>
            <td>50.00</td>
            <script language="javascript" type="text/javascript">
                function pesos50 ( form ) 
                { $("#50").keyup(function () {
                    $("#pesoVal50").val($("#50").val() * 50); }); 
                }
                function pesos51 ( form ) 
                { $("#50").keyup(function () {
                    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val() - $("#pesoVal200").val() - $("#pesoVal100").val() - $("#pesoVal50").val()).toFixed(2)); }); 
                }  </script>
            <td><input id="50" name="50" type="text" placeholder="0" tabindex=8 onkeypress="pesos50(this.form);pesos51(this.form)"></td>
            <input type="hidden" id="pesoVal50" name="pesoVal50">
            <script language="javascript" type="text/javascript">
                function dolares50 ( form ) 
                { $("#50Dll").keyup(function () {
                    $("#dolarVal50").val($("#50Dll").val() * 50); }); 
                }
                function dolares51 ( form ) 
                { $("#50Dll").keyup(function () {
                    $("#totalDllDif").val(($("#totalDllConv").val() - $("#dolarVal100").val() - $("#dolarVal50").val()).toFixed(2)); }); 
                }  </script>
            <td><input id="50Dll" type="text" placeholder="0" tabindex=16 onkeypress="dolares50(this.form);dolares51(this.form)"></td>
            <input type="hidden" id="dolarVal50" name="dolarVal50">
        </tr>  
        <tr>
            <td>20.00</td>
            <script language="javascript" type="text/javascript">
                function pesos20 ( form ) 
                { $("#20").keyup(function () {
                    $("#pesoVal20").val($("#20").val() * 20); }); 
                }
                function pesos21 ( form ) 
                { $("#20").keyup(function () {
                    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val() - $("#pesoVal200").val() - $("#pesoVal100").val() - $("#pesoVal50").val() - $("#pesoVal20").val()).toFixed(2)); }); 
                }  </script>
            <td><input id="20" name="20" type="text" placeholder="0" tabindex=9 onkeypress="pesos20(this.form);pesos21(this.form)"></td>
            <input type="hidden" id="pesoVal20" name="pesoVal20">
            <script language="javascript" type="text/javascript">
                function dolares20 ( form ) 
                { $("#20Dll").keyup(function () {
                    $("#dolarVal20").val($("#20Dll").val() * 20); }); 
                }
                function dolares21 ( form ) 
                { $("#20Dll").keyup(function () {
                    $("#totalDllDif").val(($("#totalDllConv").val() - $("#dolarVal100").val() - $("#dolarVal50").val() - $("#dolarVal20").val()).toFixed(2)); }); 
                }  </script>
            <td><input id="20Dll" type="text" placeholder="0" tabindex=17 onkeypress="dolares20(this.form);dolares21(this.form)"></td>
            <input type="hidden" id="dolarVal20" name="dolarVal20">
        </tr> 
        <tr>
            <td>10.00</td>
            <script language="javascript" type="text/javascript">
                function pesos10 ( form ) 
                { $("#10").keyup(function () {
                    $("#pesoVal10").val($("#10").val() * 10); }); 
                }
                function pesos11 ( form ) 
                { $("#10").keyup(function () {
                    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val() - $("#pesoVal200").val() - $("#pesoVal100").val() - $("#pesoVal50").val() - $("#pesoVal20").val() - $("#pesoVal10").val()).toFixed(2)); }); 
                }  </script>
            <td><input id="10" name="10" type="text" placeholder="0" tabindex=10 onkeypress="pesos10(this.form);pesos11(this.form)"></td>
            <input type="hidden" id="pesoVal10" name="pesoVal10">
            <script language="javascript" type="text/javascript">
                function dolares10 ( form ) 
                { $("#10Dll").keyup(function () {
                    $("#dolarVal10").val($("#10Dll").val() * 10); }); 
                }
                function dolares11 ( form ) 
                { $("#10Dll").keyup(function () {
                    $("#totalDllDif").val(($("#totalDllConv").val() - $("#dolarVal100").val() - $("#dolarVal50").val() - $("#dolarVal20").val() - $("#dolarVal10").val()).toFixed(2)); }); 
                }  </script>
            <td><input id="10Dll" type="text" placeholder="0" tabindex=18 onkeypress="dolares10(this.form);dolares11(this.form)"></td>
            <input type="hidden" id="dolarVal10" name="dolarVal10">
        </tr> 
        <tr>
            <td>5.00</td>
            <script language="javascript" type="text/javascript">
                function pesos5 ( form ) 
                { $("#5").keyup(function () {
                    $("#pesoVal5").val($("#5").val() * 5); }); 
                }
                function pesos5b ( form ) 
                { $("#5").keyup(function () {
                    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val() - $("#pesoVal200").val() - $("#pesoVal100").val() - $("#pesoVal50").val() - $("#pesoVal20").val() - $("#pesoVal10").val() - $("#pesoVal5").val()).toFixed(2)); }); 
                }  </script>
            <td><input id="5" name="5" type="text" placeholder="0" tabindex=11 onkeypress="pesos5(this.form);pesos5b(this.form)"></td>
            <input type="hidden" id="pesoVal5" name="pesoVal5">
            <script language="javascript" type="text/javascript">
                function dolares5 ( form ) 
                { $("#5Dll").keyup(function () {
                    $("#dolarVal5").val($("#5Dll").val() * 5); }); 
                }
                function dolares5b ( form ) 
                { $("#5Dll").keyup(function () {
                    $("#totalDllDif").val(($("#totalDllConv").val() - $("#dolarVal100").val() - $("#dolarVal50").val() - $("#dolarVal20").val() - $("#dolarVal10").val() - $("#dolarVal5").val()).toFixed(2)); }); 
                }  </script>
            <td><input id="5Dll" type="text" placeholder="0" tabindex=19 onkeypress="dolares5(this.form);dolares5b(this.form)"></td>
            <input type="hidden" id="dolarVal5" name="dolarVal5">

        </tr> 
        <tr>
            <td>2.00</td>
            <script language="javascript" type="text/javascript">
                function pesos2 ( form ) 
                { $("#2").keyup(function () {
                    $("#pesoVal2").val($("#2").val() * 2); }); 
                }
                function pesos2b ( form ) 
                { $("#2").keyup(function () {
                    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val() - $("#pesoVal200").val() - $("#pesoVal100").val() - $("#pesoVal50").val() - $("#pesoVal20").val() - $("#pesoVal10").val() - $("#pesoVal5").val() - $("#pesoVal2").val()).toFixed(2)); }); 
                }  </script>
            <td><input id="2" name="2" type="text" placeholder="0" tabindex=12 onkeypress="pesos2(this.form);pesos2b(this.form)"></td>
            <input type="hidden" id="pesoVal2" name="pesoVal2">
            <script language="javascript" type="text/javascript">
                function dolares2 ( form ) 
                { $("#2Dll").keyup(function () {
                    $("#dolarVal2").val($("#2Dll").val() * 2); }); 
                }
                function dolares2b ( form ) 
                { $("#2Dll").keyup(function () {
                    $("#totalDllDif").val(($("#totalDllConv").val() - $("#dolarVal100").val() - $("#dolarVal50").val() - $("#dolarVal20").val() - $("#dolarVal10").val() - $("#dolarVal5").val() - $("#dolarVal2").val()).toFixed(2)); }); 
                }  </script>
            <td><input id="2Dll" type="text" placeholder="0" tabindex=20 onkeypress="dolares2(this.form);dolares2b(this.form)"></td>
            <input type="hidden" id="dolarVal2" name="dolarVal2">
        </tr> 
        <tr>
            <td>1.00</td>
             <script language="javascript" type="text/javascript">
                function pesos1 ( form ) 
                { $("#1").keyup(function () {
                    $("#pesoVal1").val($("#1").val() * 1); }); 
                }
                function pesos1b ( form ) 
                { $("#1").keyup(function () {
                    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val() - $("#pesoVal200").val() - $("#pesoVal100").val() - $("#pesoVal50").val() - $("#pesoVal20").val() - $("#pesoVal10").val() - $("#pesoVal5").val() - $("#pesoVal2").val() - $("#pesoVal1").val()).toFixed(2)); }); 
                }  </script>
            <td><input id="1" name="1" type="text" placeholder="0" tabindex=13 onkeypress="pesos1(this.form);pesos1b(this.form)"></td>
            <input type="hidden" id="pesoVal1" name="pesoVal1">
            <script language="javascript" type="text/javascript">
                function dolares1 ( form ) 
                { $("#1Dll").keyup(function () {
                    $("#dolarVal1").val($("#1Dll").val() * 1); }); 
                }
                function dolares1b ( form ) 
                { $("#1Dll").keyup(function () {
                    $("#totalDllDif").val(($("#totalDllConv").val() - $("#dolarVal100").val() - $("#dolarVal50").val() - $("#dolarVal20").val() - $("#dolarVal10").val() - $("#dolarVal5").val() - $("#dolarVal2").val() - $("#dolarVal1").val()).toFixed(2)); }); 
                }  </script>
            <td><input id="1Dll" type="text" placeholder="0" tabindex=21 onkeypress="dolares1(this.form);dolares1b(this.form)"></td>
            <input type="hidden" id="dolarVal1" name="dolarVal1">
        </tr> 
         <tr>
            <td>0.50</td>
            <script language="javascript" type="text/javascript">
                function pesos05 ( form ) 
                { $("#05").keyup(function () {
                    $("#pesoVal05").val($("#05").val() * 0.5); }); 
                }
                function pesos05b ( form ) 
                { $("#05").keyup(function () {
                    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val() - $("#pesoVal200").val() - $("#pesoVal100").val() - $("#pesoVal50").val() - $("#pesoVal20").val() - $("#pesoVal10").val() - $("#pesoVal5").val() - $("#pesoVal2").val() - $("#pesoVal1").val() - $("#pesoVal05").val()).toFixed(2)); }); 
                }  </script>
            <td><input id="05" name="05" type="text" placeholder="0" tabindex=14 onkeypress="pesos05(this.form);pesos05b(this.form)"></td>
            <input type="hidden" id="pesoVal05" name="pesoVal05">
            <td><input type="text" readonly="" ></td>
        </tr> 
         <tr>
            <td></td>
            <td><input id="totalConv" name="totalConv" type="text" placeholder="Total" readonly></td>
            <td><input id="totalDllConv" name="totalDllConv" type="text" placeholder="Total" readonly></td>
        </tr> 
         <tr>
            <td></td>
            <td><input id="totalDif" name="totalDif" type="text" placeholder="Diferencia" readonly></td>
            <td><input id="totalDllDif" type="text" placeholder="Diferencia" readonly></td>
        </tr> 
        <tr>
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
            }
     ?>
    <?php 
            $dolar = $_POST['dolaresInsertar'];
            $difPeso = $_POST['totalDif'];
            $difDolar = $_POST['totalDllDif'];
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            if ($dolarAnt >= $dolar && $difPeso < 0.20 && $difDolar == 0.00) {
                $query = "INSERT INTO movimientos (cantidad, divisa, tipo_cambio,tipo_movimiento, usuario) VALUES ({$_POST['dolaresInsertar']} ,'Dollar',{$_POST['cambioInsertar']},'Venta','$nom')";
                $resultado = mysql_query($query);
            }
            elseif ($difPeso > 0.20 || $difDolar != 0.00) {
                ?> <script>alert("No se realizo el desglose correctamente");</script><?php 
            }
            else
            {
                 ?> <script>alert("No cuenta con suficientes dólares en caja");</script><?php            
            }
            
     ?>
     <?php 
            $dolar = $_POST['dolaresInsertar'];
            $nuevoDolar = $dolarAnt - $dolar;
            $peso = $_POST['totalConv'];
            $nuevoPeso = $pesosAnt + $peso;
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            if ($dolarAnt >= $dolar) {
               $query = "UPDATE cajas SET dolares = $nuevoDolar, pesos = $nuevoPeso WHERE usuario = '$nom'";
               $resultado = mysql_query($query);
            }
     ?>
     <!--Insertar valores del desglose
     <?php 
            $dolar = $_POST['dolaresInsertar'];
            $difPeso = $_POST['totalDif'];
            $difDolar = $_POST['totalDllDif'];
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            if ($dolarAnt >= $dolar && $difPeso < 0.10 && $difDolar == 0.00) {
                $query = "INSERT INTO desglose_pesos (a,b,c,d,e,f,g,h,i,j,tipo,usuario) VALUES (1,1,1,0,0,0,0,0,1,1,'Venta','$nom')";
                $resultado = mysql_query($query);
            }
            elseif ($difPeso > 0.10 || $difDolar != 0.00) {
                ?> <script>alert("No se realizo el desglose correctamente");</script><?php 
            }
            else
            {
                 ?> <script>alert("No cuenta con suficientes dólares en caja");</script><?php            
            }
     ?>-->
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

    <!-- Separate Vendor Script Bundles -->
    <script src="js/vendor-core.min.js"></script>
    <script src="js/vendor-countdown.min.js"></script>
    <script src="js/vendor-tables.min.js"></script>
    <script src="js/vendor-forms.min.js"></script>
    <script src="js/vendor-carousel-slick.min.js"></script>
    <script src="js/vendor-player.min.js"></script>
    <script src="js/vendor-charts-flot.min.js"></script>
    <script src="js/vendor-nestable.min.js"></script>
    <!-- <script src="js/vendor-angular.min.js"></script> -->
    <!-- Compressed Vendor Scripts Bundle
    Includes all of the 3rd party JavaScript libraries above.
    The bundle was generated using modern frontend development tools that are provided with the package
    To learn more about the development process, please refer to the documentation.
    Do not use it simultaneously with the separate bundles above. -->
    <!-- <script src="js/vendor-bundle-all.min.js"></script> -->
    <!-- Compressed App Scripts Bundle
    Includes Custom Application JavaScript used for the current theme/module;
    Do not use it simultaneously with the standalone modules below. -->
    <!-- <script src="js/module-bundle-main.min.js"></script> -->
    <!-- Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL the modules are 100% compatible -->
    <script src="js/module-essentials.min.js"></script>
    <script src="js/module-material.min.js"></script>
    <script src="js/module-layout.min.js"></script>
    <script src="js/module-sidebar.min.js"></script>
    <script src="js/module-carousel-slick.min.js"></script>
    <script src="js/module-player.min.js"></script>
    <script src="js/module-messages.min.js"></script>
    <script src="js/module-maps-google.min.js"></script>
    <script src="js/module-charts-flot.min.js"></script>
    <!-- [html] Core Theme Script:
        Includes the custom JavaScript for this theme/module;
        The file has to be loaded in addition to the UI modules above;
        module-bundle-main.js already includes theme-core.js so this should be loaded
        ONLY when using the standalone modules; -->
    <script src="js/theme-core.min.js"></script>
</body>
</html>