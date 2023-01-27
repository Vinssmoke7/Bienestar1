<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BeneficioController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\JqueryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('form_beneficio', [BeneficioController::class, 'index'])->name('form_beneficio');
Route::post('create_beneficio', [BeneficioController::class, 'create'])->name('create_beneficio');
Route::post('create_empleado', [BeneficioController::class, 'crear_empleado'])->name('create_empleado');
//NOMBREDEVISTA / NOMBREDEFUNCION
Route::get('carga_familiar.vista_f/{id}', [BeneficioController::class, 'vista_f'])->name('carga_familiar.vista_f');
Route::get('listado', [BeneficioController::class, 'mostrar'])->name('listado');

Route::get('vista_editar/{id}', [BeneficioController::class, 'editar_vista'])->name('vista_editar');

Route::post('editar_empleado/{id}', [BeneficioController::class, 'empleado_editar'])->name('editar_empleado');
//NOMBREDEVISTA / NOMBREDEFUNCION
Route::get('vistaf_edit.vistaf_editar/{id}', [BeneficioController::class, 'vistaf_editar'])->name('vistaf_edit.vistaf_editar');
Route::post('edit_carga', [BeneficioController::class, 'carga_edit'])->name('edit_carga');

Route::get('eliminar_r/{id}', [BeneficioController::class, 'r_eliminar'])->name('eliminar_r');

//REPORTES  

Route::get('excel_empleado', [BeneficioController::class, 'empleado_excel'])->name('excel_empleado');
Route::get('excel_familiar', [BeneficioController::class, 'familiar_excel'])->name('excel_familiar');
Route::get('pdf_total', [BeneficioController::class, 'total_pdf'])->name('pdf_total');
Route::get('pdf_detallado/{id}', [BeneficioController::class, 'detallado_pdf'])->name('pdf_detallado');





// ---------------------------------------------------------------------------------------------

Route::post('create_carga', [BeneficioController::class, 'create_familiar'])->name('create_carga');

Route::get('listado_beneficio', [BeneficioController::class, 'show'])->name('listado_beneficio');

Route::post('act_bene/{id}', [BeneficioController::class, 'update'])->name('act_bene');

Route::get('eliminar_bene/{id}', [BeneficioController::class, 'destroy'])->name('eliminar_bene');

Route::get('bene.pdf/{id}', [BeneficioController::class, 'exportPDF'])->name('bene.pdf');

Route::get('total_pdf', [BeneficioController::class, 'totalPDF'])->name('total_pdf');




Route::get('usuarios', [UsuariosController::class, 'show'])->name('usuarios')->middleware("usuarios");
Route::post('crear_usuario', [UsuariosController::class, 'usuario_crear'])->name('crear_usuario');
Route::post('actualizar_user/{id}', [UsuariosController::class, 'update'])->name('actualizar_user');
Route::get('eliminar_user/{id}', [UsuariosController::class, 'destroy'])->name('eliminar_user');

// -----------------ajax---------------------------------------------

Route::get('municipioSearch/{id}', [JqueryController::class, 'muni'])->name('municipioSearch');
Route::get('parroquiaSearch/{id}', [JqueryController::class, 'parro'])->name('parroquiaSearch');

Route::get('/municipioSearch2/{id}', [JqueryController::class, 'muni'])->name('/municipioSearch2');
Route::get('/parroquiaSearch2/{id}', [JqueryController::class, 'parro'])->name('/parroquiaSearch2');

// Route::get('municipio/{id}', [JqueryController::class, 'muni_edit'])->name('municipio');
// Route::get('parroquiaSearch_edit/{id}', [JqueryController::class, 'parro_edit'])->name('parroquiaSearch_edit');

Route::post('probando', [BeneficioController::class, 'probando'])->name('probando');
Route::get('peticion/{id}', [BeneficioController::class, 'peticion'])->name('peticion');


