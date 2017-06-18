<?php
session_start();
session_name('permiso');
$nombre_admin=$_SESSION['nombre_docente'];


require_once("conexion.php");

$nombre = $_FILES['imagen']['name'];
$nombrer = strtolower($nombre);
$cd=$_FILES['imagen']['tmp_name'];
$ruta = "img/" . $_FILES['imagen']['name'];
$destino = "img/".$nombrer;
$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);

if (!empty($resultado)){

                @mysqli_query($con,"UPDATE docente SET ruta_imagen = '$nombre' where Cod_docente='$nombre_admin'"); 
                echo "el archivo ha sido movido exitosamente";

                }else{

                    echo "Error al subir el archivo";

                    }
?>