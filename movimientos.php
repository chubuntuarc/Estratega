<?php include("php/sesion.php"); ?>
<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Estratega Movimientos</title>
    <script src="js/script.js"></script>
    <link href="css/vendor.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/tabla.css">
    <link rel="stylesheet" type="text/css" href="css/cierre.css">
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

<!-- Menu superior e información del usuario -->
<div class="navbar navbar-default navbar-fixed-top navbar-size-large navbar-size-xlarge paper-shadow" data-z="0" data-animated role="navigation">
    <div class="container">
      <div class="navbar-brand navbar-brand-logo">
                <img id="logoxx" src="images/estratega.png">
            </div>
            <div class="menux col-xs-3 col-lg-9">
                <a href="vendedor.php" >Operaciones</a>
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

<!--Movimientos adicionales-->         
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="media v-middle">
                            <div class="media-left">
                                <div class="bg-green-400 text-white">
                                    <div class="panel-body">
                                        <i class="fa fa-credit-card fa-fw fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="inputacion">
                                <form method="post" >
                                <input name="documento" type="file">
                                 <select name="concepto">
                                        <option>Agua</option>
                                        <option>Luz</option>
                                        <option>Salario</option>
                                        <option>Deposito</option>
                                        <option>Transferencia</option>
                                        <option>Pago</option>
                                        <option>Otro</option>
                                    </select>
                                    <input name="comentario" type="text" placeholder="Comentario" >
                                    <input name="cantidad" type="text" placeholder="Cantidad"  required>
                                    <select name="movimiento">
                                        <option>Entrada</option>
                                        <option>Salida</option>
                                    </select>
                                    
                                    <input class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated type="submit" id="registra" value="Registrar">
                                    <?php include_once("php/adicionales_insert.php"); ?><!--Se insertan movimientos adicionales a la BD-->
                                </form>   
                                </div> 
                            </div>
                        </div>
                    </div>

<!--Sección con el registro de las ultimas compras--> 
<div class="row" data-toggle="isotope">
    <div class="item col-xs-12 col-lg-4">
        <div class="panel panel-default paper-shadow" data-z="0.5">
            <div class="panel-heading">
                <h4 class="text-headline margin-none">Compras</h4>
                <p class="text-subhead text-light">Ultimas compras registradas</p>
            </div>
            <div class="tabla ">
    <table>
        <thead>
            <tr>
                <th id="folio">Folio</th>
                <th id="divi">Divisa</th>
                <th id="ctd">Cantidad</th>
                <th>Pesos</th>
                <th id="tc">Tipo de Cambio</th>
            </tr>
        </thead>
        <tbody>
           <?php include_once("php/compras.php"); ?><!--Vista de registro de compras-->
        </tbody>
    </table>
</div>
<div class="panel-footer text-right">
</div>
</div>
</div>

<!--Sección con el registro de las ultimas ventas-->                    
<div class="row" >
    <div class="item col-xs-12 col-lg-4">
        <div class="panel panel-default paper-shadow" data-z="0.5">
            <div class="panel-heading">
                <h4 class="text-headline margin-none">Ventas</h4>
                <p class="text-subhead text-light">Ultimas Ventas registradas</p>
            </div>
            <div class="tabla ">
    <table>
        <thead>
            <tr>
                <th id="folio">Folio</th>
                <th id="divi">Divisa</th>
                <th id="ctd">Cantidad</th>
                <th>Pesos</th>
                <th id="tc">Tipo de Cambio</th>
            </tr>
        </thead>
        <tbody>
            <?php include_once("php/ventas.php"); ?> <!--Vista de registro de ventas-->
        </tbody>
    </table>
</div>
<div class="panel-footer text-right">
</div>
 </div>
</div>

<!--Sección con los promedios de compra / venta--> 
<div class="row" >
    <div class="item col-xs-12 col-lg-4">
        <div class="panel panel-default paper-shadow" data-z="0.5">
            <div class="panel-heading">
                <h4 class="text-headline margin-none">Concentrado</h4>
                <p class="text-subhead text-light">Total y promedios de operaciones</p>
            </div>
            <div class="tabla ">
    <table>
        <thead>
            <tr>
                <th id="divi">Divisa</th>
                <th id="cpra">Compra</th>
                <th id="vta">Venta</th>
                <th> -- Promedios --<br>Compra</th>
                <th><br>Venta</th>
            </tr>
        </thead>
        <tbody>
        <?php include_once("php/promedios.php"); ?><!--Calculo de los promedios-->
        </tbody>
    </table>
</div>
<div class="panel-footer text-right">
</div>
 </div>
</div>

<!--Sección en la que se agregan movimientos adicionales a la compra / venta-->
 <div class="row" >
    <div class="item col-xs-4 col-lg-4">
        <div class="panel panel-default paper-shadow" data-z="0.5">
            <div class="panel-heading">
                <h4 class="text-headline margin-none">Adicionales</h4>
                <p class="text-subhead text-light">Movimientos distintos a compra/venta</p>
            </div>
            <div class="tabla ">
    <table>
        <thead>
            <tr>
                <th id="folio">Folio</th>
                <th id="folio">Concepto</th>
                <th id="folio" >Movimiento</th>
                <th id="folio">Cantidad</th>
            </tr>
        </thead>
        <tbody>
        <?php include_once("php/adicionales.php"); ?><!--Se insertan los movimientos adicionales-->
        </tbody>
    </table>
