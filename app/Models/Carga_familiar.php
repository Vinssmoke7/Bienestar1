<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carga_familiar extends Model
{
    use HasFactory;
    protected $table = 'carga_familiar';
    protected $primaryKey = "id_f"  ;
}
