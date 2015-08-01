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