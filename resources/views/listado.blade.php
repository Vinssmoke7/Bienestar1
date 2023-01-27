<x-app-layout>
    <style>
        .tablita tr th{
            border: solid black 1px;
        }
        .tablita tr td{
            border: solid black 1px;
        }
        th{
            text-align: center;
        }
        td{
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="container-fluid" >
        @if (session('msj'))
            <div style="display:flex; justify-content:center">
                <div class="alert alert-success" style="margin-top:20px; text-align: center; width:60%">
                    <b> {{ session('msj') }}</b>
                </div>
            </div>
        @endif
        @if (session('elm'))
            <div style="display:flex; justify-content:center">
                <div class="alert alert-danger" style="margin-top:20px; text-align: center; width:60%">
                    <b> {{ session('elm') }}</b>
                </div>
            </div>
        @endif
        <div class="card" style="margin-top:30px">
            <div class="card-header" style="background-color: #D7DBDD">
                <div class="row">
                    <div class="col-lg-10 col-xl-10 col-md-6 col-sm-6 col-xs-12" style="display:flex ;justify-content: center">
                       
                            <h3>Datos</h3>
                        
                    </div>
                    <div class="col-lg-2 col-xl-2 col-md-6 col-sm-6 col-xs-12" >
                        <div class="dropdown" >
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Reportes
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li style="background-color: #D6DBDF"> <form action="{{route('pdf_total')}}" method="get"><button><pre>  PDF Total</pre></button></form> </li>
                              <li style="background-color: #F8F9F9"><form action="{{route('excel_empleado')}}" method="get"><button><pre>  Excel Empleado</pre></button></form></li>
                              <li style="background-color: #D6DBDF"><form action="{{route('excel_familiar')}}" method="get"><button><pre>  Excel Carga Familiar  </pre></button></form></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="example" class="table table-condensed table-striped table-bordered" style="width: 100%;">
                    <thead> 
                        <tr>
                             <th>N°</th>
                             <th>Cedula</th>
                             <th>Apellido y Nombre</th>
                             <th>Fecha de Nacimiento</th>
                             <th>Edad</th>
                             <th>Cargo</th>
                             <th>N° Familiares</th>
                             <th>Datos del Empleado</th>
                             <th>Carga Familiar</th>
                             <th>PDF</th>
                             <th>Editar</th>
                             @if (Auth::user()->admin == true)
                                <th>Eliminar</th>
                             @endif
                             {{-- <th>Probar</th> --}}
                         </tr>
                     </thead>
                     <tbody>
                        @foreach ($empleado as $e)
                            <tr class="">
                                <td>{{$e->id_empleado}}</td>
                                <td>{{$e->cedula}}</td>
                                <td>{{$e->apellido_nombre}}</td>
                                <td>{{$e->fecha_nacimiento}}</td>
                                <td>{{$e->edad}}</td>
                                <td>{{$e->cargo}}</td>
                                <td>{{$e->n_familiares}}</td>

                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{$e->id_empleado}}">
                                        <i class="fa-solid fa-user"></i>
                                    </button>
                                    @include('modales.empleado')
                                </td>
                                <td>
                                  @if ($e->n_familiares != 0 || $e->n_familiares != null)
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModale{{$e->id_empleado}}">
                                        <i class="fa-solid fa-users"></i>
                                    </button>
                                    @include('modales.carga_familiar')
                                  @else
                                    No tiene
                                  @endif
                                </td>
                                <td>
                                    <form action="{{route('pdf_detallado', $e->id_empleado)}}" method="get"><button class="btn btn-danger"><i class="fa-solid fa-file-pdf"></i></button></form>
                                </td>
                                <td>
                                    <a href="vista_editar/{{$e->id_empleado}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                               @if (Auth::user()->admin == true)
                               <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModall{{$e->id_empleado}}">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                    @include('modales.eliminar_bene')
                                    </td>
                               @endif
                            </tr>
                        @endforeach
                     </tbody>
                 </table>
            </div>
        </div>
    </div>
<script src="{{asset('js/jquery.js')}}"></script>
<script>
     $(document).ready(function() {
    $('#example').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select class="form-select"><option value=""></option></select>')
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
        "aaSorting":[],
        "lengthMenu": [[10, 20], [10, 20]],
        "language": {
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "Ningún dato encontrado.",
        "info": "Página _PAGE_ de _PAGES_",
        "infoEmpty": "No hay registros.",
        "search": "Buscar:",
        "previousPage": "Anterior",
        "next": "Siguiente",
        "infoFiltered": "(filtrado de _MAX_ registros.)",
        "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
             },
        },
        // dom: 'Bfrtip',
        // buttons: [
        //     'colvis',
        //     {
        //         extend: 'excelHtml5',
        //         title: 'Listado de Beneficio',
        //         exportOptions: {
        //             columns: [':visible' ],
        //         }
        //     }
        // ]      
    } );
} );


</script>
</x-app-layout>