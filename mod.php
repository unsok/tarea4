<?php

if(!isset($_GET['numero']) || empty($_GET['numero']))
{
		exit();
}
$numero =$_GET['numero'];

$link=mysql_connect('localhost','root','')or die ('Ha fallado la conexi&oacute;n: '.mysql_error());
mysql_select_db('mydb')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

$sql="DELETE FROM archivo WHERE numeroarchivo='$numero'";
mysql_query($sql,$link);
mysql_close($link);
echo "<script>alert('El Archivo ha sido eliminado de manera satisfactoria.');</script>";
echo "<meta http-equiv='Refresh' content='2;url=index.php'>";
?>
