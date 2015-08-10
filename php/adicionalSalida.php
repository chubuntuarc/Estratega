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
<?php
if ($peso <= $pesosAnt) {
    $uploadedfileload="true";
$uploadedfile_size=$_FILES['uploadedfile'][size];
echo $_FILES[uploadedfile][name];
if ($_FILES[uploadedfile][size]>200000)
{$msg=$msg."El archivo es mayor que 200KB, debes reducirlo antes de subirlo<BR>";
$uploadedfileload="false";}


$file_name=$_FILES[uploadedfile][name];
$add="uploads/$file_name";
if($uploadedfileload=="true"){

if(move_uploaded_file ($_FILES[uploadedfile][tmp_name], $add)){
echo " Ha sido subido satisfactoriamente";
}else{echo "Error al subir el archivo";}

}else{echo $msg;}
}

?>