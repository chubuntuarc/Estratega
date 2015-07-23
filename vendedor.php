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
                                    <input id="divisaConv" type="text" placeholder="Dólares" onkeyup="conPesos(this.form)" onkeypress="divisa1(this.form);divisa2(this.form);divisa3(this.form);divisa4(this.form)"  name="divisaConv">
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
                                    <input id="tipoCambioConv" type="text" placeholder="Cambio" onkeyup="conPesos2(this.form)" onkeypress="cambio1(this.form);cambio2(this.form);cambio3(this.form);cambio4(this.form)" name="tipoCambioConv" value="<?php echo "$xyz"; ?>">
                                </div>
                                <div id="parte3">
                                    <input id="pesosConv" type="text" placeholder="Pesos" onkeyup="conDivisa(this.form)" onkeypress="pesos1(this.form);pesos2(this.form);pesos3(this.form);pesos4(this.form)" name="pesosConv">
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
            <td><input type="text" placeholder="0"></td>
            <td><input type="text" placeholder="0"></td>
        </tr>
        <tr>
            <td>500.00</td>
            <td><input type="text" placeholder="0"></td>
            <td><input type="text" placeholder="0"></td>
        </tr>
        <tr>
            <td>200.00</td>
            <td><input type="text" placeholder="0"></td>
            <td><input type="text" placeholder="0"></td>
        </tr>
        <tr>
            <td>100.00</td>
            <td><input type="text" placeholder="0"></td>
            <td><input type="text" placeholder="0"></td>
        </tr>
        <tr>
            <td>50.00</td>
            <td><input type="text" placeholder="0"></td>
            <td><input type="text" placeholder="0"></td>
        </tr>  
        <tr>
            <td>20.00</td>
            <td><input type="text" placeholder="0"></td>
            <td><input type="text" placeholder="0"></td>
        </tr> 
        <tr>
            <td>10.00</td>
            <td><input type="text" placeholder="0"></td>
            <td><input type="text" placeholder="0"></td>
        </tr> 
        <tr>
            <td>5.00</td>
            <td><input type="text" placeholder="0"></td>
            <td><input type="text" placeholder="0"></td>
        </tr> 
        <tr>
            <td>2.00</td>
            <td><input type="text" placeholder="0"></td>
            <td><input type="text" placeholder="0"></td>
        </tr> 
        <tr>
            <td>1.00</td>
            <td><input type="text" placeholder="0"></td>
            <td><input type="text" placeholder="0"></td>
        </tr> 
         <tr>
            <td></td>
            <td><input id="totalConv" name="totalConv" type="text" placeholder="Total" readonly></td>
            <td><input id="totalDllConv" name="totalDllConv" type="text" placeholder="Total" readonly></td>
        </tr> 
         <tr>
            <td></td>
            <td><input type="text" placeholder="Diferencia" readonly></td>
            <td><input type="text" placeholder="Diferencia" readonly></td>
        </tr> 
        <tr>
            <td></td>
            <input type="hidden" id="dolaresInsertar" name="dolaresInsertar">
            <input type="hidden" id="cambioInsertar" name="cambioInsertar">
            <td> <input class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated type="submit" id="registraMov" value="Registrar"></td>
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
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            if ($dolarAnt > $dolar) {
                $query = "INSERT INTO movimientos (cantidad, divisa, tipo_cambio,tipo_movimiento, usuario) VALUES ({$_POST['dolaresInsertar']} ,'Dollar',{$_POST['cambioInsertar']},'Venta','$nom')";
                $resultado = mysql_query($query);
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
            if ($dolarAnt > $dolar) {
               $query = "UPDATE cajas SET dolares = $nuevoDolar, pesos = $nuevoPeso WHERE usuario = '$nom'";
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