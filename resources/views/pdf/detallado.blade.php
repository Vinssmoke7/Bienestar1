<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table style="margin-left: 90px">
        <div style="padding: 10px">
            <h4 style="color:#154360">EMPLEADO</h4>
        </div>
        <p><b>N° : </b>{{$emp->id_empleado}}</p>
        <p><b>Cedula : </b>{{$emp->cedula}}</p>
        <p><b>Apellido y Nombre : </b>{{$emp->apellido_nombre}}</p>
        <p><b>Fecha de Nacimiento : </b>{{$emp->fecha_nacimiento}}</p>
        <p><b>Edad : </b>{{$emp->edad}}</p>
        <p><b>Fecha Ingreso : </b>{{$emp->fecha_ingreso}}</p>
        <p><b>Sexo : </b>{{$emp->sexo}}</p>
        <p><b>Cuenta : </b>{{$emp->cuenta}}</p>
        <p><b>N° Cuenta : </b>{{$emp->n_cuenta}}</p>
        <p><b>Cargo Sistema : </b>{{$emp->cargo_sistema}}</p>
        <p><b>Carga : </b>{{$emp->cargo}}</p>
        <p><b>Profesionalizacion : </b>{{$emp->profesionalizacion}}</p>
        <p><b>Años en la Administración Publica : </b>{{$emp->anios_administracion}}</p>
        <p><b>Departamento : </b>{{$emp->departamento}}</p>
        <p><b>Estado : </b>{{optional($emp->empleado_estado)->estado}}</p>
        <p><b>Municipio : </b>{{optional($emp->empleado_municipio)->municipio}}</p>
        <p><b>Parroquia : </b>{{optional($emp->empleado_parroquia)->parroquia}}</p>
        <p><b>Direccion : </b>{{$emp->direccion}}</p>
        <p><b>Talla Camisa : </b>{{$emp->talla_camisa}}</p>
        <p><b>Talla Pantalon : </b>{{$emp->talla_pantalon}}</p>
        <p><b>Talla Zapato : </b>{{$emp->talla_zapato}}</p>
        <p><b>N ° Familiares : </b>{{$emp->n_familiares}}</p>
    </table>

        @if ($emp->n_familiares != 0 || $emp->n_familiares != null)
            <table style="margin-left: 90px">
                <div style="padding: 10px">
                    <h4 style="color:#154360">CARGA FAMILIAR</h4>
                </div>
                @foreach ($fami as $f)
                   <div style="margin-top:10px">
                        <p><b>N° : </b><b style="color:#154360">{{$f->id_familiar}}</b></p>
                        <p><b>Parentesco : </b>{{$f->parentesco}}</p>
                        <p><b>Apellido y Nombre : </b>{{$f->nombre_apellido}}</p>
                        <p><b>Fecha de Nacimiento : </b>{{$f->fecha_nacimiento}}</p>
                        <p><b>Edad : </b>{{$f->edad}}</p>
                        <p><b>Nivel Educativo : </b>{{$f->nivel_educativo}}</p>
                        <p><b>Sexo : </b>{{$f->sexo_f}}</p>
                        <p><b>Talla Pantalon : </b>{{$f->talla_pantalon}}</p>
                        <p><b>Talla Mono : </b>{{$f->talla_mono}}</p>
                        <p><b>Talla Camisa : </b>{{$f->talla_camisa}}</p>
                        <p><b>Talla Zapato : </b>{{$f->talla_zapato}}</p>
                        <p><b>Observaciones : </b>{{$f->observaciones_f}}</p>
                    </div>
                @endforeach
            </table>
        @endif

</body>
</html>