<?php
include('../conexion/conexion.php');

if (isset($_POST["libro_id"]))
{
  $id=$_POST['libro_id'];
  $query="SELECT * FROM bibliografia where id='$id'";
  $result=mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);
  echo json_encode($row);

}

 ?>