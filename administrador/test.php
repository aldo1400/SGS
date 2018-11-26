
            <?php
            include('../conexion/conexion.php');
session_start();
            $id=$_SESSION['id'];
            $query="SELECT * FROM docente where id!=$id";
            $result=mysqli_query($con,$query);

            $output='';
            $output.='
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

          <td><input type="button" name="edit" value="Editar" id="'.$row["id"].'" class="btn btn-warning btn-xs edit_data"/></td>
          <td><input type="button" name="view" value="Visualizar" id="'.$row["id"].'"class="btn btn-info btn-xs view_data"/></td>
          <td><input type="button" name="delete" value="Eliminar" id="'.$row["id"].'"  class="btn btn-danger btn-xs delete_data"/></td>

          </tr>
      ';
    }
        echo $output;