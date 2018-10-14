<?php
include('../conexion/conexion.php');
session_start();
if(!empty($_POST))
{
$output='';
$message='';

$nombre=mysqli_real_escape_string($con,$_POST["nombre_edita"]);
$apellido=mysqli_real_escape_string($con,$_POST["apellido_edita"]);
$grado_academico=mysqli_real_escape_string($con,$_POST["grado_edita"]);
$titulo=mysqli_real_escape_string($con,$_POST["titulo_edita"]);
$email=mysqli_real_escape_string($con,$_POST["email_edita"]);
$dni=mysqli_real_escape_string($con,$_POST["DNI_edita"]);
$fnacimiento=mysqli_real_escape_string($con,$_POST["fnacimiento_edita"]);
$telefono=mysqli_real_escape_string($con,$_POST["telefono_edita"]);
$tipo=mysqli_real_escape_string($con,$_POST["tipo_edita"]);


$nombrefoto1=$_FILES['foto_edita']['name'];
$ruta1=$_FILES['foto_edita']['tmp_name'];
if(is_uploaded_file($ruta1))
{
if($_FILES['foto_edita']['type'] == 'image/png' OR $_FILES['foto_edita']['type'] == 'image/gif' OR $_FILES['foto_edita']['type'] == 'image/jpeg')
		{
$tips = 'jpg';
$type = array('image/jpeg' => 'jpg');
$name = $nombre.'Foto-rest'.'.'.$tips;
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

$letra=substr($nombre, 0, 1);
$porciones = explode(" ", $apellido);
$cod=$letra.$porciones[0];

$query="INSERT INTO docente(Cod_docente,id,nombre,apellido,dni,tipo,email,fnacimiento,telefono_docente,password,grado_academico,titulo)
         VALUES('$cod',NULL,'$nombre','$apellido','$dni','$tipo','$email','$fnacimiento','$telefono','$cod','$grado_academico','$titulo')";


if(mysqli_query($con,$query))
  {
    $id=$_SESSION['id'];
    $output='';
    $output.='<label class="text-success"> Docente actualizado </label>';
    $select_query="SELECT * FROM docente where id!='$id'";
    $result=mysqli_query($con,$select_query);
    $output.='
      <table class="table table-bordered">
      <tr>
      <th width="35%">Nombre </th>
      <th width="25%">Apellido </th>
      <th width="25%">DNI</th>
      <th width="35%">Imagen del docente </th>
      <th width="15%"><span class="glyphicon glyphicon-pencil"></span>Editar</th>
      <th width="15%">Visualizar </th>
      <th width="15%"><span class="glyphicon glyphicon-trash"></span>Eliminar </th>
      </tr>
    ';

    while($row=mysqli_fetch_array($result))
    {
      $output.='
        <tr>
          <td>'.$row["nombre"].'</td>
          <td>'.$row["apellido"].'</td>
          <td>'.$row["dni"].'</td>
					<td><img src="'. $row["ruta_imagen"].'" width="50" height="50" alt="" align="RIGHT" /></td>

          <td><input type="button" name="edit" value="Editar" id="'.$row["id"].'"class="btn btn-warning btn-xs edit_data"/></td>
          <td><input type="button" name="view" value="Visualizar" id="'.$row["id"].'"class="btn btn-info btn-xs view_data"/></td>
          <td><input type="button" name="delete" value="Eliminar" id="'.$row["id"].'"class="btn btn-danger btn-xs delete_data"/></td>

          </tr>
      ';
    }

    $output.='</table>';

  }


  echo $output;

}
?>
