<?php if(isset($_POST["docente_id"]))
  {
      $output='';
      include('../conexion/conexion.php');
      $query="SELECT * FROM docente WHERE id='".$_POST["docente_id"]."' ";
      $result=mysqli_query($con,$query);
      while ($row = mysqli_fetch_array($result))
       {
        $output.='
      
      <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationCustom01">Código docente</label>
            <input type="text" class="form-control" name="" id="validationCustom01" placeholder="First name" value="'.$row["Cod_docente"].'" required disabled="true">
           
          </div>
          <div class="col-md-4 mb-3">
            <label for="nombre_edita">Nombres</label>
            <input type="text" class="form-control" name="nombre_edita" id="nombre_edita" placeholder="Last name" value="'.$row["nombre"].'" required disabled="true" >
            
          </div>
          <div class="col-md-4 mb-3">
            <label for="apellido_edita">Apellidos</label>
            <input type="text" class="form-control" name="apellido_edita" id="apellido_edita" placeholder="Last name" value="'.$row["apellido"].'" required disabled="true">
            
          </div>
        </div>
      <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="grado_edita">Grado academico</label>
            <input type="text" class="form-control" name="grado_edita" id="grado_edita" placeholder="First name" value="'.$row["grado_academico"].'" required disabled="true">
            
          </div>
          <div class="col-md-4 mb-3">
            <label for="titulo_edita">Titulo</label>
            <input type="text" class="form-control" name="titulo_edita" id="titulo_edita" placeholder="Last name" value="'.$row["titulo"].'" required disabled="true">
            
          </div>
          <div class="col-md-4 mb-3">
            <label for="DNI_edita">Dni</label>
            <input type="text" class="form-control" name="DNI_edita" id="DNI_edita" placeholder="Last name" value="'.$row["dni"].'" required disabled="true">
            
          </div>
        </div>
      <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="tipo_edita">Tipo</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="'.$row["tipo"].'" required disabled="true">
          
              
          </div>
          <div class="col-md-4 mb-3">
            <label for="email_edita">Email</label>
            <input type="text" class="form-control" name="email_edita" id="email_edita" placeholder="Last name" value="'.$row["email"].'" required disabled="true">
            
          </div>
          <div class="col-md-4 mb-3">
            <label for="fnacimiento_edita">Fecha de nacimiento</label>
            <input type="text" class="form-control" id="fnacimiento_edita" name="fnacimiento_edita" placeholder="Last name" value="'.$row["fnacimiento"].'" required disabled="true">
            
          </div>
        </div>
      
      
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="telefono_edita">Telefono</label>
            <input type="text" class="form-control" id="telefono_edita" name="telefono_edita" placeholder="First name" value="'.$row["telefono_docente"].'" required disabled="true">
            
          </div>
          <div class="col-md-8 mb-3">
            <label for="foto_edita">Foto de perfil</label>
            <img src="'.$row["ruta_imagen"].'" class="img-fluid" style="width:150px" />
          </div> 
        </div>
      ';
      }
     
      echo $output;
  }

 ?>
