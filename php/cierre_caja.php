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