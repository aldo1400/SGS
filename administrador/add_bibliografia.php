<?php
include('../conexion/conexion.php');
if (isset($_POST['titulo']))
{
    $autor=$_POST['autor'];
    $ubicación=$_POST['ubicacion'];
    $titulo=$_POST['titulo'];
    $año=$_POST['year'];
    $tipo=$_POST['tipo'];
    $link=$_POST['link'];

  $query="INSERT INTO bibliografia(id,autor,ubicación,titulo,año,tipo,link) VALUES (null,'$autor','$ubicación','$titulo','$año','$tipo','$link'); ";
  // $valor="SELECT @@IDENTITY AS [@@IDENTITY]; SELECT SCOPE_IDENTITY()"";
  // $result=mysqli_query($con,$query);
  // $query="INSERT INTO competencia_asignatura(cod_competencia,competencia,tipo_competencia) VALUES (null,'$contenido','$tipo'); ";
  $result=mysqli_query($con,$query);
  
  
  $id_libro=mysqli_insert_id($con);
  
  $id_asignatura=$_POST['asignatura'];
  $query2="INSERT INTO bibliografia_asignatura(id_libro,id_asignatura) VALUES('$id_libro','$id_asignatura');";
  $result=mysqli_query($con,$query2);


//   echo $_POST['asignatura'];
}

?>