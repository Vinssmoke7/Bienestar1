<x-app-layout>
<!-- @section('estilo')
     <link rel="stylesheet" href="{{asset('bootstrap/css/boostrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/input.css')}}">
     <link rel="stylesheet" href="{{asset('css/DataTable.min.css')}}">
@endsection -->

    <div class="container" style="margin-top:30px">
        <div class="row justify-content-center">
            <div class="col-fluid">
                <div class="card">
                    <div class="card-header" style="background: #1B2B72;color:white;padding:15px; ">
                        <div class="row">
                            <div class="col-10">
                                Listado de Usuarios
                            </div>
                            <div class="col-2">
                                 <!-- Button trigger modal -->
                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fa-solid fa-user"></i> Crear Usuario
                                </button>
                                @include('modales.crear_usuarios')
                            </div>
                        </div>
                       

                       
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            @if (session('eliminar'))
                            <div class="alert alert-danger" role="alert" style="display:flex ;justify-content:center">
                                {{ session('eliminar') }}
                            </div>
                            @endif
                        </div>
                        <div class="row justify-content-center">
                            @if (session('actualizar'))
                            <div class="alert alert-success" role="alert" style="display:flex ;justify-content:center">
                                {{ session('actualizar') }}
                            </div>
                            @endif
                        </div>
                       <div class="container">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Nombre</th>
                                    <th>Cedula</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->nombre}}</td>
                                        <td>{{$user->cedula}}</td>
                                        @if (Auth::user()->admin == true)
                                            <td>

                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop1{{$user->id}}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                @include('modales.editar_usuarios')
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2{{$user->id}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                  </button>
                                                @include('modales.eliminar_usuarios')
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Opciones</th>
                                </tr>
                            </tfoot>
                        </table>
                      
                       </div>
                     </div>
                </div>
            </div>
       </div>
    </div>
 {{-- @section('estilo')
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/DataTable.js')}}"></script>
@endsection --}}
<script src="{{asset('js/jquery.js')}}"></script>
<script>
    $(document).ready(function() {
         $('#example').DataTable();
    } );
</script>
</x-app-layout>