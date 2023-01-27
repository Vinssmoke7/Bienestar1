<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficio extends Model
{
    use HasFactory;
    protected $table = "beneficio";
    
    protected $fillable = ['cedula', 'apellido_nombre', 'fecha_nacimiento', 'edad', 'fecha_ingreso', 'sexo', 'cuenta', 'n_cuenta', 'departamento', 'direccion', 
                            'ubicacion_fisica', 'ubicacion_grafica', 'cargo_de_sistema', 'cargo', 'profesionalizacion', 'años_administracion','años_administracion_publica', 
                            'parentesco', 'n_hijos', 'talla_camisa', 'talla_pantalon', 'talla_zapato', 'nombre_apellido', 'fecha_de_nacimiento', 'edad_hijo', 'nivel_educativo', 
                            'sexo_benef', 'talla_pantalon_esco', 'talla_mono_esco', 'talla_camisa_esco', 'talla_zapato_esco', 'observaciones'];
}
