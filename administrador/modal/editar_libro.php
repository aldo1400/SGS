<div class="modal fade bd-example-modal-lg" id="editar_libro_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar bibliografia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

                  <form id="editar_libro">
              <input type="hidden" name="asignatura" id="asignatura" />
              <input type="hidden" name="libro_id" id="libro_id" />

        <div class="form-row">
    <div class="col-md-6 mb-3">
    <label for="exampleFormControlTextarea1">Tipo de bibliografia</label>
              <select class="form-control form-control" name="tipo" id="tipo">
            <option value="Básica">Básica</option>
            <option value="Complementaria">Complementaria</option>
            <option value="Webgrafia">Webgrafia</option>
    </select>
    </div>

    <div class="col-md-6 mb-3">
    <label for="exampleFormControlTextarea1">Ubicación</label>
    <input class="form-control" id="ubicacion" name="ubicacion"/>
    </div>

  </div>


<div class="form-row">
    <div class="col-md-6 mb-3">
    <label for="exampleFormControlTextarea1">Autor</label>
    <input class="form-control" id="autor" name="autor" />
    </div>

    <div class="col-md-6 mb-3">
    <label for="exampleFormControlTextarea1">Titulo</label>
    <input class="form-control" id="titulo" name="titulo" />
    </div>
    
  </div>

<div class="form-row">
    <div class="col-md-6 mb-3">
    <label for="exampleFormControlTextarea1">Año</label>
    <input class="form-control" id="year" name="year" />
    </div>

    <div class="col-md-6 mb-3">
    <label for="exampleFormControlTextarea1">Link</label>
    <input class="form-control" id="link" name="link" />
    </div>
    
  </div>

              <input type="submit" class="btn btn-primary" value="Guardar" />
            </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>