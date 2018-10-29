<?php
include('../conexion/conexion.php');
if (isset($_POST['estrategia']))
{
    $estrategia=$_POST['estrategia'];
  $query="INSERT INTO banco_estrategia(codigo_estrategia,estrategia) VALUES (null,'$estrategia'); ";
  // $valor="SELECT @@IDENTITY AS [@@IDENTITY]; SELECT SCOPE_IDENTITY()"";
  // $result=mysqli_query($con,$query);
  // $query="INSERT INTO competencia_asignatura(cod_competencia,competencia,tipo_competencia) VALUES (null,'$contenido','$tipo'); ";
  $result=mysqli_query($con,$query);
  $id_nueva_estrategia=mysqli_insert_id($con);

  $id_asignatura=$_POST['codigo_final_asignatura'];

  $query2="INSERT INTO estrategia_asignatura(cod_asignatura,cod_estrategia) VALUES('$id_asignatura','$id_nueva_estrategia');";
  $result=mysqli_query($con,$query2);
//   echo $_POST['asignatura'];
}

?>