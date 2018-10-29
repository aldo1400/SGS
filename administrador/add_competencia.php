<?php
include('../conexion/conexion.php');
if (isset($_POST['tipo']))
{
    $contenido=$_POST['contenido'];
    $tipo=$_POST['tipo'];
  $query="INSERT INTO banco_competencia(cod_competencia,competencia,tipo_competencia) VALUES (null,'$contenido','$tipo'); ";
  // $valor="SELECT @@IDENTITY AS [@@IDENTITY]; SELECT SCOPE_IDENTITY()"";
  // $result=mysqli_query($con,$query);
  // $query="INSERT INTO competencia_asignatura(cod_competencia,competencia,tipo_competencia) VALUES (null,'$contenido','$tipo'); ";
  $result=mysqli_query($con,$query);
  $id_nueva_competencia=mysqli_insert_id($con);
  $id_asignatura=$_POST['asignatura'];

  $query2="INSERT INTO competencia_asignatura(cod_competencia,cod_asignatura) VALUES('$id_nueva_competencia','$id_asignatura');";
  $result=mysqli_query($con,$query2);
  // echo $_POST['asignatura'];
}

?>