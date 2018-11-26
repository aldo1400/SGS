<?php
include('../conexion/conexion.php');
if (isset($_POST['logro']))
{
    $numero=$_POST['numero'];
    $logro=$_POST['logro'];
    
    $titulo=$_POST['titulo'];
    $actitudes=$_POST['actitudes'];
    $id_asignatura=$_POST['asignatura'];
  $query="INSERT INTO unidades(id,numero,nombre,logro,actitudes,id_asignatura) VALUES (null,'$numero','$titulo','$logro','$actitudes','$id_asignatura'); ";
  // $valor="SELECT @@IDENTITY AS [@@IDENTITY]; SELECT SCOPE_IDENTITY()"";
  // $result=mysqli_query($con,$query);
  // $query="INSERT INTO competencia_asignatura(cod_competencia,competencia,tipo_competencia) VALUES (null,'$contenido','$tipo'); ";
  $result=mysqli_query($con,$query);
  echo $_POST['asignatura'].$_POST['actitudes'].$_POST['titulo'].$_POST['logro'].$_POST['numero'];
}

?>