<div class="modal fade" id="exampleModale{{$e->id_empleado}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Carga Familiar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="tablita">
           
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Parentesco</th>
                        <th>Apellido y Nombre</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Edad</th>
                        <th>Nivel Educativo</th>
                        <th>Sexo</th>
                        <th>Talla Pantalon</th>
                        <th>Talla Mono</th>
                        <th>Talla Camisa</th>
                        <th>Talla Zapato</th>
                        <th>Observaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($familiar as $f)
                        @if ($e->id_empleado == $f->id_emp)
                            <tr>
                                <td>{{$f->id_familiar}}</td>
                                <td>{{$f->parentesco}}</td>
                                <td>{{$f->nombre_apellido}}</td>
                                <td>{{$f->fecha_nacimiento}}</td>
                                <td>{{$f->edad}}</td>
                                <td>{{$f->nivel_educativo}}</td>
                                <td>{{$f->sexo_f}}</td>
                                <td>{{$f->talla_pantalon}}</td>
                                <td>{{$f->talla_mono}}</td>
                                <td>{{$f->talla_camisa}}</td>
                                <td>{{$f->talla_zapato}}</td>
                                <td>{{$f->observaciones_f}}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
                
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>