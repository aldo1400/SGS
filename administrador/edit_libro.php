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

    $id=$_POST['libro_id'];
    // $tipo=$_POST['tipo'];
  $query="UPDATE bibliografia SET autor='$autor',ubicación='$ubicación',
  titulo='$titulo',año='$año',tipo='$tipo',link='$link' where id='$id'";
  
  $result=mysqli_query($con,$query);

}

?>