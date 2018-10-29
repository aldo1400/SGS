<?php
include('../conexion/conexion.php');

if (isset($_POST["estrategia_id"]))
{
  $id=$_POST['estrategia_id'];

  $query="SELECT * FROM banco_estrategia where codigo_estrategia='$id'";
  $result=mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);
  echo json_encode($row);

}

 ?>