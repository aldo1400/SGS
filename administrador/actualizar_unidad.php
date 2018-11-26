<?php
include('../conexion/conexion.php');
session_start();

if(!empty($_POST))
{

    // echo $_POST['descripcion'];
$logro=mysqli_real_escape_string($con,$_POST["logro_editar"]);
$actitudes=mysqli_real_escape_string($con,$_POST["actitudes_editar"]);
$numero=mysqli_real_escape_string($con,$_POST["numero_editar"]);
$titulo=mysqli_real_escape_string($con,$_POST["titulo_editar"]);
$id=mysqli_real_escape_string($con,$_POST["unidad_id_editar"]);

$actualizar_unidad="UPDATE unidades SET 
numero='$numero',
actitudes='$actitudes',
logro='$logro',
nombre='$titulo' WHERE id='$id'";
$output=mysqli_query($con,$actualizar_unidad);

}

?>
