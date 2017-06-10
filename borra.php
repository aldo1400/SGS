<?php
include("conexion.php");
if($_GET['id'])
{
$id=$_GET['id'];
echo $id;
$sql = "delete from dicta where Cod_docente='$id'";
mysql_query($con,$sql);
}
?>