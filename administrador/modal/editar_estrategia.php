<div class="modal fade" id="editar_estrategia_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar estrategia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

                  <form id="editar_estrategia">
              <input type="hidden" name="asignatura" id="asignatura">
              <input type="hidden" name="codigo_estrategia" id="codigo_estrategia">
              <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripción de la estrategia</label>
    <input  type="text" name="estrategia_contenido" class="form-control" id="estrategia_contenido">
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