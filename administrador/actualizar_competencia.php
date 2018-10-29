<?php
include('../conexion/conexion.php');
session_start();

if(!empty($_POST))
{

    echo $_POST['descripcion'];
$tipo=mysqli_real_escape_string($con,$_POST["tipo"]);
$descripcion=mysqli_real_escape_string($con,$_POST["descripcion"]);
$competencia_id=mysqli_real_escape_string($con,$_POST["competencia_id_editar"]);

$actualizar_competencia="UPDATE banco_competencia SET 
competencia='$descripcion',
tipo_competencia='$tipo' WHERE cod_competencia='$competencia_id'";
$output=mysqli_query($con,$actualizar_competencia);

}

?>
