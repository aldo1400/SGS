<div class="modal fade" id="editar_competencia_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar competencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

                  <form id="editar_competencia">
              <input type="text" name="competencia_id_editar" id="competencia_id_editar">
              <!-- <input type="hidden" name="asignatura" id="asignatura"> -->
              <div class="form-group">
              <select class="form-control form-control" name="tipo" id="tipo">
  <option value="general">Competencia general</option>
  <option value="especifica">Competencia especifica</option>
</select>
              </div>

              <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripción de la competencia</label>
    <textarea name="descripcion" class="form-control" id="descripcion" rows="3"></textarea>
  </div>
              <input type="submit" class="btn btn-primary" value="Insertar" />
            </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>