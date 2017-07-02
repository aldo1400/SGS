<?php

session_start();
session_name('permiso');


include('conexion.php');

if($_POST['id'])
{
$id1=$_POST['id'];
$curso1=$_SESSION['id_curso'];

$sql = "DELETE from dicta where interno_docente='$id1' and cod_asignatura='$curso1' ";
mysqli_query($con,$sql);

}
?>