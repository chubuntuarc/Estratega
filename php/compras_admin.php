<?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "SELECT * FROM movimientos WHERE tipo_movimiento = 'Compra' order by id_movimiento desc limit 5";
            $resultado = mysql_query($query);

        while ($fila = mysql_fetch_array($resultado)) { 
            $pesos = $fila[cantidad] * $fila[tipo_cambio];
            $x = number_format($pesos,2);
            $y = number_format($fila[cantidad]);
            echo "<tr>";
            echo "<td> $fila[id_movimiento] </td><td> $fila[divisa] </td><td>$y</td>
            <td>$$x</td><td>$$fila[tipo_cambio]</td><td>$fila[usuario]</td><td>$fila[fecha]</td>";
            echo "</tr>";
        }
             ?>