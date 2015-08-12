<?php include("php/sesion.php"); ?>
<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jesus Arciniega">
    <title>Estratega Adicionales</title>
    <script src="js/script.js"></script>
    <!--Funciones de desglose y conversión de divisas-->
    <script src="js/desglose.js"></script>
    <script src="js/adicionales.js"></script>
    <!--Say cheese-->
    <script src="js/say-cheese.js"></script>
    <!--Elementos adicionales-->
    <link rel="stylesheet" type="text/css" href="css/tabla.css">
    <link rel="stylesheet" type="text/css" href="css/vendedor.css">
    <link rel="stylesheet" type="text/css" href="css/adicionales.css">
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
            <div class="menux col-xs-9 col-lg-9">
                <a href="movimientos.php" >Información</a>
                <a href="vendedor.php">Operaciones</a>
                <a href="adicionales2.php">Entrada</a>
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

<!--Sección de operaciones-->
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
            <div class="item col-xs-12 col-lg-9">
                <div class="panel panel-default paper-shadow" data-z="0.5">
                    <div class="panel-heading">
                        <h4 class="text-headline margin-none">Salida Adicional</h4>
                    </div>
                    <div class="tabla ">
                    <form method="post">
                      <form name="adiciona">
                        <div class="col-lg-1"></div>
                                 <select id="concepto" name="concepto" >
                                        <?php include_once("php/contable.php"); ?>
                                    </select><br>
                                    <div class="col-lg-2"></div>
                                    <div id="webcam" class="col-lg-4"></div><span><div id="foto"></div></span>
                                    
                                    <input type="button" id="tomar" value="Foto">
                                    
                                    <div class="col-lg-3"></div>
                                </form> 
                    <div id="parte4">
                    <p>Transacciones para realizar una salida de efectivo.</p>
                   </div>
                   <div class="col-lg-1"></div>
                    <div id="" class="col-lg-10">
                        <input id="cantidad" name="cantidad" type="text" placeholder="Cantidad" onblur="adicional2()" onfocus="adicional1()" tabindex=2 autocomplete="off">
                    </div>
                    <div class="col-lg-1"></div>
                    <div id="">
                        <input id="comentario" name="comentario" rows="5" type="text" placeholder="Comentario / Concepto" onblur="adicional3()" tabindex=3 autocomplete="off">
                    </div>
                   </form>
                 </div><div class="panel-footer text-right"> </div></div> </div>
        <div class="row" data-toggle="isotope">
            <div class="item col-xs-12 col-lg-9">
                     </div>
                     </div>

