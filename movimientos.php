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
    <meta name="author" content="">
    <title>Estratega Movimientos</title>
    <script src="js/script.js"></script>
    <!--<meta http-equiv="refresh" content="300;URL=vendedor.php" />  Actualización automatica-->
    <!-- Compressed Vendor BUNDLE
    Includes vendor (3rd party) styling such as the customized Bootstrap and other 3rd party libraries used for the current theme/module -->
    <link href="css/vendor.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/tabla.css">
    <link rel="stylesheet" type="text/css" href="css/cierre.css">
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

    <!-- Fixed navbar -->
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
                                    <?php
                                    error_reporting(0);
                                    if ('registra' == true) {
                                    $GLOBALS['host'] = "localhost";
                                    $GLOBALS['user'] = "root";
                                    $GLOBALS['pw'] = "";
                                    $GLOBALS['db'] = "estra";
                                    $GLOBALS['concept'] = $_POST['concepto'];
                                    $GLOBALS['comment'] = $_POST['comentario'];
                                    $GLOBALS['movment'] = $_POST['movimiento'];
                                    $GLOBALS['document'] = $_POST['documento'];
                                    $GLOBALS['cantidad'] = $_POST['cantidad'];

                                    $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
                                    mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
                                    $query = "INSERT INTO adicionales (concepto, comentario, tipo, cantidad,documento,usuario)
                                    VALUES ('{$_POST['concepto']}','{$_POST['comentario']}','{$_POST['movimiento']}',{$_POST['cantidad']},'{$_POST['documento']}','$nom')";
                                    $resultado = mysql_query($query);
                                    mysql_close();
                                    }
                                    ?>
                                    <?php 
                                    $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
                                    mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
                                    $query = "SELECT * FROM cajas WHERE usuario = '$nom'";
                                    $resultado = mysql_query($query);
                                    while ($fila = mysql_fetch_array($resultado)) {
                                        $GLOBALS['pesosAnt'] = $fila[pesos];
                                    }
                                     ?>
                                    <?php 
                                    $peso = $cantidad;
                                    $nuevoPeso = $pesosAnt + $peso;
                                    $nuevoPeso2 = $pesosAnt - $peso;
                                    $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
                                    mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
                                    if ($movment == "Entrada") {
                                            $query = "UPDATE cajas SET pesos = $nuevoPeso WHERE usuario = '$nom'";
                                            $resultado = mysql_query($query);
                                    }
                                     elseif ($movment == "Salida") {
                                            if ($pesosAnt > $peso) {
                                                $query = "UPDATE cajas SET pesos = $nuevoPeso2 WHERE usuario = '$nom'";
                                                $resultado = mysql_query($query);
                                            }
                                            else
                                            {
                                                ?> <script>alert("No cuenta con suficiente efectivo en caja");</script><?php 
                                            }
                                        }
                                   
                                    ?>
                                </form>   
                                </div> 


                            </div>
                            <!--Mostrar movimientos adicionales-->
                           
                             </div>

                    </div>

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
            <?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT * FROM movimientos WHERE tipo_movimiento = 'Compra' and usuario = '$nom' order by id_movimiento desc";
            $resultado = mysql_query($query);

        while ($fila = mysql_fetch_array($resultado)) { 
                    $pesos = $fila[cantidad] * $fila[tipo_cambio];
                    $x = number_format($pesos,2);
                    $y = number_format($fila[cantidad]);
                    echo "<tr>";
                    echo "<td> $fila[id_movimiento] </td><td> $fila[divisa] </td><td>$y</td>
                    <td>$$x</td><td>$$fila[tipo_cambio]</td>";
                    echo "</tr>";
        }
             ?>
        </tbody>
    </table>
