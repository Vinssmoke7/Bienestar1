<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estados;
use App\Models\Municipio;
use App\Models\Parroquia;

class JqueryController extends Controller
{
    //

    public function muni($id){
        return Municipio::where('id_estado','=',$id)->get();
    }

    public function parro($id){
        return Parroquia::where('id_municipio', '=', $id)->get();
    }

    // public function muni_edit($id){
    //     return Municipio::where('id_estado','=',$id)->get();
    // }

    // public function parro_edit($id){
    //     return Parroquia::where('id_municipio', '=', $id)->get();
    // }


}
