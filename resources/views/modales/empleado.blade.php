<!-- Modal -->
<div class="modal fade" id="exampleModal{{$e->id_empleado}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Datos del Empleado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="tablita" style="width:100%">
                {{-- <tr>
                    <th colspan="2" style="text-align: center;text-transform: uppercase;">
                        <h4>Datos del Empleado</h4>
                    </th>
                </tr> --}}
                <tr>
                    <th>Fecha de Ingreso</th>
                    <th>{{$e->fecha_ingreso}}</th>
                </tr>
                <tr>
                    <th>Sexo</th>
                    <th>{{$e->sexo}}</th>
                </tr>
                <tr>
                    <th>Cuenta</th>
                    <th>{{$e->cuenta}}</th>
                </tr>
                <tr>
                    <th>N° Cuenta</th>
                    <th>{{$e->n_cuenta}}</th>
                </tr>
                <tr>
                    <th>Cargo sistema</th>
                    <th>{{$e->cargo_sistema}}</th>
                </tr>
                <tr>
                    <th>Profesionalizacion</th>
                    <th>{{$e->profesionalizacion}}</th>
                </tr>
                <tr>
                    <th>Años en la Administración Publica</th>
                    <th>{{$e->anios_administracion}}</th>
                </tr>
                <tr>
                    <th>Departamento</th>
                    <th>{{$e->departamento}}</th>
                </tr>
          </table>
          <table class="tablita" style="margin-top:20px; width:100%">
                <tr>
                    <th colspan="2" style="text-align: center">
                        Direccion
                    </th>
                </tr>
                <tr>
                    <th>Estado</th>
                    <th>{{optional($e->empleado_estado)->estado}}</th>
                </tr>
                <tr>
                    <th>Municipio</th>
                    <th>{{optional($e->empleado_municipio)->municipio}}</th>
                </tr>
                <tr>
                    <th>Parroquia</th>
                    <th>{{optional($e->empleado_parroquia)->parroquia}}</th>
                </tr>
                <tr>
                    <th>Direccion</th>
                    <th>{{$e->direccion}}</th>
                </tr>
          </table>
          <table class="tablita" style="margin-top:20px; width:100%">
                <tr>
                    <th colspan="2" style="text-align: center">Detalles del Uniforme</th>
                </tr>
                <tr>
                    <th>Talla Camisa</th>
                    <th>{{$e->talla_camisa}}</th>
                </tr>
                <tr>
                    <th>Talla Pantalon</th>
                    <th>{{$e->talla_pantalon}}</th>
                </tr>
                <tr>
                    <th>Talla Zapato</th>
                    <th>{{$e->talla_zapato}}</th>
                </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>