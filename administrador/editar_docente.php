<?php
include('../conexion/conexion.php');
if(!empty($_POST))
{

$message='';

$nombre_edita=mysqli_real_escape_string($con,$_POST["nombre_edita"]);
$apellido_edita=mysqli_real_escape_string($con,$_POST["apellido_edita"]);
$grado_edita=mysqli_real_escape_string($con,$_POST["grado_edita"]);
$titulo_edita=mysqli_real_escape_string($con,$_POST["titulo_edita"]);
$email_edita=mysqli_real_escape_string($con,$_POST["email_edita"]);
$DNI_edita=mysqli_real_escape_string($con,$_POST["DNI_edita"]);
$fnacimiento_edita=mysqli_real_escape_string($con,$_POST["fnacimiento_edita"]);
$telefono_edita=mysqli_real_escape_string($con,$_POST["telefono_edita"]);
$tipo_edita=mysqli_real_escape_string($con,$_POST["tipo_edita"]);
$id_docente=$_POST["id_docente"];
echo $id_docente.'+'.$nombre_edita;
if($nombrefoto1=$_FILES['foto_edita']['name']!='')
{

$nombrefoto1=$_FILES['foto_edita']['name'];
$ruta1=$_FILES['foto_edita']['tmp_name'];
if(is_uploaded_file($ruta1))
{
if($_FILES['foto_edita']['type'] == 'image/png' OR $_FILES['foto_edita']['type'] == 'image/gif' OR $_FILES['foto_edita']['type'] == 'image/jpeg')
		{
$tips = 'jpg';
$type = array('image/jpeg' => 'jpg');
$name = $nombre_edita.'Foto-rest'.'.'.$tips;
$destino_imagen='../img/';
$destino1 =  $destino_imagen.$name;
copy($ruta1,$destino1);

$ruta_imagen = $destino1;

$miniatura_ancho_maximo = 700;
$miniatura_alto_maximo = 500;

$info_imagen = getimagesize($ruta_imagen);
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( $ruta_imagen );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( $ruta_imagen );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( $ruta_imagen );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, $destino1, 80);
}
}

}
else {
	$resul=mysqli_query($con,"SELECT * FROM docente where id='$id_docente'");
	$imagen_actual=mysqli_fetch_array($resul);
    $destino1=$imagen_actual['ruta_imagen'];
}

$actualizar="UPDATE docente set nombre='$nombre_edita',apellido='$apellido_edita',dni='$DNI_edita',
		tipo='$tipo_edita',email='$email_edita',fnacimiento='$fnacimiento_edita',telefono_docente='$telefono_edita',ruta_imagen='$destino1',grado_academico='$grado_edita',titulo='$titulo_edita'
        WHERE id='$id_docente'";
        $ejecutar_actu_admin=mysqli_query($con,$actualizar);

}
?>
