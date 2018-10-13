<?php
include('../conexion/conexion.php');

if (isset($_POST["id_docente"]))
{
    $id=$_POST['id_docente'];
  $query="SELECT * FROM docente where id='$id'";
  $result=mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);
  echo json_encode($row);

}

 ?>
