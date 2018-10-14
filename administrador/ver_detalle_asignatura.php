<?php if(isset($_POST["asignatura_id"]))
  {
      $output='';
      include('../conexion/conexion.php');
      $query="SELECT * FROM asignatura WHERE cod_asignatura='".$_POST["asignatura_id"]."' ";
      $result=mysqli_query($con,$query);

      while ($row = mysqli_fetch_array($result))
       {
        $output.='
      
      <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationCustom01">Código de asignatura</label>
            <input type="text" class="form-control" name="" id="validationCustom01" placeholder="First name" value="'.$row["cod_asignatura"].'" required disabled="true">
           
          </div>
          <div class="col-md-4 mb-3">
            <label for="nombre_edita">Nombre de asignatura</label>
            <input type="text" class="form-control" name="nombre_asignatura" id="nombre_asignatura" placeholder="Last name" value="'.$row["nomb_asignatura"].'" required disabled="true" >
            
          </div>
          <div class="col-md-4 mb-3">
            <label for="apellido_edita">Pre requisito</label>
            <input type="text" class="form-control" name="pre_requisito_asignatura" id="pre_requisito_asignatura" placeholder="Last name" value="'.$row["pre_requisito"].'" required disabled="true">
            
          </div>
        </div>
      <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="grado_edita">Numero de creditos</label>
            <input type="text" class="form-control" name="nro_creditos" id="nro_creditos" placeholder="First name" value="'.$row["nro_creditos"].'" required disabled="true">
            
          </div>
          <div class="col-md-4 mb-3">
            <label for="titulo_edita">Semestre academico</label>
            <input type="text" class="form-control" name="semestre_academico" id="semestre_academico" placeholder="Last name" value="'.$row["semestre_academico"].'" required disabled="true">
            
          </div>
          <div class="col-md-4 mb-3">
            <label for="DNI_edita">Facultad</label>
            <input type="text" class="form-control" name="facultad" id="facultad" placeholder="Last name" value="'.$row["facultad"].'" required disabled="true">
            
          </div>
        </div>
      <div class="form-row">

      <div class="col-md-4 mb-3">
            <label for="tipo_edita">Escuela</label>
            <input type="text" class="form-control" name="escuela" id="escuela" placeholder="First name" value="'.$row["escuela"].'" required disabled="true">
              
          </div>
          <div class="col-md-4 mb-3">
            <label for="tipo_edita">Horas de teoria</label>
            <input type="text" class="form-control" name="horas_teoria" id="horas_teoria" placeholder="First name" value="'.$row["horas_teoria"].'" required disabled="true">
          
              
          </div>
          <div class="col-md-4 mb-3">
            <label for="email_edita">Horas de laboratorio</label>
            <input type="text" class="form-control" name="horas_laboratorio" id="horas_laboratorio" placeholder="Last name" value="'.$row["horas_laboratorio"].'" required disabled="true">
            
          </div>
          
        </div>
        <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="fnacimiento_edita">Horas de practica</label>
            <input type="text" class="form-control" id="horas_practica" name="horas_practica" placeholder="Last name" value="'.$row["horas_practica"].'" required disabled="true">
            
          </div>
        </div>
      ';
      }
     
      echo $output;
  }

 ?>


 
