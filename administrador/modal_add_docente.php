<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="add_docente_Modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editadsffsdfr datos personales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form enctype="multipart/form-data" method="POST" id="add_docente">
	  <input type="hidden" id="id_docente" name="id_docente" />
      <div class="modal-body">

<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Código docente</label>
      <input type="text" class="form-control" name="cod_docente" id="cod_docente" placeholder="First name"  required disabled="true">
      
    </div>
    <div class="col-md-4 mb-3">
      <label for="nombre_edita">Nombres</label>
      <input type="text" class="form-control" name="nombre_edita" id="nombre_edita" placeholder="Last name"  required >
      
    </div>
    <div class="col-md-4 mb-3">
      <label for="apellido_edita">Apellidos</label>
      <input type="text" class="form-control" name="apellido_edita" id="apellido_edita" placeholder="Last name"  required >
      
    </div>
  </div>
<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="grado_edita">Grado academico</label>
      <input type="text" class="form-control" name="grado_edita" id="grado_edita" placeholder="First name"  required>
      
    </div>
    <div class="col-md-4 mb-3">
      <label for="titulo_edita">Titulo</label>
      <input type="text" class="form-control" name="titulo_edita" id="titulo_edita" placeholder="Last name"  required>
      
    </div>
    <div class="col-md-4 mb-3">
      <label for="DNI_edita">Dni</label>
      <input type="text" class="form-control" name="DNI_edita" id="DNI_edita" placeholder="Last name"  required>
      
    </div>
	</div>
<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="tipo_edita">Tipo</label>
      
	  <select name="tipo_edita" id="tipo_edita" class="form-control" required />
					<option value="docente">docente</option>
					<option value="admin">admin</option>
		</select>
				
    </div>
    <div class="col-md-4 mb-3">
      <label for="email_edita">Email</label>
      <input type="text" class="form-control" name="email_edita" id="email_edita" placeholder="Last name"  required>
      
    </div>
    <div class="col-md-4 mb-3">
      <label for="fnacimiento_edita">Fecha de nacimiento</label>
      <input type="text" class="form-control" id="fnacimiento_edita" name="fnacimiento_edita" placeholder="Last name" required>
      
    </div>
  </div>


  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="telefono_edita">Telefono</label>
      <input type="text" class="form-control" id="telefono_edita" name="telefono_edita" placeholder="First name"  required>
      
    </div>
    <div class="col-md-8 mb-3">
      <label for="foto_edita">Foto de perfil</label>
      <input type="file" class="form-control" id="foto_edita" name="foto_edita" placeholder="Last name" value="" />
     
    </div> 
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="guardar datos">
      </div>
	  </form>
    </div>
  </div>
</div>

