<?php
include('../conexion/conexion.php');
session_start();
            $id_asignatura=$_POST['id_asignatura'];
            
            $query ="SELECT * from docente inner join dicta on docente.id=dicta.interno_docente inner join asignatura on dicta.cod_asignatura=asignatura.cod_asignatura where dicta.cod_asignatura='$id_asignatura'";  
            $result=mysqli_query($con,$query);

            $output='';
            $output.='
      <table class="table table-bordered">
      <tr>
      <th width="35%">Nombre </th>
      <th width="25%">Apellido </th>
      <th width="25%">DNI</th>
      <th width="35%">Imagen </th>
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
          <td><input type="button" name="delete" value="Eliminar" id="'.$row["id"].'"  class="btn btn-danger btn-xs eliminar_docente_curso"/></td>

          </tr>
      ';
    }

    $output.='</table>';
        echo $output;
?>