</div>
<div class="panel-footer text-right">
                                </div>
  </div>
                    </div>
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
            <?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT * FROM movimientos WHERE tipo_movimiento = 'Venta' and usuario = '$nom' order by id_movimiento desc";
            $resultado = mysql_query($query);

        while ($fila = mysql_fetch_array($resultado)) { 
            $pesos = $fila[cantidad] * $fila[tipo_cambio];
            $x = number_format($pesos,2);
            $y = number_format($fila[cantidad]);
            echo "<tr>";
            echo "<td> $fila[id_movimiento] </td><td> $fila[divisa] </td><td>$y</td>
            <td>$$x</td><td>$$fila[tipo_cambio]</td>";
            echo "</tr>";
        }
             ?>
        </tbody>
    </table>
</div>
                                <div class="panel-footer text-right">
                                </div>

                                 </div>
                    </div>
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
        <?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT SUM(cantidad) as total2 FROM movimientos where tipo_movimiento = 'Venta' and divisa = 'Dollar' and usuario = '$nom'";
            $resultado = mysql_query($query);
            while ($fila = mysql_fetch_array($resultado)) { 
            $GLOBALS['suma2'] = $fila[total2];
        }
        ?>
        <?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT AVG(tipo_cambio) as tipo from movimientos where tipo_movimiento = 'Compra' and divisa = 'Dollar' and usuario = '$nom' ";
            $resultado = mysql_query($query);
            while ($fila = mysql_fetch_array($resultado)) { 
            $GLOBALS['tipo'] = $fila[tipo];
        } 
            ?>
            <?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT AVG(tipo_cambio) as tipo from movimientos where tipo_movimiento = 'Venta' and divisa = 'Dollar' and usuario = '$nom'";
            $resultado = mysql_query($query);
            while ($fila = mysql_fetch_array($resultado)) { 
            $GLOBALS['tipo2'] = $fila[tipo];
        }?>
             <?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT SUM(cantidad) as total , divisa, tipo_cambio FROM movimientos where tipo_movimiento = 'Compra' and divisa = 'Dollar' and usuario = '$nom'";
            $resultado = mysql_query($query);
        while ($fila = mysql_fetch_array($resultado)) { 
            $suma = number_format($fila[total]);
            $x = number_format($tipo,2);
            $y = number_format($tipo2,2);
            $w = number_format($suma2);
            echo "<tr>";
            echo "<td> Dollar </td><td>$suma</td>
            <td>$w</td><td>$$x</td><td>$$y</td>";
            echo "</tr>";
        }
             ?>
             <?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT SUM(cantidad) as total2 FROM movimientos where tipo_movimiento = 'Venta' and divisa = 'Dll Can' and usuario = '$nom'";
            $resultado = mysql_query($query);
            while ($fila = mysql_fetch_array($resultado)) { 
            $GLOBALS['suma3'] = $fila[total2];
        }
            
            ?>
            
            <?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT AVG(tipo_cambio) as tipo from movimientos where tipo_movimiento = 'Compra' and divisa = 'Dll Can' and usuario = '$nom' ";
            $resultado = mysql_query($query);
            while ($fila = mysql_fetch_array($resultado)) { 
            $GLOBALS['tipo'] = $fila[tipo];
        } 
            ?>
            <?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT AVG(tipo_cambio) as tipo from movimientos where tipo_movimiento = 'Venta' and divisa = 'Dll Can' and usuario = '$nom'";
            $resultado = mysql_query($query);
            while ($fila = mysql_fetch_array($resultado)) { 
            $GLOBALS['tipo2'] = $fila[tipo];
        }?>
             <?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT SUM(cantidad) as total , divisa, tipo_cambio FROM movimientos where tipo_movimiento = 'Compra' and divisa = 'Dll Can' and usuario = '$nom'";
            $resultado = mysql_query($query);
        while ($fila = mysql_fetch_array($resultado)) { 
            $suma = number_format($fila[total]);
            $x = number_format($tipo,2);
            $y = number_format($tipo2,2);
            $w = number_format($suma3);
            echo "<tr>";
            echo "<td> Dll Can </td><td>$suma</td>
            <td>$w</td><td>$$x</td><td>$$y</td>";
            echo "</tr>";
        }
             
             ?>
             <?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT SUM(cantidad) as total2 FROM movimientos where tipo_movimiento = 'Venta' and divisa = 'Euro' and usuario = '$nom'";
            $resultado = mysql_query($query);
            while ($fila = mysql_fetch_array($resultado)) { 
            $GLOBALS['suma4'] = $fila[total2];
        }
            
            ?>
            <?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT AVG(tipo_cambio) as tipo from movimientos where tipo_movimiento = 'Compra' and divisa = 'Euro' and usuario = '$nom'";
            $resultado = mysql_query($query);
            while ($fila = mysql_fetch_array($resultado)) { 
            $GLOBALS['tipo'] = $fila[tipo];
        } 
            ?>
            <?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT AVG(tipo_cambio) as tipo from movimientos where tipo_movimiento = 'Venta' and divisa = 'Euro' and usuario = '$nom'";
            $resultado = mysql_query($query);
            while ($fila = mysql_fetch_array($resultado)) { 
            $GLOBALS['tipo2'] = $fila[tipo];
        }?>
             <?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT SUM(cantidad) as total , divisa, tipo_cambio FROM movimientos where tipo_movimiento = 'Compra' and divisa = 'Euro' and usuario = '$nom'";
            $resultado = mysql_query($query);
        while ($fila = mysql_fetch_array($resultado)) { 
            $suma = number_format($fila[total]);
            $x = number_format($tipo,2);
            $y = number_format($tipo2,2);
            $w = number_format($suma4);
            echo "<tr>";
            echo "<td> Euro </td><td>$suma</td>
            <td>$w</td><td>$$x</td><td>$$y</td>";
            echo "</tr>";
        }
             ?>
        </tbody>
    </table>
