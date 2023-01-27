<div style="" class="modal fade" id="staticBackdrop1{{$bene->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"  >
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="staticBackdropLabel">Editar Registro</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('act_bene', $bene->id)}}" method="POST">
              @csrf
        <div class="modal-body" style="">
          
                <div style="padding:20px">
                  <h4>Datos del Trabajador</h4>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="cedula" placeholder =" " value="{{$bene->cedula}}" required>
                          <span><b>Cédula</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="apellido_nombre" placeholder =" " value="{{$bene->apellido_nombre}}" required>
                          <span><b>Apellidos y Nombres</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="date" name="fecha_nacimiento" placeholder =" " value="{{$bene->fecha_nacimiento}}" required>
                          <span><b>Fecha de Nacimiento</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="edad" placeholder =" " value="{{$bene->edad}}" required>
                          <span><b>Edad</b></span>
                      </label>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="date" name="fecha_ingreso" placeholder =" " value="{{$bene->fecha_ingreso}}" required>
                          <span><b>Fecha de Ingreso</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="sexo" placeholder =" " value="{{$bene->sexo}}" required>
                          <span><b>Sexo</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="cuenta" placeholder =" " value="{{$bene->cuenta}}" required>
                          <span><b>Cuenta</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="n_cuenta" placeholder =" " value="{{$bene->n_cuenta}}" required>
                          <span><b>N° Cuenta</b></span>
                      </label>

                  </div>
              </div>                                   
              <div class="row">
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="departamento" placeholder =" " value="{{$bene->departamento}}" required>
                          <span><b>Departamento</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="direccion" placeholder =" " value="{{$bene->direccion}}" required>
                          <span><b>Direccion</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="ubicacion_fisica" placeholder =" " value="{{$bene->ubicacion_fisica}}" required>
                          <span><b>Ubicación Física</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                              <input type="text" name="ubicacion_grafica" placeholder =" " value="{{$bene->ubicacion_grafica}}" required>
                              <span><b>Ubicación Geográfica</b></span>
                      </label>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                      <input type="text" name="cargo_de_sistema" placeholder =" " value="{{$bene->cargo_de_sistema}}" required>
                          <span><b>Cargo en el Sistema</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="cargo" placeholder =" " value="{{$bene->cargo}}" required>
                          <span><b>Cargo</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="profesionalizacion" placeholder =" " value="{{$bene->profesionalizacion}}" required>
                          <span><b>Profesionalización</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="años_administracion" placeholder =" " value="{{$bene->años_administracion}}" required>
                          <span><b>Años en la Administración Pública</b></span>
                      </label>
                  </div>
              </div>
              <div class="row">
                  <!-- <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="años_administracion_publica" placeholder =" " required>
                          <span><b>Años en la Administración Pública</b></span>
                      </label>
                  </div> -->
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="parentesco" placeholder =" " value="{{$bene->parentesco}}" required>
                          <span><b>Parentesco</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="n_hijos" placeholder =" " value="{{$bene->n_hijos}}" required>
                          <span><b>N° de hijos</b></span>
                      </label>
                  </div>
              </div>   
      <!-- ----------------------------------------------------------------------------------------------------------------------------   -->
              <div style="padding:20px; margin-top:15px">
                  <h4>Detalle del Uniforme</h4>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="talla_camisa" placeholder =" " value="{{$bene->talla_camisa}}" required>
                          <span><b>Talla de Camisas</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="talla_pantalon" placeholder =" " value="{{$bene->talla_pantalon}}" required>
                          <span><b>Talla de Pantalon</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="talla_zapato" placeholder =" " value="{{$bene->talla_zapato}}" required>
                          <span><b>Talla de Zapato</b></span>
                      </label>
                  </div>
              </div>
      <!-- ----------------------------------------------------------------------------------------------------------------------------   -->
              <div style="padding:20px; margin-top:15px">
                  <h4>Datos del Beneficiario</h4>
              </div>               
              <div class="row">
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="nombre_apellido" placeholder =" " value="{{$bene->nombre_apellido}}" required>
                          <span><b>Nombre y apellido</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="date" name="fecha_de_nacimiento" placeholder =" " value="{{$bene->fecha_de_nacimiento}}" required>
                          <span><b>Fecha de nacimiento</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="edad_hijo" placeholder =" " value="{{$bene->edad_hijo}}" required>
                          <span><b>Edad</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="nivel_educativo" placeholder =" " value="{{$bene->nivel_educativo}}" required>
                          <span><b>Nivel educativo</b></span>
                      </label>
                  </div>
              </div>        
              <div class="row">
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="sexo_benef" placeholder =" " value="{{$bene->sexo_benef}}" required>
                          <span><b>Sexo beneficiario</b></span>
                      </label>
                  </div>
            </div>

              <div style="padding:20px; margin-top:15px">
                  <h4>Detalle del Uniforme</h4>
              </div>                                    
            <div class="row">
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="talla_pantalon_esco" placeholder =" " value="{{$bene->talla_pantalon_esco}}" required>
                          <span><b>Talla de pantalones</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="talla_mono_esco" placeholder =" " value="{{$bene->talla_mono_esco}}" required>
                          <span><b>Talla de mono </b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                      <select name="talla_camisa_esco" value="" required>
                          <option value="">Seleccione</option>
                          <option value="ROJO">ROJO</option>
                          <option value="BLANCO">BLANCO</option>
                          <option value="AZUL">AZUL</option>
                          <option value="BEIGE">BEIGE</option>
                      </select>
                          <span><b>Talla Camisa y/o Chemises</b></span>
                      </label>
                  </div>
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="talla_zapato_esco" placeholder =" " value="{{$bene->talla_zapato_esco}}" required>
                          <span><b>Talla zapato</b></span>
                      </label>
                  </div>
            </div>
              <div class="row">
                  <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="pure-material-textfield-outlined" id="">
                          <input type="text" name="observaciones" placeholder =" " value="{{$bene->observaciones}}" required>
                          <span><b>Observaciones</b></span>
                      </label>
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