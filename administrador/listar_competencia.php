<?php
include('../conexion/conexion.php');

if (isset($_POST["competencia_id"]))
{
  $id=$_POST['competencia_id'];
  $query="SELECT * FROM banco_competencia where cod_competencia='$id'";
  $result=mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);
  echo json_encode($row);

}

 ?>