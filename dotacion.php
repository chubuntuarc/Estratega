<?php include("php/sesion.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Estratega | Admin</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="stylesheet" type="text/css" href="css/tabla.css">
        <link rel="stylesheet" type="text/css" href="css/dotacion.css">
        <script src="js/dotacion.js"></script>
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
                    <div id="parte1">
                        <input id="dotaPesos" type="text" placeholder="Pesos" onkeypress="pesos(this.form)" tabindex=1  autofocus autocomplete="off">
                    </div>
                    <div id="parte1">
                        <input id="dotaDolar" type="text" placeholder="Dólares" onkeypress="dolares(this.form)" tabindex=2  autocomplete="off">
                    </div>
                    <div id="parte1">
                        <input id="dotaEuro" type="text" placeholder="Euros" onkeypress="euros(this.form)" tabindex=3 autocomplete="off">
                    </div>
                    <div id="parte1">
                        <input id="dotaCana" type="text" placeholder="Canadienses" onkeypress="canadienses(this.form)" tabindex=4 autocomplete="off">
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
         <select id="selVendedor" name="selVendedor">
                                        <?php include_once("php/vendedores.php"); ?>
                    </select>
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
            <td><input type="text" placeholder="0" id="f1000p" name="f1000p" onkeypress="fajilla1000(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="p1000" name="p1000" onkeypress="pesos1000(this.form)" tabindex=5 autocomplete="off"></td>
            
            <td><input type="text" readonly="" id="f12"></td>
            <td><input type="text" readonly=""></td>

            <td><input type="text" readonly="" id="f12"></td>
            <td><input type="text" readonly=""></td>

            <td><input type="text" readonly="" id="f12"></td>
            <td><input type="text" readonly=""></td>
        </tr>
        <tr>
            <td>500.00</td>
            <td><input type="text" placeholder="0" id="f500p" name="f500p" onkeypress="fajilla500(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="p500" name="p500"  onkeypress="pesos500(this.form)" tabindex=6 autocomplete="off"></td>

            <td><input type="text" readonly="" id="f13"></td>
            <td><input type="text" readonly=""></td>

            <td><input type="text" readonly="" id="f12"></td>
            <td><input type="text" readonly=""></td>

            <td><input type="text" readonly="" id="f12"></td>
            <td><input type="text" readonly=""></td>
        </tr>
        <tr>
            <td>200.00</td>
            <td><input type="text" placeholder="0" id="f200p" name="f200p" onkeypress="fajilla200(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="p200" name="p200"  onkeypress="pesos200(this.form)" tabindex=7 autocomplete="off"></td>

            <td><input type="text" readonly="" id="f13"></td>
            <td><input type="text" readonly=""></td>

            <td><input type="text" readonly="" id="f12"></td>
            <td><input type="text" readonly=""></td>

            <td><input type="text" readonly="" id="f12"></td>
            <td><input type="text" readonly=""></td>
        </tr>
        <tr>
            <td>100.00</td>
            <td><input type="text" placeholder="0" id="f100p" name="f100p" onkeypress="fajilla100(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="p100" name="p100"  onkeypress="pesos100(this.form)" tabindex=8 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f100d" name="f100d" onkeypress="fajilla100d(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="d100" name="d100"  onkeypress="dolares100(this.form)" tabindex=15 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f100e" name="f100e" onkeypress="fajilla100e(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="e100" name="e100"  onkeypress="euros100(this.form)" tabindex=22 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f100c" name="f100c" onkeypress="fajilla100c(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="c100" name="c100"  onkeypress="canadienses100(this.form)" tabindex=29 autocomplete="off"></td>
        </tr>
        <tr>
            <td>50.00</td>
            <td><input type="text" placeholder="0" id="f50p" name="f50p" onkeypress="fajilla50(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="p50" name="p50"  onkeypress="pesos50(this.form)" tabindex=9 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f50d" name="f50d" onkeypress="fajilla50d(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="d50" name="d50"  onkeypress="dolares50(this.form)" tabindex=16 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f50e" name="f50e" onkeypress="fajilla50e(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="e50" name="e50"  onkeypress="euros50(this.form)" tabindex=23 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f50c" name="f50c" onkeypress="fajilla50c(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="c50" name="c50"  onkeypress="canadienses50(this.form)" tabindex=30 autocomplete="off"></td>
        </tr>  
        <tr>
            <td>20.00</td>
            <td><input type="text" placeholder="0" id="f20p" name="f20p" onkeypress="fajilla20(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="p20" name="p20"  onkeypress="pesos20(this.form)" tabindex=10 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f20d" name="f20d" onkeypress="fajilla20d(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="d20" name="d20"  onkeypress="dolares20(this.form)" tabindex=17 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f20e" name="f20e" onkeypress="fajilla20e(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="e20" name="e20"  onkeypress="euros20(this.form)" tabindex=24 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f20c" name="f20c" onkeypress="fajilla20c(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="c20" name="c20"  onkeypress="canadienses20(this.form)" tabindex=31 autocomplete="off"></td>
        </tr> 
        <tr>
            <td>10.00</td>
            <td><input type="text" placeholder="0" id="f10p" name="f10p" onkeypress="fajilla10(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="p10" name="p10"  onkeypress="pesos10(this.form)" tabindex=11 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f10d" name="f10d" onkeypress="fajilla10d(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="d10" name="d10"  onkeypress="dolares10(this.form)" tabindex=18 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f10e" name="f10e" onkeypress="fajilla10e(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="e10" name="e10"  onkeypress="euros10(this.form)" tabindex=25 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f10c" name="f10c" onkeypress="fajilla10c(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="c10" name="c10"  onkeypress="canadienses10(this.form)" tabindex=32 autocomplete="off"></td>
        </tr> 
        <tr>
            <td>5.00</td>
            <td><input type="text" placeholder="0" id="f5p" name="f5p" onkeypress="fajilla5(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="p5" name="p5"  onkeypress="pesos5(this.form)" tabindex=12 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f5d" name="f5d" onkeypress="fajilla5d(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="d5" name="d5"  onkeypress="dolares5(this.form)" tabindex=19 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f5e" name="f5e" onkeypress="fajilla5e(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="e5" name="e5"  onkeypress="euros5(this.form)" tabindex=26 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f5c" name="f5c" onkeypress="fajilla5c(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="c5" name="c5"  onkeypress="canadienses5(this.form)" tabindex=33 autocomplete="off"></td>
        </tr> 
        <tr>
            <td>2.00</td>
            <td><input type="text" placeholder="0" id="f2p" name="f2p" onkeypress="fajilla2(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="p2" name="p2"  onkeypress="pesos2(this.form)" tabindex=13 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f2d" name="f2d" onkeypress="fajilla2d(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="d2" name="d2"  onkeypress="dolares2(this.form)" tabindex=20 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f2e" name="f2e" onkeypress="fajilla2e(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="e2" name="e2"  onkeypress="euros2(this.form)" tabindex=27 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f2c" name="f2c" onkeypress="fajilla2c(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="c2" name="c2"  onkeypress="canadienses2(this.form)" tabindex=34 autocomplete="off"></td>
        </tr> 
        <tr>
            <td>1.00</td>
            <td><input type="text" placeholder="0" id="f1p" name="f1p" onkeypress="fajilla1(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="p1" name="p1"  onkeypress="pesos1(this.form)" tabindex=14 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f1d" name="f1d" onkeypress="fajilla1d(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="d1" name="d1"  onkeypress="dolares1(this.form)" tabindex=21 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f1e" name="f1e" onkeypress="fajilla1e(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="e1" name="e1"  onkeypress="euros1(this.form)" tabindex=28 autocomplete="off"></td>

            <td><input type="text" placeholder="0" id="f1c" name="f1c" onkeypress="fajilla1c(this.form)" autocomplete="off"></td>
            <td><input type="text" placeholder="0" id="c1" name="c1"  onkeypress="canadienses1(this.form)" tabindex=35 autocomplete="off"></td>
        </tr> 
         <tr>
            <td></td>
            <td></td>
            <td><input id="totalConv" name="totalConv" type="text" placeholder="Total" readonly></td>
            <td></td>
            <td><input id="totalDllConv" name="totalDllConv" type="text" placeholder="Total" readonly></td>
            <td></td>
            <td><input id="totalEuroConv" name="totalEuroConv" type="text" placeholder="Total" readonly></td>
            <td></td>
            <td><input id="totalCanConv" name="totalCanConv" type="text" placeholder="Total" readonly></td>
        </tr> 
         <tr>
            <td>Cambio</td>
            <td></td>
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
            <input type="hidden" id="pesos">
            <input type="hidden" id="cambioInsertar" name="cambioInsertar">
            <input type="hidden" id="pesosInsertar" name="pesosInsertar">
            <input type="hidden" id="subtotal" name="subtotal">
            <input type="hidden" id="subtotalDll" name="subtotalDll">
            <input type="hidden" id="insertaPeso" name="insertaPeso">
            <input type="hidden" id="insertaDolar" name="insertaDolar">
            <input type="hidden" id="insertaEuro" name="insertaEuro">
            <input type="hidden" id="insertaCana" name="insertaCana">
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
    <?php include_once("php/dotacion.php"); ?><!--Operaciones de dotacion a cajas-->
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