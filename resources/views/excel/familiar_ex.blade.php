<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th><b>Cedula del Empleado</b></th>
            {{-- <th><b>N °</b></th> --}}
            <th><b>Parentesco</b></th>
            <th><b>Nombre Apellido</b></th>
            <th><b>Fecha de Nacimiento</b></th>
            <th><b>Edad</b></th>
            <th><b>Nivel Educativo</b></th>
            <th><b>Sexo</b></th>
            <th><b>Talla Pantalon</b></th>
            <th><b>Talla Mono</b></th>
            <th><b>Talla Camisa</b></th>
            <th><b>Talla Zapato</b></th>
            <th><b>observaciones</b></th>
        </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($f); $i++)
                <tr>
                    <td>{{$f[$i]->cedula}}</td>
                    {{-- <td>{{$f[$i]->id_emp}}</td> --}}
                    <td>{{$f[$i]->parentesco}}</td>
                    <td>{{$f[$i]->nombre_apellido}}</td>
                    <td>{{$f[$i]->fecha_nacimiento}}</td>
                    <td>{{$f[$i]->edad}}</td>
                    <td>{{$f[$i]->nivel_educativo}}</td>
                    <td>{{$f[$i]->sexo_f}}</td>
                    <td>{{$f[$i]->talla_pantalon}}</td>
                    <td>{{$f[$i]->talla_mono}}</td>
                    <td>{{$f[$i]->talla_camisa}}</td>
                    <td>{{$f[$i]->talla_zapato}}</td>
                    <td>{{$f[$i]->observaciones_f}}</td>
                </tr>
            @endfor
        </tbody>
    </table>
</body>
</html>