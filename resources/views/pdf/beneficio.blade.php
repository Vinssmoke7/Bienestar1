<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="opacity: 0.1; position: absolute; display:flex; margin-left:85px; margin-top:170px">
        <img src="img/Recurso.png" alt="">
    </div>
    <table>
            
                <p><b>N°: </b>{{$datos->id}}</p>
                <p><b>Cédula: </b>{{$datos->cedula}}</p>
                <p><b>Apellidos y Nombres: </b>{{$datos->apellido_nombre}}</p>
                <p><b>Fecha de Nacimiento: </b>{{$datos->fecha_nacimiento}}</p>
                <p><b>Edad: </b>{{$datos->edad}}</p>
                <p><b>Fecha de Ingreso: </b>{{$datos->fecha_ingreso}}</p>
                {{-- <p><b>Sexo: </b>{{$datos->sexo}}</p> --}}
                {{-- <p><b>Cuenta: </b>{{$datos->cuenta}}</p>
                <p><b>N° Cuenta: </b>{{$datos->n_cuenta}}</p> --}}
                <p><b>Departamento: </b>{{$datos->departamento}}</p>
                <p><b>Direccion: </b>{{$datos->direccion}}</p>
                {{-- <p><b>Ubicación Física: </b>{{$datos->ubicacion_fisica}}</p>
                <p><b>Ubicación Geográfica: </b>{{$datos->ubicacion_grafica}}</p> --}}
                <p><b>Cargo en el Sistema: </b>{{$datos->cargo_de_sistema}}</p>
                <p><b>Cargo: </b>{{$datos->cargo}}</p>
                <p><b>Profesionalización: </b>{{$datos->profesionalizacion}}</p>
                <p><b>Años en la Administración Pública: </b>{{$datos->años_administracion}}</p>
                <p><b>Parentesco: </b>{{$datos->parentesco}}</p>
                <p><b>N° de hijos: </b>{{$datos->n_hijos}}</p>
                <p><b>Talla de camisas: </b>{{$datos->talla_camisa}}</p>
                <p><b>Talla de pantalon: </b>{{$datos->talla_pantalon}}</p>
                <p><b>Talla de Zapato: </b>{{$datos->talla_zapato}}</p>
                <p><b>Nombre y apellido: </b>{{$datos->nombre_apellido}}</p>
                <p><b>Fecha de Nacimiento :</b>{{$datos->fecha_de_nacimiento}}</p>
                <p><b>Edad: </b>{{$datos->edad_hijo}}</p>
                <p><b>Nivel educativo: </b>{{$datos->nivel_educativo}}</p>
                <p><b>Sexo beneficiario: </b>{{$datos->sexo_benef}}</p>
                <p><b>Talla de pantalones: </b>{{$datos->talla_pantalon_esco}}</p>
                <p><b>Talla de mono: </b>{{$datos->talla_mono_esco}}</p>
                <p><b>Talla Camisa y/o Chemises: </b>{{$datos->talla_camisa_esco}}</p>
                <p><b>Talla zapato: </b>{{$datos->talla_zapato_esco}}</p>
                <p><b>Observaciones: </b>{{$datos->observaciones}}</p>
                
    </table>
</body>
</html>