<?php
include('../conexion/conexion.php');

if (isset($_POST["unidad_id"]))
{
  $id=$_POST['unidad_id'];
  $query="SELECT * FROM unidades where id='$id'";
  $result=mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);
  echo json_encode($row);

}

 ?>