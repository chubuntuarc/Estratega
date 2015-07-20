<?php 
class operaciones
{
	function conecta()
	{
		$GLOBALS['host'] = "localhost";
        $GLOBALS['user'] = "root";
        $GLOBALS['pw'] = "";
        $GLOBALS['db'] = "estra";
	}

	function insertaMovimiento()
	{
	    error_reporting(0);
        if ('registra' == true) {
        conecta();
        $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
        mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
        $query = "INSERT INTO movimientos (cantidad, divisa, tipo_cambio, tipo_movimiento,usuario)
        VALUES ({$_POST['cantidad']},'{$_POST['divisa']}',{$_POST['cambio']},'{$_POST['movimiento']}','usuario')";
        $resultado = mysql_query($query);
        }
	}

}	
 ?>
