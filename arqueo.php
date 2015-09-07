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
    <!--Elementos adicionales-->
    <link rel="stylesheet" type="text/css" href="css/tabla.css">
    <link rel="stylesheet" type="text/css" href="css/vendedor.css">
    <link rel="icon" type="image/png" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/arqueo.css">
    <script src="js/arqueo.js"></script>
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
            <td><input type="text" id="fajilla1000Pesos" name="fajilla1000Pesos" onkeypress="convertir1000fp(this.form)"></td>
            <td><input type="text" id="moneda1000Pesos" name="moneda1000Pesos" onkeypress="convertir1000p(this.form)"></td>
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
            <td><input type="text" id="fajilla500Pesos" name="fajilla500Pesos" onkeypress="convertir500fp(this.form)"></td>
            <td><input type="text" id="moneda500Pesos" name="moneda500Pesos" onkeypress="convertir500p(this.form)"></td>
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
            <td><input type="text" id="fajilla200Pesos" name="fajilla200Pesos" onkeypress="convertir200fp(this.form)"></td>
            <td><input type="text" id="moneda200Pesos" name="moneda200Pesos" onkeypress="convertir200p(this.form)"></td>
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
            <td><input type="text" id="fajilla100Pesos" name="fajilla100Pesos" onkeypress="convertir100fp(this.form)"></td>
            <td><input type="text" id="moneda100Pesos" name="moneda100Pesos" onkeypress="convertir100p(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $dolares100; ?>"></td>
            <td><input type="text" readonly="" id="divisionDolar"></td>
            <td><input type="text" id="fajilla100Dolares" name="fajilla100Dolares" onkeypress="convertir100fd(this.form)"></td>
            <td><input type="text" id="moneda100Dolares" name="moneda100Dolares" onkeypress="convertir100d(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $euros100; ?>"></td>
            <td><input type="text" readonly="" id="divisionEuro"></td>
            <td><input type="text" id="fajilla100Euros" name="fajilla100Euros" onkeypress="convertir100fe(this.form)"></td>
            <td><input type="text" id="moneda100Euros" name="moneda100Euros" onkeypress="convertir100e(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $canada100; ?>"></td>
            <td><input type="text" readonly="" id="divisionCanada"></td>
            <td><input type="text" id="fajilla100Canadienses" name="fajilla100Canadienses" onkeypress="convertir100fc(this.form)"></td>
            <td><input type="text" id="moneda100Canadienses" name="moneda100Canadienses" onkeypress="convertir100c(this.form)"></td>
        </tr>
        <tr>
            <td>50.00</td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $pesos50; ?>"></td>
            <td><input type="text" readonly="" id="divisionPeso"></td>
            <td><input type="text" id="fajilla50Pesos" name="fajilla50Pesos" onkeypress="convertir50fp(this.form)"></td>
            <td><input type="text" id="moneda50Pesos" name="moneda50Pesos" onkeypress="convertir50p(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $dolares50; ?>"></td>
            <td><input type="text" readonly="" id="divisionDolar"></td>
            <td><input type="text" id="fajilla50Dolares" name="fajilla50Dolares" onkeypress="convertir50fd(this.form)"></td>
            <td><input type="text" id="moneda50Dolares" name="moneda50Dolares" onkeypress="convertir50d(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $euros50; ?>"></td>
            <td><input type="text" readonly="" id="divisionEuro"></td>
            <td><input type="text" id="fajilla50Euros" name="fajilla50Euros" onkeypress="convertir50fe(this.form)"></td>
            <td><input type="text" id="moneda50Euros" name="moneda50Euros" onkeypress="convertir50e(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $canada50; ?>"></td>
            <td><input type="text" readonly="" id="divisionCanada"></td>
            <td><input type="text" id="fajilla50Canadienses" name="fajilla50Canadienses" onkeypress="convertir50fc(this.form)"></td>
            <td><input type="text" id="moneda50Canadienses" name="moneda50Canadienses" onkeypress="convertir50c(this.form)"></td>
        </tr>  
        <tr>
            <td>20.00</td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $pesos20; ?>"></td>
            <td><input type="text" readonly="" id="divisionPeso"></td>
            <td><input type="text" id="fajilla20Pesos" name="fajilla20Pesos" onkeypress="convertir20fp(this.form)"></td>
            <td><input type="text" id="moneda20Pesos" name="moneda20Pesos" onkeypress="convertir20p(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $dolares20; ?>"></td>
            <td><input type="text" readonly="" id="divisionDolar"></td>
            <td><input type="text" id="fajilla20Dolares" name="fajilla20Dolares" onkeypress="convertir20fd(this.form)"></td>
            <td><input type="text" id="moneda20Dolares" name="moneda20Dolares" onkeypress="convertir20d(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $euros20; ?>"></td>
            <td><input type="text" readonly="" id="divisionEuro"></td>
            <td><input type="text" id="fajilla20Euros" name="fajilla20Euros" onkeypress="convertir20fe(this.form)"></td>
            <td><input type="text" id="moneda20Euros" name="moneda20Euros" onkeypress="convertir20e(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $canada20; ?>"></td>
            <td><input type="text" readonly="" id="divisionCanada"></td>
            <td><input type="text" id="fajilla20Canadienses" name="fajilla20Canadienses" onkeypress="convertir20fc(this.form)"></td>
            <td><input type="text" id="moneda20Canadienses" name="moneda20Canadienses" onkeypress="convertir20c(this.form)"></td>
        </tr> 
        <tr>
            <td>10.00</td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $pesos10; ?>"></td>
            <td><input type="text" readonly="" id="divisionPeso"></td>
            <td><input type="text" id="fajilla10Pesos" name="fajilla10Pesos" onkeypress="convertir10fp(this.form)"></td>
            <td><input type="text" id="moneda10Pesos" name="moneda10Pesos" onkeypress="convertir10p(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $dolares10; ?>"></td>
            <td><input type="text" readonly="" id="divisionDolar"></td>
            <td><input type="text" id="fajilla10Dolares" name="fajilla10Dolares" onkeypress="convertir10fd(this.form)"></td>
            <td><input type="text" id="moneda10Dolares" name="moneda10Dolares" onkeypress="convertir10d(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $euros10; ?>"></td>
            <td><input type="text" readonly="" id="divisionEuro"></td>
            <td><input type="text" id="fajilla10Euros" name="fajilla10Euros" onkeypress="convertir10fe(this.form)"></td>
            <td><input type="text" id="moneda10Euros" name="moneda10Euros" onkeypress="convertir10e(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $canada10; ?>"></td>
            <td><input type="text" readonly="" id="divisionCanada"></td>
            <td><input type="text" id="fajilla10Canadienses" name="fajilla10Canadienses" onkeypress="convertir10fc(this.form)"></td>
            <td><input type="text" id="moneda10Canadienses" name="moneda10Canadienses" onkeypress="convertir10c(this.form)"></td>
        </tr> 
        <tr>
            <td>5.00</td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $pesos5; ?>"></td>
            <td><input type="text" readonly="" id="divisionPeso"></td>
            <td><input type="text" id="fajilla5Pesos" name="fajilla5Pesos" onkeypress="convertir5fp(this.form)"></td>
            <td><input type="text" id="moneda5Pesos" name="moneda5Pesos" onkeypress="convertir5p(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $dolares5; ?>"></td>
            <td><input type="text" readonly="" id="divisionDolar"></td>
            <td><input type="text" id="fajilla5Dolares" name="fajilla5Dolares" onkeypress="convertir5fd(this.form)"></td>
            <td><input type="text" id="moneda5Dolares" name="moneda5Dolares" onkeypress="convertir5d(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $euros5; ?>"></td>
            <td><input type="text" readonly="" id="divisionEuro"></td>
            <td><input type="text" id="fajilla5Euros" name="fajilla5Euros" onkeypress="convertir5fe(this.form)"></td>
            <td><input type="text" id="moneda5Euros" name="moneda5Euros" onkeypress="convertir5e(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $canada5; ?>"></td>
            <td><input type="text" readonly="" id="divisionCanada"></td>
            <td><input type="text" id="fajilla5Canadienses" name="fajilla5Canadienses" onkeypress="convertir5fc(this.form)"></td>
            <td><input type="text" id="moneda5Canadienses" name="moneda5Canadienses" onkeypress="convertir5c(this.form)"></td>
        </tr> 
        <tr>
            <td>2.00</td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $pesos2; ?>"></td>
            <td><input type="text" readonly="" id="divisionPeso"></td>
            <td><input type="text" id="fajilla2Pesos" name="fajilla2Pesos" onkeypress="convertir2fp(this.form)"></td>
            <td><input type="text" id="moneda2Pesos" name="moneda2Pesos" onkeypress="convertir2p(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $dolares2; ?>"></td>
            <td><input type="text" readonly="" id="divisionDolar"></td>
            <td><input type="text" id="fajilla2Dolares" name="fajilla2Dolares" onkeypress="convertir2fd(this.form)"></td>
            <td><input type="text" id="moneda2Dolares" name="moneda2Dolares" onkeypress="convertir2d(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $euros2; ?>"></td>
            <td><input type="text" readonly="" id="divisionEuro"></td>
            <td><input type="text" id="fajilla2Euros" name="fajilla2Euros" onkeypress="convertir2fe(this.form)"></td>
            <td><input type="text" id="moneda2Euros" name="moneda2Euros" onkeypress="convertir2e(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $canada2; ?>"></td>
            <td><input type="text" readonly="" id="divisionCanada"></td>
            <td><input type="text" id="fajilla2Canadienses" name="fajilla2Canadienses" onkeypress="convertir2fc(this.form)"></td>
            <td><input type="text" id="moneda2Canadienses" name="moneda2Canadienses" onkeypress="convertir2c(this.form)"></td>
        </tr> 
        <tr>
            <td>1.00</td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $pesos1; ?>"></td>
            <td><input type="text" readonly="" id="divisionPeso"></td>
            <td><input type="text" id="fajilla1Pesos" name="fajilla1Pesos" onkeypress="convertir1fp(this.form)"></td>
            <td><input type="text" id="moneda1Pesos" name="moneda1Pesos" onkeypress="convertir1p(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $dolares1; ?>"></td>
            <td><input type="text" readonly="" id="divisionDolar"></td>
            <td><input type="text" id="fajilla1Dolares" name="fajilla1Dolares" onkeypress="convertir1fd(this.form)"></td>
            <td><input type="text" id="moneda1Dolares" name="moneda1Dolares" onkeypress="convertir1d(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $euros1; ?>"></td>
            <td><input type="text" readonly="" id="divisionEuro"></td>
            <td><input type="text" id="fajilla1Euros" name="fajilla1Euros" onkeypress="convertir1fe(this.form)"></td>
            <td><input type="text" id="moneda1Euros" name="moneda1Euros" onkeypress="convertir1e(this.form)"></td>
            <td><input type="text" readonly="" id="division"></td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $canada1; ?>"></td>
            <td><input type="text" readonly="" id="divisionCanada"></td>
            <td><input type="text" id="fajilla1Canadienses" name="fajilla1Canadienses" onkeypress="convertir1fc(this.form)"></td>
            <td><input type="text" id="moneda1Canadienses" name="moneda1Canadienses" onkeypress="convertir1c(this.form)"></td>
        </tr> 
         <tr>
            <td>0.50</td>
            <td><input type="text" readonly=""></td>
            <td><input type="text" readonly="" value="<?php echo $pesos05; ?>"></td>
            <td><input type="text" readonly="" id="divisionPeso"></td>
            <td><input type="text" id="fajilla05Pesos" name="fajilla05Pesos" onkeypress="convertir05fp(this.form)"></td>
            <td><input type="text" id="moneda05Pesos" name="moneda05Pesos" onkeypress="convertir05p(this.form)"></td>
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
            <td>Totales</td>
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
            <td></td>
            <td></td>
            <td></td>
             <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr> 
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