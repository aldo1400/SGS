<?php 
    
    include('../conexion/conexion.php');
if (isset($_POST['estrategia_contenido']))
{
    $contenido=$_POST['estrategia_contenido'];
    $id=$_POST['codigo_estrategia'];
    // $tipo=$_POST['tipo'];
  $query="UPDATE banco_estrategia SET estrategia='$contenido' where codigo_estrategia='$id' ;";
  $result=mysqli_query($con,$query);

}

?>