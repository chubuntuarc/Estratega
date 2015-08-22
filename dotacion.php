<?php include("php/sesion.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Estratega | Admin</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="stylesheet" type="text/css" href="css/tabla.css">
        <link rel="stylesheet" type="text/css" href="css/dotacion.css">
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="admin.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="estratega.png">
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo "$identificar"; ?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="images/people/user.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo "$identificar"; ?>
                                        <small>Administrador del sistema</small>
                                    </p>
                                </li>
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="login.php" class="btn btn-default btn-flat">Cerrar Sesión</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="images/people/user.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hola, <?php echo "$identificar"; ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="admin.php">
                                <i class="fa fa-dashboard"></i> <span>Admin</span>
                            </a>
                        </li>
                        <li>
                            <a href="vendedor.php">
                                <i class="fa fa-th"></i> <span>Compra / Venta</span> <small class="badge pull-right bg-green">Disponible</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-inbox"></i>
                                <span>Cajas</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Dotación</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Arqueo</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Asignación</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Estadisticas</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Peso</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Dólar</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Euro</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Canadiense</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Reportes</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> General</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Compra</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Venta</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Informes</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Estado cajas</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Vendedores</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-calendar"></i> <span>Calendario</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Cajas
                        <small>Dotación de dinero</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-inbox"></i> Cajas</a></li>
                        <li class="active">Dotación de dinero</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php include_once("php/pesos_admin.php");?>
                                    </h3>
                                    <p>
                                        Pesos
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    Más info. <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php include_once("php/dolares_admin.php");?>
                                    </h3>
                                    <p>
                                        Dólares
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    Más info. <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        <?php include_once("php/euros_admin.php");?>
                                    </h3>
                                    <p>
                                        Euros
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    Más info. <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php include_once("php/canadienses_admin.php");?>
                                    </h3>
                                    <p>
                                        Canadienses
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    Más info. <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <!-- top row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->

                        

                        <section class="col-lg-12 connectedSortable"> 
                            <!-- Compras -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <i class="fa fa-inbox"></i>
                                    <div class="box-title">Dotación de dinero a caja</div>
                                    
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <!-- button with a dropdown -->
                                        <div class="btn-group">
                                            <button class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="vendedor2.php">Comprar Dólares</a></li>
                                                <li><a href="euro2.php">Comprar Euros</a></li>
                                                <li><a href="canada2.php">Comprar Canadienses</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Reporte de Compras</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- /. tools -->                                    
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">

                                <!--Sección de operaciones-->
            <div class="item col-xs-12 col-lg-3">
                <div class="panel panel-default paper-shadow" data-z="0.5">
                    <div class="panel-heading">
                        <h4 class="text-headline margin-none">Vendedor / Moneda</h4>
                    </div>
                    <div class="tabla ">
                    <form>
                    <select id="selVendedor">
                                        <?php include_once("php/vendedores.php"); ?>
                    </select><br>
                    <div id="parte1">
                        <input id="dotaPesos" type="text" placeholder="Pesos" onkeypress="divisa(this.form)"  name="divisaConv" tabindex=1  autofocus autocomplete="off">
                    </div>
                    <div id="parte1">
                        <input id="dotaDolar" type="text" placeholder="Dólares" onkeypress="divisa(this.form)"  name="divisaConv" tabindex=2  autocomplete="off">
                    </div>
                    <div id="parte1">
                        <input id="dotaEuro" type="text" placeholder="Euros" onkeypress="divisa(this.form)"  name="divisaConv" tabindex=3 autocomplete="off">
                    </div>
                    <div id="parte1">
                        <input id="dotaCana" type="text" placeholder="Canadienses" onkeypress="divisa(this.form)"  name="divisaConv" tabindex=4 autocomplete="off">
                    </div>
                   </form>
                 </div><div class="panel-footer text-right"> </div></div> </div>
                                  <!--Sección de Desglose de moneda-->                     
<div class="row" >
    <div class="item col-xs-12 col-lg-8">
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
                <th>Pesos</th>
                <th></th>
                <th>Dólares</th>
                <th></th>
                <th>Euros</th>
                <th></th>
                <th>Dll Can</th>
                <th></th></tr>
                <tr><th ></th>
                <th>F</th>
                <th id="cant">Pesos</th>
                <th>F</th>
                <th>Dólares</th>
                <th>F</th>
                <th>Euros</th>
                <th>F</th>
                <th>Can</th></tr>
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

            <td><input type="text" placeholder="0" id="f1" onkeypress="fajilla1000P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaPMill" name="fajillaPMill" value="0" >
            <td><input id="MIL" name="MIL" type="text" placeholder="0" tabindex=4 onkeypress="pesos1000(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoValMil" name="pesoValMil" value="0">

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

            <td><input type="text" placeholder="0" id="f1" onkeypress="fajilla1000P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaPMill" name="fajillaPMill" value="0" >
            <td><input id="MIL" name="MIL" type="text" placeholder="0" tabindex=4 onkeypress="pesos1000(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoValMil" name="pesoValMil" value="0">

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

            <td><input type="text" placeholder="0" id="f1" onkeypress="fajilla1000P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaPMill" name="fajillaPMill" value="0" >
            <td><input id="MIL" name="MIL" type="text" placeholder="0" tabindex=4 onkeypress="pesos1000(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoValMil" name="pesoValMil" value="0">
            
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

            <td><input type="text" placeholder="0" id="f1" onkeypress="fajilla1000P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaPMill" name="fajillaPMill" value="0" >
            <td><input id="MIL" name="MIL" type="text" placeholder="0" tabindex=4 onkeypress="pesos1000(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoValMil" name="pesoValMil" value="0">

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

            <td><input type="text" placeholder="0" id="f1" onkeypress="fajilla1000P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaPMill" name="fajillaPMill" value="0" >
            <td><input id="MIL" name="MIL" type="text" placeholder="0" tabindex=4 onkeypress="pesos1000(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoValMil" name="pesoValMil" value="0">

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

            <td><input type="text" placeholder="0" id="f1" onkeypress="fajilla1000P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaPMill" name="fajillaPMill" value="0" >
            <td><input id="MIL" name="MIL" type="text" placeholder="0" tabindex=4 onkeypress="pesos1000(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoValMil" name="pesoValMil" value="0">

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

            <td><input type="text" placeholder="0" id="f1" onkeypress="fajilla1000P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaPMill" name="fajillaPMill" value="0" >
            <td><input id="MIL" name="MIL" type="text" placeholder="0" tabindex=4 onkeypress="pesos1000(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoValMil" name="pesoValMil" value="0">

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

            <td><input type="text" placeholder="0" id="f1" onkeypress="fajilla1000P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaPMill" name="fajillaPMill" value="0" >
            <td><input id="MIL" name="MIL" type="text" placeholder="0" tabindex=4 onkeypress="pesos1000(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoValMil" name="pesoValMil" value="0">

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

            <td><input type="text" placeholder="0" id="f1" onkeypress="fajilla1000P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaPMill" name="fajillaPMill" value="0" >
            <td><input id="MIL" name="MIL" type="text" placeholder="0" tabindex=4 onkeypress="pesos1000(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoValMil" name="pesoValMil" value="0">

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

            <td><input type="text" placeholder="0" id="f1" onkeypress="fajilla1000P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaPMill" name="fajillaPMill" value="0" >
            <td><input id="MIL" name="MIL" type="text" placeholder="0" tabindex=4 onkeypress="pesos1000(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoValMil" name="pesoValMil" value="0">

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

            <td><input type="text" placeholder="0" id="f1" onkeypress="fajilla1000P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaPMill" name="fajillaPMill" value="0" >
            <td><input id="MIL" name="MIL" type="text" placeholder="0" tabindex=4 onkeypress="pesos1000(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoValMil" name="pesoValMil" value="0">

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
            <td><input id="totalConv" name="totalConv" type="text" placeholder="Total" readonly></td>
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
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->

                        
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->



        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
         

    </body>
</html>