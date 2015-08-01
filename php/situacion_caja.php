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