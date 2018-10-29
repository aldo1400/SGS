
<form class="form-inline" id="nueva_estrategia">
    <p>Agregar estrategia</p>
    <input type="hidden" value="<?php echo $_GET['id_curso']; ?>" id="codigo_final_asignatura" name="codigo_final_asignatura">
  <div class="form-group mb-2">
    <!-- <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com"> -->
  </div>
  <div class="form-group mx-sm-3 mb-2 col-6">
    <label for="inputPassword2" class="sr-only">Estrategia</label>
    <input type="text" class="form-control col-12" id="estrategia" name="estrategia" placeholder="Nueva estrategia"  autofocus>
  </div>
  <input type="submit" class="btn btn-primary mb-2" value="Añadir">
</form>