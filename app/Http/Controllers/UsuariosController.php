<?php

namespace App\Http\Controllers;
use  App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $user = User::all()->whereNotIn('id', [1]);
        return view("usuarios", compact("user"));

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

    public function usuario_crear(Request $request){
        $u = new User;
        $u->name = $request->name;
        $u->nombre = $request->nombre ;
        $u->cedula = $request->cedula ;
        $u->password = Hash::make($request->password) ;
        // $u-> = $request-> ;
        $u->save();
        return redirect('usuarios')->withActualizar("Usuario Creado");
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
        $datos = User::find($id);
        if($datos->password == $request->input("password")){
            $datos->name = $request->name;
            $datos->nombre = $request->nombre ;
            $datos->cedula = $request->cedula ;
            $datos->save();
        }else{
            $datos->name = $request->name;
            $datos->nombre = $request->nombre ;
            $datos->cedula = $request->cedula ;
            $datos->password = Hash::make($request->password);
            $datos->save();
        }
        return redirect('usuarios')->withActualizar("Usuario Actualizado");
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
        $datos = User::find($id);
        $datos->delete();
        return redirect("usuarios")->withEliminar("Usuario Eliminado");
    }

   
}
