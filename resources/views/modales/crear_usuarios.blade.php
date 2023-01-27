<!-- Modal -->
<style>
    label{
        color: black;
    }
    h5{
        color: black;
    }
</style>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('crear_usuario')}}" method="post">
            @csrf
            <div class="modal-body">
            
                <div class="row">
                    <div class="col">
                        <label for="" >Usuario</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="" >Cedula</label>
                        <input type="text" class="form-control" name="cedula">
                    </div>
                    <div class="col">
                        <label for="">Contraseña</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
            
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </form>
      </div>
    </div>
  </div>