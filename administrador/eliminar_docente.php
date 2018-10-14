<?php if(isset($_POST["id_delete"]))
  {
        include('../conexion/conexion.php');
        session_start();
        
      $id_delete=$_POST["id_delete"];
      $select_query1="DELETE FROM docente WHERE id='$id_delete' ";
      $ejecutar_actu_admin=mysqli_query($con,$select_query1);
      $id=$_SESSION['id'];
      $select_query="SELECT * FROM docente where id!='$id'";
      $result=mysqli_query($con,$select_query);

      $output.='
        <table class="table table-bordered">
        <tr>
          <th width="35%">Nombre del plato</th>
          <th width="35%">Precio</th>
          <th width="15">Edit</th>
          <th width="15">Edit</th>
          <th width="15%">Visualizar</th>
          <th width="15%">Eliminar</th>
        </tr>
      ';

      while($row=mysqli_fetch_array($result))
      {
        $output.='
        <tr>
            <td>'.$row["nombre"].'</td>
            <td>'.$row["apellido"].'</td>
            <td>'.$row["dni"].'</td>
  					<td><img src="'. $row["ruta_imagen"].'" width="250" height="250" alt="" align="RIGHT" /></td>

            <td><input type="button" name="edit" value="Edit" id="'.$row["id"].'"class="btn btn-info btn-xs edit_data"/></td>
            <td><input type="button" name="view" value="view" id="'.$row["id"].'"class="btn btn-info btn-xs view_data"/></td>
            <td><input type="button" name="delete" value="delete" id="'.$row["id"].'"class="btn btn-info btn-xs delete_data"/></td>

            </tr>
        ';
      }

      $output.='</table>';
      echo $output;
  }

 ?>
