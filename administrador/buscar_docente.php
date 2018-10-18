<?php
include('../conexion/conexion.php');
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($con, $_POST["query"]);
 $query = "
  SELECT * FROM docente
  WHERE dni LIKE '%".$search."%'
  OR nombre LIKE '%".$search."%' 
  OR apellido LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM docente ORDER BY id
 ";
}
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Nombre</th>
     <th>Apellido</th>
     <th>DNI</th>
     <th>Accion</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["nombre"].'</td>
    <td>'.$row["apellido"].'</td>
    <td>'.$row["dni"].'</td>
    <td><input type="button" name="edit" value="Añadir a la asignatura" id="'.$row["id"].'" class="btn btn-warning btn-xs add_docente_curso"/></td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Docente no encontrado';
}

?>