</div>
<div class="panel-footer text-right">
</div>
 </div></div>

<!--Sección de la situación actual de la caja-->
<div class="row" >
    <div class="item col-xs-8 col-lg-4">
        <div class="panel panel-default paper-shadow" data-z="0.5">
            <div class="panel-heading">
                <h4 class="text-headline margin-none">Situación</h4>
                <p class="text-subhead text-light">Dinero en caja</p>
            </div>
            <div class="tabla ">
    <table>
        <thead>
            <tr>
                <th id="divsi">Divisa</th>
                <th id="cant">Cantidad</th>
            </tr>
        </thead>
        <tbody>
            <?php include_once("php/situacion_caja.php"); ?> <!--Se consulta la situacion de la BD-->
        </tbody>
    </table>
</div>
        <div class="panel-footer text-right">
        </div>
    </div>
</div>    

<!--Sección con el ajuste de tipo de cambio a la venta-->
  <div class="row" >
    <div class="item col-xs-8 col-lg-4">
        <div class="panel panel-default paper-shadow" data-z="0.5">
            <div class="panel-heading">
                <h4 class="text-headline margin-none">Tipo de cambio / Venta</h4>
                <p class="text-subhead text-light">Ajuste de tipos de cambio a la venta</p>
            </div>
            <div class="tabla ">
            <form method="post">
            <?php include_once("php/busqueda_ajustes_venta.php"); ?>
                <table>
                <thead>
                    <tr>
                        <th id="divsi">Divisa</th>
                        <th id="cant">Tipo de cambio</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                       <td>Dólar</td>
                       <td><input type="text" name="dolarAjuste" required value="<?php echo $ajusteDll; ?>"></td>
                   </tr>
                   <tr>
                       <td>Dólar Can</td>
                       <td><input type="text" name="canAjuste" required value="<?php echo $ajusteCan; ?>"></td>
                   </tr>
                   <tr>
                       <td>Euro</td>
                       <td><input type="text" name="euroAjuste" required value="<?php echo $ajusteEur; ?>"></td>
                   </tr>
                   <tr>
                       <td></td>
                       <td> <input class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated type="submit" id="ajustar" name="ajustar" value="Ajustar"></td>
                   </tr>
                </tbody>
            </table>
            </form>
            <?php include_once("php/ajuste_cambio_venta.php"); ?>
            </div>
            <div class="panel-footer text-right">
            </div>
        </div>
    </div>    

<!--Sección con el ajuste de tipo de cambio a la compra-->
     <div class="row" >
    <div class="item col-xs-8 col-lg-4">
        <div class="panel panel-default paper-shadow" data-z="0.5">
            <div class="panel-heading">
                <h4 class="text-headline margin-none">Tipo de cambio / Compra</h4>
                <p class="text-subhead text-light">Ajuste de tipos de cambio a la compra</p>
            </div>
            <div class="tabla ">
            <form method="post">
             <?php include_once("php/busqueda_ajustes_compra.php"); ?><!--Busqueda de los valores anteriores en la tabla de ajuste de cambio a la compra-->
                <table>
                <thead>
                    <tr>
                        <th id="divsi">Divisa</th>
                        <th id="cant">Tipo de cambio</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                       <td>Dólar</td>
                       <td><input type="text" name="dolarCompra" required value="<?php echo $ajusteDllC; ?>"></td>
                   </tr>
                   <tr>
                       <td>Dólar Can</td>
                       <td><input type="text" name="canCompra" required value="<?php echo $ajusteCanC; ?>"></td>
                   </tr>
                   <tr>
                       <td>Euro</td>
                       <td><input type="text" name="euroCompra" required value="<?php echo $ajusteEurC; ?>"></td>
                   </tr>
                   <tr>
                       <td></td>
                       <td> <input class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated type="submit" id="ajustar" name="ajustar" value="Ajustar"></td>
                   </tr>
                </tbody>
            </table>
            </form>
           <?php include_once("php/ajuste_cambio_compra.php"); ?><!--Se insertan los nuevos tipos de cambio a la compra-->
            </div>
            <div class="panel-footer text-right">
            </div>
        </div>
    </div> 

