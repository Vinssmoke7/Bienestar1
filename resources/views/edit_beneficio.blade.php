<x-app-layout >
    @section('estilos')
         <link rel="stylesheet" href="{{asset('bootstrap/css/boostrap.min.css')}}">
         {{-- <link rel="stylesheet" href="{{asset('css/input.css')}}"> --}}
         {{-- <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}"> --}}
    @endsection
    <style>
        label{
            font-size: 15px;
        }
    </style>
        <div class="container" style="margin-top:30px">
            <div class="row justify-content-center">
                <div class="col-fluid">
                    <div class="card">
                        <div class="card-header" style="background: #1B2B72;color:white;padding:15px; ">
                            Formulario Beneficio
                        </div>
                        <div class="container">
                        <div class="card-body">
                            @if (session('beneficio'))
                                <div style="display:flex; justify-content:center; font-size:40px" class="alert alert-success" role="alert">
                                    {{ session('beneficio') }}
                                </div>
                            @endif
    
                            <form action="{{route('editar_empleado', $emp->id_empleado)}}" method="post" id="form_bene">
                                @csrf 
                                <div style="padding:15px">
                                    <h5><b>Datos del trabajador</b></h5>
                                </div>
                            <div class="row">
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                        <label for="">Cedula</label>
                                        <input type="text" name="cedula" class="form-control" value="{{$emp->cedula}}" placeholder ="" required>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                        <label for="">Apellidos y Nombres</label>
                                        <input type="text" class="form-control" name="apellido_nombre" value="{{$emp->apellido_nombre}}" required>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                        <label for="">Fecha de Nacimiento</label>
                                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{$emp->fecha_nacimiento}}" class="form-control" onchange="edad_e()" placeholder ="Fecha de Nacimiento" required>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                        <label for="">Edad</label>
                                        <input type="text" name="edad" id="edad" class="form-control" value="{{$emp->edad}}" required>
                                </div>
                            </div>
                            <div class="row" style="margin-top:15px">
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                        <label for="">Fecha de Ingreso</label>
                                        <input type="date" name="fecha_ingreso" value="{{$emp->fecha_ingreso}}" class="form-control" required>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Sexo</label>
                                        <select name="sexo" class="form-select" required>
                                            <option value="{{$emp->sexo}}">SELECCIONE</option>
                                            <option value="HOMBRE">HOMBRE</option>
                                            <option value="MUJER">MUJER</option>
                                            <option value="OTROS">OTROS</option>
                                        </select>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                        <label for="">Cuenta</label>
                                        <input type="text" name="cuenta" value="{{$emp->cuenta}}" class="form-control" required>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                        <label for="">N° Cuenta</label>
                                        <input type="text" name="n_cuenta" value="{{$emp->n_cuenta}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row" style="margin-top:15px">
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                        <label for="">Cargo en el Sistema</label>
                                        <input type="text" value="{{$emp->cargo_sistema}}" name="cargo_sistema" class="form-control" required>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                        <label for="">Cargo</label>
                                        <input type="text" value="{{$emp->cargo}}" name="cargo" class="form-control" required>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                        <label for="">Profesionalización</label>
                                        <input type="text" value="{{$emp->profesionalizacion}}" name="profesionalizacion" class="form-control" required>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                        <label for="">Años en la Administración Pública</label>
                                        <input type="text" value="{{$emp->anios_administracion}}" name="anios_administracion" class="form-control" required>
                                </div>
                            </div>
                            <div div style="padding:15px">
                                <h5><b>Direccion</b></h5>    
                            </div>                                   
                            <div class="row">
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                        <label for="">Departamento</label>
                                        <input type="text" value="{{$emp->departamento}}" name="departamento" class="form-control" required>
                                    </label>
                                </div>
                               
                                {{-- <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label class="pure-material-textfield-outlined" id="">
                                        <input type="text" name="ubicacion_fisica" placeholder =" " required>
                                        <span><b>Ubicación Física</b></span>
                                    </label>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label class="pure-material-textfield-outlined" id="">
                                            <input type="text" name="ubicacion_grafica" placeholder =" " required>
                                            <span><b>Ubicación Geográfica</b></span>
                                    </label>
                                </div> --}}
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                            <label for="">Estado</label>
                                            <select name="estado" id="estado" class="form-select">
                                                <option value="{{$emp->estado}}"></option>
                                                @foreach ($estado as $e)
                                                    <option value="{{$e->id_estado}}">{{$e->estado}}</option>
                                                @endforeach
                                            </select>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                            <label for="">Municipio</label>
                                            <select name="municipio" id="municipio" class="form-select">
                                                <option value="{{$emp->municipio}}"></option>
                                                {{-- @foreach ($muni as $m)
                                                    <option value="{{$m->id_municipio}}">{{$m->municipio}}</option>
                                                @endforeach --}}
                                            </select>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                            <label for="">Parroquia</label>
                                            <select name="parroquia" id="parroquia" class="form-select">
                                                <option value="{{$emp->parroquia}}"></option>
                                                {{-- @foreach ($parro as $p)
                                                    <option value="{{$p->id_parroquia}}">{{$p->parroquia}}</option>
                                                @endforeach --}}
                                            </select>
                                </div>
                            </div>
                            <div class="row" style="margin-top:10px">
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                        <label for="">Direccion</label>
                                        <input type="text" value="{{$emp->direccion}}" name="direccion" placeholder =" " class="form-control" required>
                                </div>    
                            </div>
    
                             <div style="padding:15px">
                                <h5><b>Detalle del Uniforme</b></h5>
                             </div>
                            <div class="row">
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                        <label for="">Talla de Camisas</label>
                                        {{-- <input type="text" value="{{$emp->talla_camisa}}" name="talla_camisa" class="form-control" required> --}}
                                        <select name="talla_camisa" id="" class="form-select">
                                            <option value="{{$emp->talla_camisa}}">SELECCIONE</option>
                                            <option value="XS">XS</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                            <option value="XXL">XXL</option>
                                        </select>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                        <label for="">Talla de Pantalon</label>
                                        <input type="text" value="{{$emp->talla_pantalon}}" name="talla_pantalon" class="form-control" required>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                        <label for="">Talla de Zapato</label>
                                        <input type="text" value="{{$emp->talla_zapato}}" name="talla_zapato" class="form-control" required>
                                </div>
                            </div>     
                                    <div style="padding:15px">
                                        <h5><b>Carga Familiar (Padres e Hijos)</b></h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                            <label for="">N° Familiares</label>
                                            <input type="text" value="{{$emp->n_familiares}}" name="n_familiares" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="" style="display: flex; justify-content:center; padding:30px">
                                        <button class="btn btn-success" id="botonenviar" type="submit">Enviar</button>
                                    </div>
                                </form>
                           </div>
    
                           {{-- CODIGO DE PRUEBA CON AJAX --}}
                       
                            {{-- <form>
                                <input type="text" class="form-control" placeholder="Nombre" name="namexd" id="nombrexd">
                                <input type="text" class="form-control" placeholder="Apellido" name="apellidoxd" id="apellidoxd">
                                <button class="btn btn-success" id="qlqq">Enviar</button>
                            </form>
                            <div style="margin-top:30px">
                                <form>
                                    <label for="">Numero de registro</label>
                                    <select name="" id="peti">
                                        @foreach ($p as $p)
                                            <option value="{{$p->id}}">{{$p->id}}</option>
                                        @endforeach
                                    </select>
                                    <button class="btn btn-primary" id="qlqq2">Send</button>
                                </form>
                            </div>
                            <div id="caja">
    
                            </div> --}}
    
                         </div>
                    </div>
                </div>
           </div>
        </div>
            <script src="{{asset('js/jquery.js')}}"></script>
            {{-- <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}
    <script>
        $(document).ready(function(){
        $("#estado").change(function(){
          var estado = $(this).val();
            $.get('/municipioSearch2/'+estado, function(data){
            //esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
            var municipio_select = '<option value="">Seleccione municipio</option>'
            var p_select = '<option value="">Seleccione parroquia</option>'
                for (var i=0; i<data.length;i++)
                  municipio_select+='<option value="'+data[i].id_municipio+'">'+data[i].municipio+'</option>';
                $("#municipio").html(municipio_select);
                $("#parroquia").html(p_select);
                
          });
        });
        $("#municipio").change(function(){
          var municipio = $(this).val();
            $.get('/parroquiaSearch2/'+municipio, function(data){
            var parroquia_select = '<option value="">Seleccione parroquia</option>'
                for (var i=0; i<data.length;i++)
                  parroquia_select+='<option value="'+data[i].id_parroquia+'">'+data[i].parroquia+'</option>';
              
                $("#parroquia").html(parroquia_select);
                
             });
        });
    });
    

    $('.input-number').on('input', function () { 
        this.value = this.value.replace(/[^0-9]/g,'');
    });
    
    $('.input-char').on('input', function () { 
        this.value = this.value.replace(/[^a-zA-Z ]/g,'');
    });
    
    
    
    function edad_e(){
        let fechaNacimiento = document.getElementById("fecha_nacimiento").value;
        let fechaActual = new Date();
        let anoActual = parseInt(fechaActual.getFullYear());
        let mesActual = parseInt(fechaActual.getMonth()) + 1;
        let diaActual = parseInt(fechaActual.getDate());
        //2022-08-02
        let anoNacimiento = parseInt(String(fechaNacimiento).substring(0, 4));
        let mesNacimiento = parseInt(String(fechaNacimiento).substring(5, 7));
        let diaNacimiento = parseInt(String(fechaNacimiento).substring(8, 10));
        let edad = anoActual - anoNacimiento;
        if(mesActual < mesNacimiento){
            edad--;
        }else if(mesActual == mesNacimiento){
            if(diaActual < diaNacimiento){
                edad--;
            }
        }
        // console.log(edad);
        $("#edad").val(edad);
        document.getElementById("edad").setAttribute('readonly', '');
        return edad;
    };
    
    // function darleConTodo(){
    
    //    let data={
    //     //  "_token": $("meta[name='csrf-token']").attr("content"),
    //       'nombrexd': document.getElementById('nombrexd').value,
    //       'apellidoxd': document.getElementById('apellidoxd').value
    //    }
    //    fetch('probando', {
    //       headers:{
    //          'Content-Type': 'application/json',
    //         'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    //       },
    //       method:'post',
    //       body: JSON.stringify(data)
    //   })
    //   .then(response => response.json())
    //   .then(function(result){
    //       alert(result.message);
    //   })
    //   .catch(function (error) {
    //     console.log(error);
    //   });
    // }
    
    // $(document).ready(function(){
    
    // });
    
    
    
    
    
    // CODIGO DE PRUEBA CON AJAX
    
    const qlqq = document.getElementById("qlqq");
    qlqq.addEventListener('click', function(e){
        let nombrexd = document.getElementById('nombrexd').value;
        let apellidoxd = document.getElementById('apellidoxd').value;
        $.ajax({
            type : 'post',
            url : 'probando',
            data : {
                "_token": $("meta[name='csrf-token']").attr("content"),
                'nombrexd': nombrexd,
                'apellidoxd': apellidoxd,
            },
            success:function(data){						                                                              
               e.preventDefault();
               setTimeout((e) => {
                $('#nombrexd').val('');
                $('#apellidoxd').val('');
               }, 1000);	
            },
            error: function(jqXHR, textStatus, errorThrown) { 
                // console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
         e.preventDefault();
    });
    
    
    const qlqq2 = document.getElementById("qlqq2");
    qlqq2.addEventListener('click', function(e){
        let id = document.getElementById("peti").value;
        parseInt(id);
        $.ajax({
            type : 'get',
            url : 'peticion/'+id,
            data: {
                "_token": $("meta[name='csrf-token']").attr("content"),
                // 'id' : id
            },
            success:function(data){
                // console.log(data.nombrexd, data.apellidoxd);
                let cajita = `<div class="card">
                                <div class="card-body">${data.nombrexd} - ${data.apellidoxd}<div>  
                            </div>`;
                $('#caja').html(cajita);
                e.preventDefault();
            }
        });
        e.preventDefault();
    });
    
    // document.addEventListener('DOMContentLoaded', function() {
    //     var elems = document.querySelectorAll('select');
    //     var instances = M.FormSelect.init(elems, options);
    //   });
    
    //   // Or with jQuery
    
    //   $(document).ready(function(){
    //     $('select').formSelect();
    //   });
    
    </script>
    </x-app-layout>