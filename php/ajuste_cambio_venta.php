<?php 
            $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
            mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
            $query = "INSERT INTO ajuste_cambio (dollar, dll_can, euro,usuario) VALUES ({$_POST[dolarAjuste]},{$_POST[canAjuste]},{$_POST[euroAjuste]},'$nom')";
            $resultado = mysql_query($query);
             ?>