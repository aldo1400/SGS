<?php

include('conexion.php');
$service = $_POST['id'];


mysql_query("DELETE FROM dicta WHERE  interno_docente='$service' and cod_asignatura='011101'", $con);
?>