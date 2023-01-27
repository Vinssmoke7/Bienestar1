<x-app-layout>
<div class="container" style="margin-top:30px">
        <div class="row justify-content-center">
            <div class="col-fluid">
                <div class="card">
                    <div class="card-header" style="background: #1B2B72;color:white;padding:15px; ">
                        Listado de Beneficio
                    </div>
                    <div class="card-body">
                    <div class="row justify-content-center" >
                        @if (session('actualizar'))
                        <div class="alert alert-success" style="display:flex; justify-content:center; font-size:30px" role="alert">
                            {{ session('actualizar') }}
                        </div>
                        @endif
                    </div>
                    <div class="row justify-content-center">
                        @if (session('eliminar'))
                        <div class="alert alert-danger" style="display:flex; justify-content:center; font-size:30px" role="alert">
                            {{ session('eliminar') }}
                        </div>
                        @endif
                    </div>

                       <div class="container">
                         <form action="{{route('total_pdf')}}" method="get">
                            <button class="btn btn-danger" style="display: flex; margin-left:auto; margin-right:auto">
                                <i class="fa-solid fa-file-pdf"></i>
                             </button>
                         </form>
                            <table id="example" class="display" style="width:100%">
                               
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Cédula</th>
                                        <th>Apellidos y Nombres</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>Edad</th>
                                        <th>Fecha de Ingreso</th>
                                        <th>Sexo</th>
                                        <th>Cuenta</th>
                                        <th>N° Cuenta</th>
                                        <th>Departamento</th>
                                        <th>Direccion</th>
                                        <th>Ubicación Física</th>
                                        <th>Ubicación Geográfica</th>
                                        <th>Cargo en el Sistema</th>
                                         <th>Cargo</th>
                                        <th>Profesionalización</th>
                                       <th>Años en la Administración Pública</th>
                                        <th>Parentesco</th>
                                        <th>N° de hijos</th>
                                        <th>Talla de camisas</th>
                                        <th>Talla de pantalon</th>
                                        <th>Talla de Zapato</th>
                                        <th>Nombre y apellido</th>
                                        <th>fecha de nacimiento</th>
                                        <th>Edad</th>
                                        <th>Nivel educativo</th>
                                        <th>Sexo beneficiario</th>
                                        <th>Talla de pantalones</th>
                                        <th>Talla de mono</th>
                                        <th>Talla Camisa y/o Chemises</th>
                                        <th>Talla zapato</th>
                                        <th>Observaciones</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($bene as $bene)
                                    <tr> 
                                        <td>{{$bene->id}}</td>
                                        <td>{{$bene->cedula}}</td>
                                        <td>{{$bene->apellido_nombre}}</td>                                                   
                                        <td>{{$bene->fecha_nacimiento}}</td>                                                   
                                        <td>{{$bene->edad}}</td>                                                   
                                        <td>{{$bene->fecha_ingreso}}</td>                                                   
                                        <td>{{$bene->sexo}}</td>                                                   
                                        <td>{{$bene->cuenta}}</td>                                                   
                                        <td>{{$bene->n_cuenta}}</td>                                                   
                                        <td>{{$bene->departamento}}</td>                                                   
                                        <td>{{$bene->direccion}}</td>                                                   
                                        <td>{{$bene->ubicacion_fisica}}</td>                                                   
                                        <td>{{$bene->ubicacion_grafica}}</td>                                                   
                                        <td>{{$bene->cargo_de_sistema}}</td>                                                   
                                        <td>{{$bene->cargo}}</td>                                                   
                                        <td>{{$bene->profesionalizacion}}</td>                                                   
                                        <td>{{$bene->años_administracion}}</td>                                                                                                   
                                        <td>{{$bene->parentesco}}</td>                                                   
                                        <td>{{$bene->n_hijos}}</td>                                                   
                                        <td>{{$bene->talla_camisa}}</td>                                                   
                                        <td>{{$bene->talla_pantalon}}</td>                                                   
                                        <td>{{$bene->talla_zapato}}</td>                                                   
                                        <td>{{$bene->nombre_apellido}}</td>                                                   
                                        <td>{{$bene->fecha_de_nacimiento}}</td>                                                   
                                        <td>{{$bene->edad_hijo}}</td>                                                   
                                        <td>{{$bene->nivel_educativo}}</td>                                                   
                                        <td>{{$bene->sexo_benef}}</td>                                                   
                                        <td>{{$bene->talla_pantalon_esco}}</td>                                                   
                                        <td>{{$bene->talla_mono_esco}}</td>                                                   
                                        <td>{{$bene->talla_camisa_esco}}</td>                                                   
                                        <td>{{$bene->talla_zapato_esco}}</td>                                                   
                                        <td>{{$bene->observaciones}}</td>

                                        <td style="display: flex">
                                            <div style="padding: 5px">
                                                <form action="{{route('bene.pdf', $bene->id)}}" method="get">
                                                    <button class="btn btn-danger" id="{{$bene->id}}" style="">
                                                        <i class="fa-solid fa-file-pdf"></i>
                                                    </button>
                                                </form>
                                            </div>

                                           <div style="padding: 5px">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop1{{$bene->id}}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                           </div>
                                            @include('modales.editar_bene')

                                            @if (Auth::user()->admin == true)
                                                <div style="padding: 5px">
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$bene->id}}">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </div>
                                                @include('modales.eliminar_bene')
                                            @endif  

                                           
                                        </td>
                                    </tr>
                                @endforeach   
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Cédula</th>
                                        <th>Apellidos y Nombres</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>Edad</th>
                                        <th>Fecha de Ingreso</th>
                                        <th>Sexo</th>
                                        <th>Cuenta</th>
                                        <th>N° Cuenta</th>
                                        <th>Departamento</th>
                                        <th>Direccion</th>
                                        <th>Ubicación Física</th>
                                        <th>Ubicación Geográfica</th>
                                        <th>Cargo en el Sistema</th>
                                         <th>Cargo</th>
                                        <th>Profesionalización</th>
                                       <th>Años en la Administración Pública</th>
                                        <th>Parentesco</th>
                                        <th>N° de hijos</th>
                                        <th>talla de camisas</th>
                                        <th>talla de pantalon</th>
                                        <th>talla de Zapato</th>
                                        <th>Nombre y apellido</th>
                                        <th>fecha de nacimiento</th>
                                        <th>edad</th>
                                        <th>nivel educativo</th>
                                        <th>sexo beneficiario</th>
                                        <th>talla de pantalones</th>
                                        <th>talla de mono</th>
                                        <th>Talla Camisa y/o Chemises</th>
                                        <th>talla zapato</th>
                                        <th>Observaciones</th>
                                    </tr>
                                </tfoot>
                            </table> 
                       </div>
                     </div>
                </div>
            </div>
       </div>
    </div>

   <style>
        div.dataTables_wrapper {
            width: 1200px;
            margin: 0 auto;
        }
        /* thead input {
            width: 100%;
        } */

        div.ColVis {
            float: left;
        }
        .dt-button-collection {
        height:400px !important;
        overflow-y:scroll !important; 
        }
    </style>
    <script src="{{asset('js/jquery.js')}}"></script> 
   
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        },

        "scrollX": true,

        // 
       

        "language": {
			"buttons": {
			"colvis": "Columnas visibles",
			},
        },
        dom: 'Bfrtip',
        buttons: [
            'colvis',
            {
                extend: 'excelHtml5',
                title: 'Listado de Beneficio',
                exportOptions: {
                    columns: [':visible' ],
                }
            }
        ]      
    } );
} );   
</script>    

</x-app-layout>
