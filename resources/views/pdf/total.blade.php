<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    tr td{
       text-align: center;
       font-size: 12px;
    }
    tr th b{
        padding: 10px;
    }
</style>
<body >
    
    {{-- <div style="opacity: 0.1; position: absolute; display:flex; margin-left:85px; margin-top:170px">
        <img src="img/Recurso.png" alt="">
    </div> --}}
    <div style="margin-left:250px">
        <h3>Listado de Beneficiario</h3>
    </div>
    <table style="margin-left: 30px">
        <thead style="">
           <tr style="font-size:13px; text-aling:center;">
                <th><b>N°</b></th>
                <th><b>Cedula</b></th>
                <th><b>Apellidos y Nombres</b></th>
                <th><b>Fecha de Nacimiento</b></th>
                <th><b>Edad</b></th>
                <th><b>Fecha de Ingreso</b></th>
                <th><b>N° Familiares</b></th>
           </tr>
        </thead>
      <tbody style="margin-top: 20px">
            @foreach ($emp as $e)
                <tr style="">
                    <td>{{$e->id_empleado}}</td>
                    <td>{{$e->cedula}}</td>
                    <td>{{$e->apellido_nombre}}</td>
                    <td>{{$e->fecha_nacimiento}}</td>                                                   
                    <td>{{$e->edad}}</td>                                                   
                    <td>{{$e->fecha_ingreso}}</td>
                    <td>{{$e->n_familiares}}</td>
                </tr>
            @endforeach
      </tbody>
    </table>
</body>
</html>