<!--Sección de Desglose de moneda-->                     
<div class="row" >
    <div class="item col-xs-6 col-lg-3">
        <div class="panel panel-default paper-shadow" data-z="0.5">
            <div class="panel-heading">
                <h4 class="text-headline margin-none">Desglose</h4>
                <p class="text-subhead text-light">Desglose de moneda</p>
            </div>
         <form method="post" class="desglose" name="desglose" enctype="multipart/form-data">
            <div class="tabla ">
    <table>
        <thead>
                <tr><th >Denominación</th>
                <th>Salida</th>
                <th></th>
                </tr>
                <tr><th ></th>
                <th>F</th>
                <th id="cant">Pesos</th>
        </thead>
        <tbody class="manejoT">
        <tr>
            <td>1000.00</td>
            <td><input type="text" placeholder="0" id="f1" onkeypress="fajilla1000P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaPMill" name="fajillaPMill" value="0" >
            <td><input id="MIL" name="MIL" type="text" placeholder="0" tabindex=4 onkeypress="pesos1000(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoValMil" name="pesoValMil" value="0">
        </tr>
        <tr>
            <td>500.00</td>
            <td><input type="text" placeholder="0" id="f2" onkeypress="fajilla500P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP500" name="fajillaP500" value="0" >
            <td><input id="500" name="500" type="text" placeholder="0" tabindex=5 onkeypress="pesos500(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal500" name="pesoVal500" value="0">
        </tr>
        <tr>
            <td>200.00</td>
            <td><input type="text" placeholder="0" id="f3" onkeypress="fajilla200P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP200" name="fajillaP200" value="0" >
            <td><input id="200" name="200" type="text" placeholder="0" tabindex=6 onkeypress="pesos200(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal200" name="pesoVal200" value="0">
        </tr>
        <tr>
            <td>100.00</td>
            <td><input type="text" placeholder="0" id="f4" onkeypress="fajilla100P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP100" name="fajillaP100" value="0" >
            <td><input id="100" name="100" type="text" placeholder="0" tabindex=7 onkeypress="pesos100(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal100" name="pesoVal100" value="0">
        </tr>
        <tr>
            <td>50.00</td>
            <td><input type="text" placeholder="0" id="f5" onkeypress="fajilla50P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP50" name="fajillaP50" value="0" >
            <td><input id="50" name="50" type="text" placeholder="0" tabindex=8 onkeypress="pesos50(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal50" name="pesoVal50" value="0">
        </tr>  
        <tr>
            <td>20.00</td>
            <td><input type="text" placeholder="0" id="f6" onkeypress="fajilla20P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP20" name="fajillaP20" value="0" >
            <td><input id="20" name="20" type="text" placeholder="0" tabindex=9 onkeypress="pesos20(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal20" name="pesoVal20" value="0">
        </tr> 
        <tr>
            <td>10.00</td>
            <td><input type="text" placeholder="0" id="f7" onkeypress="fajilla10P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP10" name="fajillaP10" value="0" >
            <td><input id="10" name="10" type="text" placeholder="0" tabindex=10 onkeypress="pesos10(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal10" name="pesoVal10" value="0">
        </tr> 
        <tr>
            <td>5.00</td>
            <td><input type="text" placeholder="0" id="f8" onkeypress="fajilla5P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP5" name="fajillaP5" value="0" >
            <td><input id="5" name="5" type="text" placeholder="0" tabindex=11 onkeypress="pesos5(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal5" name="pesoVal5" value="0">
        </tr> 
        <tr>
            <td>2.00</td>
            <td><input type="text" placeholder="0" id="f9" onkeypress="fajilla2P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP2" name="fajillaP2" value="0" >
            <td><input id="2" name="2" type="text" placeholder="0" tabindex=12 onkeypress="pesos2(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal2" name="pesoVal2" value="0">
        </tr> 
        <tr>
            <td>1.00</td>
            <td><input type="text" placeholder="0" id="f10" onkeypress="fajilla1P(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaP1" name="fajillaP1" value="0" >
            <td><input id="1" name="1" type="text" placeholder="0" tabindex=13 onkeypress="pesos1(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal1" name="pesoVal1" value="0">
        </tr> 
         <tr>
            <td>0.50</td>
            <td><input type="text" placeholder="0" id="f11" onkeypress="fajilla50C(this.form)" autocomplete="off"></td>
            <input type="hidden" id="fajillaC50" name="fajillaC50" value="0" >
            <td><input id="05" name="05" type="text" placeholder="0" tabindex=14 onkeypress="pesos05(this.form)" autocomplete="off"></td>
            <input type="hidden" id="pesoVal05" name="pesoVal05" value="0">
        </tr> 
         <tr>
            <td></td>
            <td></td>
            <td><input id="totalConv" name="totalConv" type="text" placeholder="Total" readonly></td>
        </tr> 
         <tr>
            <td>Cambio</td>
            <td></td>
            <td><input id="totalDif" name="totalDif" type="text" placeholder="Diferencia" readonly></td>
        </tr> 
        <tr>
            <td></td>
            <td></td>
            <input type="hidden" id="dolaresInsertar" name="dolaresInsertar">
            <input type="hidden" id="cambioInsertar" name="cambioInsertar">
            <input type="hidden" id="conceptoAS" name="conceptoAS">
            <input type="hidden" id="comentarioAS" name="comentarioAS">
            <input type="hidden" id="cantidadAS" name="cantidadAS" value="">
            <!--<form enctype="multipart/form-data" action="subearchivo.php" method="POST">
            <input name="uploadedfile" type="file" />
            <input type="submit" value="Subir archivo" />
            </form> -->
            <input type="hidden" id="documento" name="uploadedfile" value=""><!--Boton para subir archivo-->
            <td><input class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated type="submit" id="registraMov" value="Listo" tabindex=33></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr> 
        </tbody>
    </table>
   
    </form>
    
    <?php include_once("php/adicionalSalida.php"); ?><!--Se insertan movimientos adicionales a la BD-->
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
    <!-- JQuery 2.1.4 -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!--Inicializacion de webcam mediante cheese -->
    <script type="text/javascript">
        var sayCheese = new SayCheese('#webcam', { snapshots: true });
        var img = null;
        sayCheese.on('start', function() {
         // do something when started
         this.takeSnapshot();
        });

        sayCheese.on('error', function(error) {
         // handle errors, such as when a user denies the request to use the webcam,
         // or when the getUserMedia API isn't supported
        });

        sayCheese.on('snapshot', function(snapshot) {
          // do something with a snapshot canvas element, when taken
        });

        sayCheese.start();

        $('#tomar').bind('click',function(e){
            sayCheese.takeSnapshot(170,130);
            return false;
        })

        sayCheese.on('snapshot', function(snapshot) {
          img = document.createElement('img');
          $(img).on('load', function(){
            $('#foto').html(img);
          })
          img.src=snapshot.toDataURL('image/png');
        });
    </script>
</body>
</html>