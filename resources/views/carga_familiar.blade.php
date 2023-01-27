<?php
//  dd($id_e);
// intval($numero);
$x = 1;
$a = 1;
$v = 1;
$e = 1;
?>

<x-app-layout >
    <div class="container" style="margin-top:30px">
        <div class="card">
            <div class="card-header">
                <h4>Carga Familiar</h4>
            </div>
            <div class="card-body">
               <div class="container">
                <form action="{{route('create_carga')}}" method="post">
                    @csrf
                    <?php for($i = 0; $i < $numero ; $i++){?>
                            <div style="margin-top:25px">
                                <h5><b>Datos del Pariente : </b> <b style="color:#2471A3">{{$x++}} </b></h5>
                            </div>
                            <input type="hidden" name="id_familiar[]" value="{{$a++}}">
                            <input type="hidden" name="id_emp[]" value="{{$id_e}}">
                            <div class="row">
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Parentesco</label>
                                    <input type="text" class="form-control input-char" name="parentesco[]">
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Nombre y Apellido</label>
                                    <input type="text" class="form-control input-char" name="nombre_apellido[]">
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Fecha de Nacimineto</label>
                                    <input type="date" class="form-control" id="fecha_nacimiento{{$a}}" onchange="edad_carga({{$a}})" name="fecha_nacimiento[]">
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Edad</label>
                                    <input type="text" class="form-control" id="edad{{$a}}" name="edad[]">
                                </div>
                            </div>
                            <div class="row" style="margin-top:10px">
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Nivel Educativo</label>
                                    <input type="text" class="form-control input-char" name="nivel_educativo[]">
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Sexo Beneficiario</label>
                                    {{-- <input type="date" class="form-control" name="nivel_educativo[]"> --}}
                                    <select name="sexo_f[]" id="" class="form-select">
                                        <option value="">SELECCIONE</option>
                                        <option value="HOMBRE">HOMBRE</option>
                                        <option value="MUJER">MUJER</option>
                                        <option value="OTROS">OTROS</option>
                                    </select>
                                </div>
                            </div>
                            <div style="margin-top:15px">
                                <h5><b>Detalle del Uniforme</b></h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Talla de Pantalaon</label>
                                    <input type="text" class="form-control input-number" maxlength="2" minlength="2" name="talla_pantalon[]">
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Talla de Mono</label>
                                    <input type="text" class="form-control input-number" maxlength="2" minlength="2" name="talla_mono[]">
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Talla Camisa y/o Chemises</label>
                                    <select name="talla_camisa[]" id="" class="form-select">
                                        <option value="">Seleccione</option>
                                        <option value="XS">XS</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL">XXL</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Talla de Zapato</label>
                                    <input type="text" class="form-control input-number" maxlength="2" minlength="2" name="talla_zapato[]">
                                </div>
                            </div>
                            <div class="row" style="margin-top:10px">
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Observaciones</label>
                                    <input type="text" class="form-control" name="observaciones[]">
                                </div>
                            </div>
                    <?php }?>
                    <div style="display: flex; justify-content:center; margin-top:20px">
                        <button type="submit" class="btn btn-success">ENVIAR</button>
                    </div>
                </form>
               </div>
            </div>
        </div>
    </div>
<script src="{{asset('js/jquery.js')}}"></script>
<script>
    $('.input-number').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('.input-char').on('input', function () { 
    this.value = this.value.replace(/[^a-zA-Z ]/g,'');
});

function edad_carga(id){
    console.log(id);
    let fechaNacimiento = document.getElementById('fecha_nacimiento'+id).value;
    // alert(fechaNacimiento);
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
    console.log(edad);
    $('#edad'+id).val(edad);
    
    document.getElementById('edad'+id).value = edad;
    document.getElementById('edad'+id).setAttribute('readonly', '');
    return edad;
};
</script>
</x-app-layout >