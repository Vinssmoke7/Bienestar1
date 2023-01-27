<?php
//  dd($id_e);
// intval($numero);
$x = 1;
$a = 1;
?>

<x-app-layout >
    <div class="container" style="margin-top:30px">
        <div class="card">
            <div class="card-header">
                <h4>Carga Familiar</h4>
            </div>
            <div class="card-body">
               <div class="container">
                <form action="{{route('edit_carga')}}" method="post">
                    @csrf
                    <?php for($i = 0; $i < $numero ; $i++){?>
                            <div style="margin-top:25px">
                                <h5><b>Datos del Pariente : </b> <b style="color:#2471A3">{{$x++}} </b></h5>
                            </div>
                            <input type="hidden" name="id_f[]" value="{{$carga[$i]->id_f}}">
                            <input type="hidden" name="id_familiar[]" value="{{$a++}}">
                            <input type="hidden" name="id_emp[]" value="{{$id_e}}">
                            <div class="row">
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Parentesco</label>
                                    <input type="text" class="form-control" value="{{$carga[$i]->parentesco}}" name="parentesco[]">
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Nombre y Apellido</label>
                                    <input type="text" class="form-control" value="{{$carga[$i]->nombre_apellido}}" name="nombre_apellido[]">
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Fecha de Nacimineto</label>
                                    <input type="date" class="form-control edad" value="{{$carga[$i]->fecha_nacimiento}}" onchange="edad_carga()" name="fecha_nacimiento[]">
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Edad</label>
                                    <input type="text" class="form-control" value="{{$carga[$i]->edad}}" name="edad[]">
                                </div>
                            </div>
                            <div class="row" style="margin-top:10px">
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Nivel Educativo</label>
                                    <input type="text" value="{{$carga[$i]->nivel_educativo}}" class="form-control" name="nivel_educativo[]">
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Sexo Beneficiario</label>
                                    {{-- <input type="date" class="form-control" name="nivel_educativo[]"> --}}
                                    <select name="sexo_f[]" id="" class="form-select">
                                        <option value="{{$carga[$i]->sexo_f}}">SELECCIONE</option>
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
                                    <input type="text" value="{{$carga[$i]->talla_pantalon}}" class="form-control" name="talla_pantalon[]">
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Talla de Mono</label>
                                    <input type="text" value="{{$carga[$i]->talla_mono}}" class="form-control" name="talla_mono[]">
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Talla Camisa y/o Chemises</label>
                                    <select name="talla_camisa[]" id="" class="form-select">
                                        <option value="{{$carga[$i]->talla_camisa}}">Seleccione</option>
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
                                    <input type="text" value="{{$carga[$i]->talla_zapato}}" class="form-control" name="talla_zapato[]">
                                </div>
                            </div>
                            <div class="row" style="margin-top:10px">
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-12">
                                    <label for="">Observaciones</label>
                                    <input type="text" value="{{$carga[$i]->observaciones}}" class="form-control" name="observaciones[]">
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
</x-app-layout >