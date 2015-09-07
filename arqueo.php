<?php include("php/sesion.php"); ?>
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
    <link rel="icon" type="image/png" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/arqueo.css">
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

<!-- Menu superior e información del usuario -->
<div class="navbar navbar-default navbar-fixed-top navbar-size-large navbar-size-xlarge paper-shadow" data-z="0" data-animated role="navigation">
    <div class="container">
      <div class="navbar-brand navbar-brand-logo">
                <img id="logoxx" src="images/estratega.png">
            </div>
            <div class="menux col-xs-8 col-lg-9">
                <a href="vendedor.php" >Operaciones</a>
                <a href="adicionales.php" >Adicionales</a>
                <a href="movimientos.php">Información</a>
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


<!--Sección de Desglose de moneda-->                     
<div class="row" >
    <div class="item col-xs-12 col-lg-12">
        <div class="panel panel-default paper-shadow" data-z="0.5">
            <div class="panel-heading">
                <h4 class="text-headline margin-none">Arqueo</h4>
                <p class="text-subhead text-light">Registre la existencia actual de su inventario de moneda.</p>
            </div>
         <form method="post" class="desglose">
            <div class="tabla ">
                <?php include_once("php/arqueo.php"); ?>
    <table>
        <thead>
                <tr><th >Denominación</th>
                <th>Pesos</th>
                <th>Actuales</th>
                <th></th>
                <th>Pesos</th>
                <th>Reales</th>
                <th></th>
                <th>Dólares</th>
                <th>Actuales</th>
                <th></th>
                <th>Dólares</th>
                <th>Reales</th>
                <th></th>
                <th>Euros</th>
                <th>Actuales</th>
                <th></th>
                <th>Euros</th>
                <th>Reales</th>
                <th></th>
                <th>Dlls Can</th>
                <th>Actuales</th>
                <th></th>
                <th>Dlls Can</th>
                <th>Reales</th>
                </tr>
                <tr>
                <th></th>
                <th>F</th>
                <th>Pesos</th>
                <th></th>
                <th>F</th>
                <th>Pesos</th>
                <th></th>
                <th>F</th>
                <th>Dólares</th>
                <th></th>
                <th>F</th>
                <th>Dólares</th>
                <th></th>
                <th>F</th>
                <th>Euros</th>
                <th></th>
                <th>F</th>
                <th>Euros</th>
                <th></th>
                <th>F</th>
                <th>Can</th>
                <th></th>
                <th>F</th>
                <th>Can</th>
                </tr>
        </thead>
        <tbody class="manejoT">
        <tr>
            <td>1000.00</td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $pesos1000; ?>"></td>
            <td><input type="text" readonly="" id="divisionPeso"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" id="divisionDolar"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" id="divisionEuro"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" id="divisionCanada"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
        </tr>
        <tr>
            <td>500.00</td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $pesos500; ?>"></td>
            <td><input type="text" readonly="" id="divisionPeso"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" id="divisionDolar"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" id="divisionEuro"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" id="divisionCanada"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
        </tr>
        <tr>
            <td>200.00</td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $pesos200; ?>"></td>
            <td><input type="text" readonly="" id="divisionPeso"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" id="divisionDolar"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" id="divisionEuro"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" id="divisionCanada"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
        <tr>
            <td>100.00</td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $pesos100; ?>"></td>
            <td><input type="text" readonly="" id="divisionPeso"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $dolares100; ?>"></td>
            <td><input type="text" readonly="" id="divisionDolar"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $euros100; ?>"></td>
            <td><input type="text" readonly="" id="divisionEuro"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $canada100; ?>"></td>
            <td><input type="text" readonly="" id="divisionCanada"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
        </tr>
        <tr>
            <td>50.00</td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $pesos50; ?>"></td>
            <td><input type="text" readonly="" id="divisionPeso"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $dolares50; ?>"></td>
            <td><input type="text" readonly="" id="divisionDolar"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $euros50; ?>"></td>
            <td><input type="text" readonly="" id="divisionEuro"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $canada50; ?>"></td>
            <td><input type="text" readonly="" id="divisionCanada"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
        </tr>  
        <tr>
            <td>20.00</td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $pesos20; ?>"></td>
            <td><input type="text" readonly="" id="divisionPeso"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $dolares20; ?>"></td>
            <td><input type="text" readonly="" id="divisionDolar"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $euros20; ?>"></td>
            <td><input type="text" readonly="" id="divisionEuro"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $canada20; ?>"></td>
            <td><input type="text" readonly="" id="divisionCanada"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
        </tr> 
        <tr>
            <td>10.00</td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $pesos10; ?>"></td>
            <td><input type="text" readonly="" id="divisionPeso"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $dolares10; ?>"></td>
            <td><input type="text" readonly="" id="divisionDolar"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $euros10; ?>"></td>
            <td><input type="text" readonly="" id="divisionEuro"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $canada10; ?>"></td>
            <td><input type="text" readonly="" id="divisionCanada"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
        </tr> 
        <tr>
            <td>5.00</td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $pesos5; ?>"></td>
            <td><input type="text" readonly="" id="divisionPeso"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $dolares5; ?>"></td>
            <td><input type="text" readonly="" id="divisionDolar"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $euros5; ?>"></td>
            <td><input type="text" readonly="" id="divisionEuro"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $canada5; ?>"></td>
            <td><input type="text" readonly="" id="divisionCanada"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
        </tr> 
        <tr>
            <td>2.00</td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $pesos2; ?>"></td>
            <td><input type="text" readonly="" id="divisionPeso"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $dolares2; ?>"></td>
            <td><input type="text" readonly="" id="divisionDolar"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $euros2; ?>"></td>
            <td><input type="text" readonly="" id="divisionEuro"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $canada2; ?>"></td>
            <td><input type="text" readonly="" id="divisionCanada"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
        </tr> 
        <tr>
            <td>1.00</td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $pesos1; ?>"></td>
            <td><input type="text" readonly="" id="divisionPeso"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $dolares1; ?>"></td>
            <td><input type="text" readonly="" id="divisionDolar"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $euros1; ?>"></td>
            <td><input type="text" readonly="" id="divisionEuro"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $canada1; ?>"></td>
            <td><input type="text" readonly="" id="divisionCanada"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
        </tr> 
         <tr>
            <td>0.50</td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $pesos05; ?>"></td>
            <td><input type="text" readonly="" id="divisionPeso"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" id="divisionDolar"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" id="divisionEuro"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" id="divisionCanada"></td>
            <td><input type="text" ></td>
            <td><input type="text" ></td>
        </tr> 
         <tr>
            <td></td>
            <td></td>
            <td><input id="totalPesos" name="totalPesos" type="text" value="<?php echo $sumaPesos; ?>" readonly></td>
            <td></td>
            <td></td>
            <td><input id="pesosReales" name="pesosReales" type="text" placeholder="Total" readonly></td>
            <td></td>
            <td></td>
            <td><input id="totalDolares" name="totalDolares" type="text" value="<?php echo $sumaDolares; ?>" readonly></td>
            <td></td>
            <td></td>
            <td><input id="dolaresReales" name="dolaresReales" type="text" placeholder="Total" readonly></td>
            <td></td>
            <td></td>
            <td><input id="totalEuros" name="totalEuros" type="text" value="<?php echo $sumaEuros; ?>" readonly></td>
            <td></td>
            <td></td>
            <td><input id="eurosReales" name="eurosReales" type="text" placeholder="Total" readonly></td>
            <td></td>
            <td></td>
            <td><input id="totalCanadienses" name="totalCanadienses" type="text" value="<?php echo $sumaCanadienses; ?>" readonly></td>
            <td></td>
            <td></td>
            <td><input id="canadiensesReales" name="canadiensesReales" type="text" placeholder="Total" readonly></td>

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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated type="submit" id="registraMov" value="Listo" tabindex=33></td>
        </tr> 
        </tbody>
    </table>
   
    </form>
    <?php include_once("php/venta_dolares.php"); ?><!--Operaciones de la venta de dólares-->
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