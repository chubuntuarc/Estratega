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