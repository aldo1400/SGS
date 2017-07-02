<?php
include("conexion.php");
if($_POST['id'])
{
$id=$_POST['id'];
echo $id;
$sql = "DELETE from dicta where interno_docente='id' and cod_asignatura='011103' ";
mysql_query($con,$sql);
}
?>