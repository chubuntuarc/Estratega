<?php 
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$query = "SELECT * FROM cajas WHERE usuario = '$nom'";
$resultado = mysql_query($query);
while ($fila = mysql_fetch_array($resultado)) {
    $GLOBALS['pesosAnt'] = $fila[pesos];
}
 ?>
<?php 
$peso = $_POST["cantidadAS"];
$nuevoPeso = $pesosAnt - $peso;
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
if ($peso <= $pesosAnt) {
        $query = "UPDATE cajas SET pesos = $nuevoPeso WHERE usuario = '$nom'";
        $resultado = mysql_query($query);
}
else
        {
            ?> <script>alert("No cuenta con suficiente efectivo en caja");</script><?php 
        }
?>
<?php
$peso = $_POST["cantidadAS"];
$con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
$query = "INSERT INTO adicionales (concepto, comentario, tipo, cantidad,documento,usuario)
VALUES ('{$_POST["conceptoAS"]}','','Salida',{$_POST["cantidadAS"]},'{$_POST["comentarioAS"]}','$nom')";
if ($peso <= $pesosAnt) {
     $resultado = mysql_query($query);
}
?>