</div>
                                <div class="panel-footer text-right">
                                </div>


                                 </div>
                    </div>

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
        <?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT * FROM adicionales where usuario = '$nom'order by folio_adicional desc";
            $resultado = mysql_query($query);

        while ($fila = mysql_fetch_array($resultado)) { 
            $cant = number_format($fila[cantidad]);
            echo "<tr>";
            echo "<td> $fila[folio_adicional] </td><td> $fila[concepto] </td><td>$fila[tipo]</td>
            <td>$$cant</td>";
            echo "</tr>";
        }
             ?>
        </tbody>
    </table>
</div>
                                <div class="panel-footer text-right">
                                </div>


                                 </div></div>
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
            <?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT * from cajas where usuario = '$nom'";
            $resultado = mysql_query($query);
        while ($fila = mysql_fetch_array($resultado)) { 
            $suma = $fila[total];
            $x = number_format($fila[dolares],2);
            $y = number_format($fila[dlls_can],2);
            $z = number_format($fila[euros],2);
            $z1 = number_format($fila[pesos],2);
            $z2 = number_format($fila[redondeo],2);
            echo "<tr>";
            echo "<td> Dollar </td><td>$$x</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Dlls Can</td><td>$$y</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Euros</td><td>$$z</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Pesos</td><td>$$z1</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Pesos Redondeo</td><td>$$z2</td>";
            echo "</tr>";
            
        }
             ?>
           
        </tbody>
    </table>
