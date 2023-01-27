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
            <th><b>N °</b></th>
            <th><b>Cedula</b></th>
            <th><b>Apellido y Nombre</b></th>
            <th><b>Fecha de Nacimiento</b></th>
            <th><b>Edad</b></th>
            <th><b>Fecha Ingreso</b></th>
            <th><b>Sexo</b></th>
            <th><b>Cuenta</b></th>
            <th><b>N° Cuenta</b></th>
            <th><b>Cargo Sistema</b></th>
            <th><b>Carga</b></th>
            <th><b>Profesionalizacion</b></th>
            <th><b>Años en la Administración Publica</b></th>
            <th><b>Departamento</b></th>
            <th><b>Estado</b></th>
            <th><b>Municipio</b></th>
            <th><b>Parroquia</b></th>
            <th><b>Direccion</b></th>
            <th><b>Talla Camisa</b></th>
            <th><b>Talla Pantalon</b></th>
            <th><b>Talla Zapato</b></th>
            <th><b>N ° Familiares</b></th>
        </tr>
        </thead>
        <tbody>
        @foreach($empleado as $e)
            <tr>
                <td>{{ $e->id_empleado }}</td>
                <td>{{ $e->cedula }}</td>
                <td>{{ $e->apellido_nombre }}</td>
                <td>{{ $e->fecha_nacimiento }}</td>
                <td>{{ $e->edad }}</td>
                <td>{{ $e->fecha_ingreso }}</td>
                <td>{{ $e->sexo }}</td>
                <td>{{ $e->cuenta }}</td>
                <td>{{ $e->n_cuenta }}</td>
                <td>{{ $e->cargo_sistema }}</td>
                <td>{{ $e->cargo }}</td>
                <td>{{ $e->profesionalizacion }}</td>
                <td>{{ $e->anios_administracion }}</td>
                <td>{{ $e->departamento }}</td>
                <td>{{ optional($e->empleado_estado)->estado }}</td>
                <td>{{ optional($e->empleado_municipio)->municipio }}</td>
                <td>{{ optional($e->empleado_parroquia)->parroquia }}</td>
                <td>{{ $e->direccion }}</td>
                <td>{{ $e->talla_camisa }}</td>
                <td>{{ $e->talla_pantalon }}</td>
                <td>{{ $e->talla_zapato }}</td>
                <td>{{ $e->n_familiares }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>