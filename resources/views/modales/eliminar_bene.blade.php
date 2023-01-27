<!-- Modal -->
<div class="modal fade" id="exampleModall{{$e->id_empleado}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a href="eliminar_r/{{$e->id_empleado}}" class="btn btn-danger">Eliminar</a>
      </div>
    </div>
  </div>
</div>