</div>
                                <div class="panel-footer text-right">
                                </div>
                            </div>
                        </div>    

  <div class="row" >
                        <div class="item col-xs-8 col-lg-4">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline margin-none">Tipo de cambio / Venta</h4>
                                    <p class="text-subhead text-light">Ajuste de tipos de cambio a la venta</p>
                                </div>
                                <div class="tabla ">
                                <form method="post">
                                <?php 
                                $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
                                mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
                                $query = "SELECT * FROM ajuste_cambio order by id_ajuste asc";
                                $resultado = mysql_query($query);
                                while ($fila = mysql_fetch_array($resultado)) {
                                    $GLOBALS['ajusteDll'] = $fila[dollar];
                                    $GLOBALS['ajusteCan'] = $fila[dll_can];
                                    $GLOBALS['ajusteEur'] = $fila[euro];
                                }
                                 ?>
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
                                           <td> <input class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated type="submit" id="ajustar" value="Ajustar"></td>
                                       </tr>
                                    </tbody>
                                </table>
                                </form>
                                <?php 
                                $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
                                mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
                                $query = "INSERT INTO ajuste_cambio (dollar, dll_can, euro,usuario) VALUES ({$_POST[dolarAjuste]},{$_POST[canAjuste]},{$_POST[euroAjuste]},'$nom')";
                                $resultado = mysql_query($query);
                                 ?>
                                </div>
                                <div class="panel-footer text-right">
                                </div>
                            </div>
                        </div>    

                         <div class="row" >
                        <div class="item col-xs-8 col-lg-4">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline margin-none">Tipo de cambio / Compra</h4>
                                    <p class="text-subhead text-light">Ajuste de tipos de cambio a la compra</p>
                                </div>
                                <div class="tabla ">
                                <form method="post">
                                 <?php 
                                $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
                                mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
                                $query = "SELECT * FROM ajuste_cambio_compra order by id_ajuste asc";
                                $resultado = mysql_query($query);
                                while ($fila = mysql_fetch_array($resultado)) {
                                    $GLOBALS['ajusteDllC'] = $fila[dollar];
                                    $GLOBALS['ajusteCanC'] = $fila[dll_can];
                                    $GLOBALS['ajusteEurC'] = $fila[euro];
                                }
                                 ?>
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
                                           <td> <input class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated type="submit" id="ajustar" value="Ajustar"></td>
                                       </tr>
                                    </tbody>
                                </table>
                                </form>
                                <?php 
                                $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
                                mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
                                $query = "INSERT INTO ajuste_cambio_compra (dollar, dll_can, euro,usuario) VALUES ({$_POST[dolarCompra]},{$_POST[canCompra]},{$_POST[euroCompra]},'$nom')";
                                $resultado = mysql_query($query);
                                 ?>
                                </div>
                                <div class="panel-footer text-right">
                                </div>
                            </div>
                        </div>   
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
<div>
    <form method="post">
    <input type="submit" name="cierre" id="cierre" value="Finalizar">
    </form>
    <?php 
    if (isset($_POST['cierre'])) {
        $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
    mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
    $query = "INSERT INTO historico_movimiento SELECT * FROM movimientos where usuario = '$nom'";
    $resultado = mysql_query($query);
    }
     ?>
     <?php 
     if (isset($_POST['cierre'])) {
         $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
    mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
    $query = "DELETE FROM movimientos WHERE usuario = '$nom'";
    $resultado = mysql_query($query);
     }
     ?>
     <?php 
     if (isset($_POST['cierre'])) {
         $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
    mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
    $query = "INSERT INTO historico_adicional SELECT * FROM adicionales where usuario = '$nom'";
    $resultado = mysql_query($query);
     }
     ?>
     <?php 
     if (isset($_POST['cierre'])) {
        $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
    mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
    $query = "DELETE FROM adicionales WHERE usuario = '$nom'";
    $resultado = mysql_query($query);
     }
     ?>
</div>

                                 </div></div>




                                  
    <!-- Footer -->
    <footer class="footer">
        <strong>Control de Gastos</strong> v1.0.0 &copy; Copyright 2015
    </footer>
    <!-- // Footer -->
    <!-- Inline Script for colors and config objects; used by various external scripts; -->
    <script>
    var colors = {
        "danger-color": "#e74c3c",
        "success-color": "#81b53e",
        "warning-color": "#f0ad4e",
        "inverse-color": "#2c3e50",
        "info-color": "#2d7cb5",
        "default-color": "#6e7882",
        "default-light-color": "#cfd9db",
        "purple-color": "#9D8AC7",
        "mustard-color": "#d4d171",
        "lightred-color": "#e15258",
        "body-bg": "#f6f6f6"
    };
    var config = {
        theme: "html",
        skins: {
            "default": {
                "primary-color": "#42a5f5"
            }
        }
    };
    </script>
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