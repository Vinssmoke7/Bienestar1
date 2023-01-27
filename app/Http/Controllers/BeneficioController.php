<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beneficio;
use App\Models\Estados;
use App\Models\Municipio;
use App\Models\Parroquia;
use App\Models\Prueba;
use App\Models\Empleado;
use App\Models\Carga_familiar;
use App\Exports\ExcelEmpleados;
use App\Exports\ExcelFamiliar;
use Excel;

use Barryvdh\DomPDF\Facade as PDF;

class BeneficioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estado = Estados::all();
        $muni = Municipio::all();
        $parro = Parroquia::all();
        $p = Prueba::all();
        // $parro = Parroquia::all();
        // dd($estado);
        return view("form_beneficio", compact('estado', 'muni', 'parro', 'p'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $beneficio = new Beneficio;
        $beneficio->create($request->all());
        return redirect('form_beneficio' )->withBeneficio('Registro Completado!');
    }


    public function crear_empleado(Request $request){
        // dd($request->all());
        $e = new Empleado;
        $e->cedula = $request->cedula;
        $e->apellido_nombre = $request->apellido_nombre;
        $e->fecha_nacimiento = $request->fecha_nacimiento;
        $e->edad = $request->edad;
        $e->fecha_ingreso = $request->fecha_ingreso;
        $e->sexo = $request->sexo;
        $e->cuenta = $request->cuenta;
        $e->n_cuenta = $request->n_cuenta;
        $e->cargo_sistema = $request->cargo_sistema;
        $e->cargo = $request->cargo;
        $e->profesionalizacion = $request->profesionalizacion;
        $e->anios_administracion = $request->anios_administracion;
        $e->departamento = $request->departamento;
        $e->estado = $request->estado;
        $e->municipio = $request->municipio;
        $e->parroquia = $request->parroquia;
        $e->direccion = $request->direccion;
        $e->talla_camisa = $request->talla_camisa;
        $e->talla_pantalon = $request->talla_pantalon;
        $e->talla_zapato = $request->talla_zapato;
        $e->n_familiares = $request->n_familiares;
        $e->save();
        if($request->n_familiares == 0 ||  $request->n_familiares == ' ' ||  $request->n_familiares == null){
            return redirect('form_beneficio')->with('msj', 'Empleado Registrado!');
        }else{
            return redirect()->action(
                [BeneficioController::class, 'vista_f'], ['id' => $e->id_empleado]
            );
        }
    }

    public function vista_f($id){
        $x = Empleado::find($id);
        $numero = $x->n_familiares;
        $id_e = $x->id_empleado;
        // $numero = Empleado::select("n_familiares")->where('id_empleado', '=', $id)->get();
        // $id_e = Empleado::select("id_empleado")->where('id_empleado', '=', $id)->get();
        // dd($id);
        // intval($numero);
        return view('carga_familiar', compact('numero', 'id_e'));
        // dd($id_empleado , $n_familiares);
    }

    public function create_familiar(Request $request){
        // dd($request->all());
        for($i = 0; $i < count($request->id_familiar) ; $i++){
            $familiar = array();
            $familiar = new Carga_familiar;
            $familiar['id_familiar'] = $request->id_familiar[$i];
            $familiar['parentesco'] = $request->parentesco[$i];
            $familiar['nombre_apellido'] = $request->nombre_apellido[$i];
            $familiar['fecha_nacimiento'] = $request->fecha_nacimiento[$i];
            $familiar['edad'] = $request->edad[$i];
            $familiar['nivel_educativo'] = $request->nivel_educativo[$i];
            $familiar['sexo_f'] = $request->sexo_f[$i];
            $familiar['talla_pantalon'] = $request->talla_pantalon[$i];
            $familiar['talla_mono'] = $request->talla_mono[$i];
            $familiar['talla_camisa'] = $request->talla_camisa[$i];
            $familiar['talla_zapato'] = $request->talla_zapato[$i];
            $familiar['observaciones_f'] = $request->observaciones[$i];
            $familiar['id_emp'] = $request->id_emp[$i];
            $familiar->save();
        }
        return redirect('form_beneficio')->with('msj', 'Empleado Registrado!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $bene = Beneficio::all();
        return view("listado_beneficio", compact("bene"));
    }

    public function mostrar(){
        $empleado = Empleado::all();
        $familiar = Carga_familiar::orderBy('id_familiar', 'ASC')
        ->get();
        // $estado = Estado::all();
        // for($i = 0; $i < count($empleado); $i++){
        //     $x = $empleado[$i]->id_empleado;
        // }
        // $fami = Carga_familiar::where("id_emp", '=', $x)->get();
        // $familiar = Carga_familiar::all();
        // dd($familiar);
        // $emp = Empleado::all()->union($familiar);
        // dd($emp);
        return view('listado', compact('empleado', 'familiar'));
    }

    public function editar_vista($id){
        $emp = Empleado::find($id);
        $estado = Estados::all();
        // $muni = Municipio::all();
        // $parro = Parroquia::all();
        $p = Prueba::all();
        return view('edit_beneficio', compact('emp', 'estado', 'p'));
        // dd($emp);
    }


    public function empleado_editar(Request $request, $id){
        $e = Empleado::find($id);
        $e->cedula = $request->cedula;
        $e->apellido_nombre = $request->apellido_nombre;
        $e->fecha_nacimiento = $request->fecha_nacimiento;
        $e->edad = $request->edad;
        $e->fecha_ingreso = $request->fecha_ingreso;
        $e->sexo = $request->sexo;
        $e->cuenta = $request->cuenta;
        $e->n_cuenta = $request->n_cuenta;
        $e->cargo_sistema = $request->cargo_sistema;
        $e->cargo = $request->cargo;
        $e->profesionalizacion = $request->profesionalizacion;
        $e->anios_administracion = $request->anios_administracion;
        $e->departamento = $request->departamento;
        $e->estado = $request->estado;
        $e->municipio = $request->municipio;
        $e->parroquia = $request->parroquia;
        $e->direccion = $request->direccion;
        $e->talla_camisa = $request->talla_camisa;
        $e->talla_pantalon = $request->talla_pantalon;
        $e->talla_zapato = $request->talla_zapato;
        $e->n_familiares = $request->n_familiares;
        $e->save();
        if($request->n_familiares == 0 ||  $request->n_familiares == ' ' ||  $request->n_familiares == null){
            return redirect('listado')->with('msj', 'Registro Actualizado!');
        }else{
            return redirect()->action(
                [BeneficioController::class, 'vistaf_editar'], ['id' => $e->id_empleado]
            );
        }

    }

    public function vistaf_editar($id){
        $x = Empleado::find($id);
        $numero = $x->n_familiares;
        $id_e = $x->id_empleado;
        $carga = Carga_familiar::where('id_emp', '=', $id_e)->get();
        // dd($carga);
        return view('vistaf_edit', compact('numero', 'id_e', 'carga'));
    }



    public function carga_edit(Request $request){
        $id = $request->id_f;
        for($i = 0; $i < count($request->id_familiar) ; $i++)
        {
            $familiar = Carga_familiar::find($id[$i]);
            $familiar['id_familiar'] = $request->id_familiar[$i];
            $familiar['parentesco'] = $request->parentesco[$i];
            $familiar['nombre_apellido'] = $request->nombre_apellido[$i];
            $familiar['fecha_nacimiento'] = $request->fecha_nacimiento[$i];
            $familiar['edad'] = $request->edad[$i];
            $familiar['nivel_educativo'] = $request->nivel_educativo[$i];
            $familiar['sexo_f'] = $request->sexo_f[$i];
            $familiar['talla_pantalon'] = $request->talla_pantalon[$i];
            $familiar['talla_mono'] = $request->talla_mono[$i];
            $familiar['talla_camisa'] = $request->talla_camisa[$i];
            $familiar['talla_zapato'] = $request->talla_zapato[$i];
            $familiar['observaciones_f'] = $request->observaciones[$i];
            $familiar['id_emp'] = $request->id_emp[$i];
            $familiar->save();
        }
        return redirect('listado')->with('msj', 'Registro Actualizado!');
    }


    public function r_eliminar($id){
        $e = Empleado::find($id);
        $c = Carga_Familiar::where('id_emp', '=', $e->id_empleado);
        $e->delete();
        $c->delete();
        return redirect('listado')->with('elm', 'Registro Eliminado!');
        // dd($c);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datos = Beneficio::find($id);
        $datos->cedula = $request->cedula;
        $datos->apellido_nombre = $request->apellido_nombre;
        $datos->fecha_nacimiento = $request->fecha_nacimiento;
        $datos->edad = $request->edad;
        $datos->fecha_ingreso = $request->fecha_ingreso;
        $datos->sexo = $request->sexo;
        $datos->cuenta = $request->cuenta;
        $datos->n_cuenta = $request->n_cuenta;
        $datos->departamento = $request->departamento;
        $datos->direccion = $request->direccion;
        $datos->ubicacion_fisica = $request->ubicacion_fisica;
        $datos->ubicacion_grafica = $request->ubicacion_grafica;
        $datos->cargo_de_sistema = $request->cargo_de_sistema;
        $datos->cargo = $request->cargo;
        $datos->profesionalizacion = $request->profesionalizacion;
        $datos->años_administracion = $request->años_administracion;
        $datos->parentesco = $request->parentesco;
        $datos->n_hijos = $request->n_hijos;
        $datos->talla_camisa = $request->talla_camisa;
        $datos->talla_pantalon = $request->talla_pantalon;
        $datos->talla_zapato = $request->talla_zapato;
        $datos->nombre_apellido = $request->nombre_apellido;
        $datos->fecha_de_nacimiento = $request->fecha_de_nacimiento;
        $datos->edad_hijo = $request->edad_hijo;
        $datos->nivel_educativo = $request->nivel_educativo;
        $datos->sexo_benef = $request->sexo_benef;
        $datos->talla_pantalon_esco = $request->talla_pantalon_esco;
        $datos->talla_mono_esco = $request->talla_mono_esco;
        $datos->talla_camisa_esco = $request->talla_camisa_esco;
        $datos->talla_zapato_esco = $request->talla_zapato_esco;
        $datos->observaciones = $request->observaciones;
        $datos->save();
        return redirect('listado_beneficio')->withActualizar('Registro actualizado!');
    
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $datos = Beneficio::find($id);
        $datos->delete();
        return redirect("listado_beneficio")->withEliminar("Registro Eliminado");
    }

    public function empleado_excel() 
    {
        // echo"asdasd";
        return Excel::download(new ExcelEmpleados, 'Empleados.xlsx');
    }

    public function familiar_excel(){
        return Excel::download(new ExcelFamiliar, 'Familiar.xlsx');
    }

    public function total_pdf(){
       $emp = Empleado::orderBy('id_empleado', 'ASC')->get();
       $pdf = PDF::loadView('pdf.total', compact('emp'));
        return $pdf->download('Beneficio.pdf');    
    }

    public function detallado_pdf($id){
        $emp = Empleado::find($id);
        $fami = Carga_Familiar::where('id_emp', '=', $id)
        ->orderBy('id_familiar', 'ASC')
        ->get();
        // dd($emp, $fami);
        $pdf = PDF::loadView('pdf.detallado', compact('emp', 'fami'));
        return $pdf->download('Registro Detallado.pdf'); 
    }



    public function exportPDF($id){

        $datos = Beneficio::find($id);
        $pdf = PDF::loadView('pdf.beneficio', compact('datos'));
        return $pdf->download('Beneficio.pdf');       
    }

    public function totalPDF(){
        $datos = Beneficio::all();
        $pdf = PDF::loadView('pdf.total', compact('datos'));
        return $pdf->download('Beneficio.pdf');       
    }

    public function probando(Request $request){
        // dd($request->all());

        $qlq = new Prueba;
        $qlq->create($request->all());
    }

    public function peticion($id){
        // return Prueba::all();
        // return $request->all(); //Prueba::where('id', '=', $id)->get();
        
        return Prueba::find($id);
        // $id = $request->get('id');
        // return Prueba::find($id)->get();
    }

}
