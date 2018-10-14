<?php
include('../conexion/conexion.php');
session_start();

if(!empty($_POST))
{

$nombre=mysqli_real_escape_string($con,$_POST["nombre"]);
$horas_practica=mysqli_real_escape_string($con,$_POST["horas_practica"]);
$pre_requisito=mysqli_real_escape_string($con,$_POST["pre_requisito"]);
$nro_creditos=mysqli_real_escape_string($con,$_POST["nro_creditos"]);
$semestre_academico=mysqli_real_escape_string($con,$_POST["semestre_academico"]);
$cod_asignatura=mysqli_real_escape_string($con,$_POST["cod_asignatura"]);
$ciclo_academico=mysqli_real_escape_string($con,$_POST["ciclo_academico"]);
$facultad=mysqli_real_escape_string($con,$_POST["facultad"]);
$horas_teoria=mysqli_real_escape_string($con,$_POST["horas_teoria"]);
$horas_laboratorio=mysqli_real_escape_string($con,$_POST["horas_laboratorio"]);
$escuela=mysqli_real_escape_string($con,$_POST["escuela"]);


$actualizar_asig="UPDATE asignatura SET 
nomb_asignatura='$nombre',
horas_practica='$horas_practica',
pre_requisito='$pre_requisito',
nro_creditos='$nro_creditos',
semestre_academico='$semestre_academico',
ciclo_academico='$ciclo_academico',
facultad='$facultad',
horas_teoria='$horas_teoria',
escuela='$escuela',
horas_laboratorio='$horas_laboratorio' WHERE cod_asignatura='$cod_asignatura'";
$output='';
if(mysqli_query($con,$actualizar_asig))
  {
    $query="SELECT * FROM asignatura ";
      $result=mysqli_query($con,$query);

      $output.='<thead>  
      <tr>  
           <td>Nimbre</td>  
           <td>Escuela</td>  
           <td>Ciclo</td>  
            
           <td width="15%"><span class="glyphicon glyphicon-pencil"></span>Editar</td>
<td width="15%">Visualizar </td>
<td width="15%"><span class="glyphicon glyphicon-trash"></span>Eliminar </td>
      </tr>  
 </thead> ';
      while ($row = mysqli_fetch_array($result))
       {
        $output.=' 
        <tr>  
             <td>'.$row["nomb_asignatura"].'</td>  
             <td>'.$row["escuela"].'</td>  
             <td>'.$row["ciclo_academico"].'</td>  
             <td><input type="button" name="edit" value="Editar" id="'.$row["cod_asignatura"].'" class="btn btn-warning btn-xs edit_data"/></td>
            <td><input type="button" name="view" value="Visualizar" id="'.$row["cod_asignatura"].'"class="btn btn-info btn-xs view_data"/></td>
        <td><input type="button" name="delete" value="Eliminar" id="'.$row["cod_asignatura"].'"  class="btn btn-danger btn-xs delete_data"/></td>
        </tr>  
        ';  
      }
     
      echo $output;
}

}

?>
