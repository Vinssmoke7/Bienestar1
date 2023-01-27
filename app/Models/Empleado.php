<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table = "empleado";
    protected $primaryKey = "id_empleado";

    // public function empleado_estado()
    // {
    //     return $this->belongsTo(Estados::class, 'id_estado');
    // }

    public function empleado_estado()
    {
    return $this->belongsTo(Estados::class, 'estado', 'id_estado');
    }

    public function empleado_municipio()
    {
    return $this->belongsTo(Municipio::class, 'municipio', 'id_municipio');
    }

    public function empleado_parroquia()
    {
    return $this->belongsTo(Parroquia::class, 'parroquia', 'id_parroquia');
    }
}
