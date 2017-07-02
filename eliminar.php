<?php

include('conexion.php');

id=$_POST["id"];

$consulta=mysqli_query($con,"DELETE FROM dicta where interno_docente='$id' and cod_asignatura='011103'");

if(!$consulta)
{
		echo "Error al eliminar registro";
		exit();
		}
		
		else
		{
		
		echo "El registro ha sido eliminado";

}
?>