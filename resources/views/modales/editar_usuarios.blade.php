
<div class="modal fade" id="staticBackdrop1{{$user->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Editar Usuarios</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('actualizar_user', $user->id)}}" method="post">
          @csrf
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <label for="">Usuario</label>
                  <input type="text" class="form-control" value="{{$user->name}}" name="name">
                </div>
                <div class="col">
                  <label for="">Nombre</label>
                  <input type="text" class="form-control" value="{{$user->nombre}}" name="nombre">
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <label for="">Cedula</label>
                  <input type="text" class="form-control" value="{{$user->cedula}}" name="cedula">
                </div>
                <div class="col">
                  <label for="">Contraseña</label>
                  <input type="text" class="form-control" value="{{$user->password}}"  name="password">
                </div>
              </div>
                    {{-- <div class="row">
                        <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-xs-12">
                            <label class="pure-material-textfield-outlined" id="">
                                <input type="text" name="name" placeholder =" " value="{{$user->name}}" required>
                                <span><b>Nombre</b></span>
                            </label>
                        </div>
                        <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-xs-12">
                            <label class="pure-material-textfield-outlined" id="">
                                <input type="text" name="email" placeholder =" " value="{{$user->email}}" required>
                                <span><b>Correo</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-xs-12">
                            <label class="pure-material-textfield-outlined" id="">
                                <input type="text" name="password" placeholder =" " value="{{Hash::make($user->password)}}" required>
                                <span><b>Contraseña</b></span>
                            </label>
                        </div>
                    </div> --}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </form>
      </div>
    </div>
  </div>