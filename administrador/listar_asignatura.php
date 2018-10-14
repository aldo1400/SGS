<?php
include('../conexion/conexion.php');

if (isset($_POST["id_asignatura"]))
{
  $id=$_POST['id_asignatura'];
  $query="SELECT * FROM asignatura where cod_asignatura='$id'";
  $result=mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);
  echo json_encode($row);

}

 ?>