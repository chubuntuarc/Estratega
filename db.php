<?php 
	$host = "localhost";
	$user = "root";
	$pw = "";
	$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
	 $db   = mysql_select_db('estra');
 ?>