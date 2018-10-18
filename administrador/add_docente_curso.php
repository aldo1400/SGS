<?php
include('../conexion/conexion.php');
if (isset($_POST["id_docente"]))
{
  $id_docente=$_POST['id_docente'];
  $id_asignatura=$_POST['id_asignatura'];
  $query="INSERT INTO dicta (cod_asignatura,interno_docente) VALUES ('$id_asignatura','$id_docente'); ";
  $result=mysqli_query($con,$query);
  $output=$id_asignatura;
    echo $output;
}

?>