<!--Sección que contiene la tabla para realizar el arqueo en caja-->
    <div class="row" >
    <div class="item col-xs-8 col-lg-8">
        <div class="panel panel-default paper-shadow" data-z="0.5">
            <div class="panel-heading">
                <h4 class="text-headline margin-none">Arqueo</h4>
                <p class="text-subhead text-light">Arqueo de caja</p>
            </div>
            <div class="tabla ">
            <form method="post">
                <table>
                <thead>
                    <tr>
                        <th>Divisa</th>
                        <th>1000</th>
                        <th>500</th>
                        <th>200</th>
                        <th>100</th>
                        <th>50</th>
                        <th>20</th>
                        <th>10</th>
                        <th>5</th>
                        <th>2</th>
                        <th>1</th>
                        <th>0.50</th>
                    </tr>
                </thead>
                <tbody id="arqueo">
                   <tr>
                       <td>Pesos</td>
                       <td id="a1000Pe"><input type="text"></td>
                       <td id="a500Pe"><input type="text"></td>
                      <td id="a200Pe"><input type="text"></td>
                      <td id="a100Pe"><input type="text"></td>
                      <td id="a50Pe"><input type="text"></td>
                      <td id="a20Pe"><input type="text"></td>
                      <td id="a10Pe"><input type="text"></td>
                      <td id="a5Pe"><input type="text"></td>
                      <td id="a2Pe"><input type="text"></td>
                      <td id="a1Pe"><input type="text"></td>
                      <td id="a05Pe"><input type="text"></td>

                   </tr>
                   <tr>
                       <td>Dólares</td>
                       <td id="a1000Dl"><input type="text"></td>
                       <td id="a500Dl"><input type="text"></td>
                      <td id="a200Dl"><input type="text"></td>
                      <td id="a100Dl"><input type="text"></td>
                      <td id="a50Dl"><input type="text"></td>
                      <td id="a20Dl"><input type="text"></td>
                      <td id="a10Dl"><input type="text"></td>
                      <td id="a5Dl"><input type="text"></td>
                      <td id="a2Dl"><input type="text"></td>
                      <td id="a1Dl"><input type="text"></td>
                      <td id="a05Dl"><input type="text"></td>
                   </tr>
                   <tr>
                       <td>Canadienses</td>
                       <td id="a1000Ca"><input type="text"></td>
                       <td id="a500Ca"><input type="text"></td>
                      <td id="a200Ca"><input type="text"></td>
                      <td id="a100Ca"><input type="text"></td>
                      <td id="a50Ca"><input type="text"></td>
                      <td id="a20Ca"><input type="text"></td>
                      <td id="a10Ca"><input type="text"></td>
                      <td id="a5Ca"><input type="text"></td>
                      <td id="a2Ca"><input type="text"></td>
                      <td id="a1Ca"><input type="text"></td>
                      <td id="a05Ca"><input type="text"></td>
                   </tr>
                   <tr>
                       <td>Euros</td>
                       <td id="a1000Eu"><input type="text"></td>
                       <td id="a500Eu"><input type="text"></td>
                      <td id="a200Eu"><input type="text"></td>
                      <td id="a100Eu"><input type="text"></td>
                      <td id="a50Eu"><input type="text"></td>
                      <td id="a20Eu"><input type="text"></td>
                      <td id="a10Eu"><input type="text"></td>
                      <td id="a5Eu"><input type="text"></td>
                      <td id="a2Eu"><input type="text"></td>
                      <td id="a1Eu"><input type="text"></td>
                      <td id="a05Eu"><input type="text"></td>
                   </tr>
                   <!--Este renglon esta en blanco solo para colocolar el botón de aceptar-->
                   <tr>
                       <td></td>
                       <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                       <td> <input class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated type="submit" id="ajustar" name="ajustar" value="Listo"></td>
                   </tr>
                </tbody>
            </table>
            </form>
            </div>
            <div class="panel-footer text-right">
            </div>
        </div>
    </div>   

<!--Recuadro con la información sobre las divisas de investing.com-->
<div class="row" >
<div class="item col-xs-12 col-lg-12">
    <div class="panel panel-default paper-shadow" data-z="0.5">
        <div class="panel-heading">
            <h4 class="text-headline margin-none">Divisas</h4>
            <p class="text-subhead text-light">Precio actual de las principales divisas</p>
        </div>
        <iframe frameborder="0" scrolling="no" height="62" width="100%" allowtransparency="true" marginwidth="0" marginheight="0" src="http://tools.mx.forexprostools.com/quotes_bar.php?tab_1=1532,39,101,1&tab_2=&tab_3=23660,27,172,166,175&curr-name-color=%230059B0&inner-text-color=%23666666&green-text-color=%23008000&red-text-color=%23FF0000"></iframe><br /><div style="width:860"><span style="float:left"><span style="font-size: 11px;color: #black;text-decoration: none;">Las Cotizacines estan Proveídas por <a href="http://mx.investing.com/" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link">Investing.com México</a></span></div>
    </div>
    <div class="panel-footer text-right">
    </div>

<!--Botón que realiza el cierre de caja-->
<div>
    <form method="post">
    <input type="submit" name="cierre" id="cierre" value="Finalizar">
    </form>
    <?php include_once("php/cierre_caja.php"); ?><!--Script que realiza el cierre de los movimientos del día-->
</div></div></div>
                              
   <!-- Footer -->
    <footer class="footer"><strong>Control de Gastos</strong> v1.0.0 &copy; Copyright 2015 </footer>

    <!-- Diseño de bloques -->
    <script src="js/vendor-core.min.js"></script>
    <script src="js/module-layout.min.js"></script>
    <!-- Control de la animación de la barra superior -->
    <script src="js/theme-core.min.js"></script>
</body>
</html>