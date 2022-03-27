<?php

use App\Http\Controllers\API\CurriculaController;
use App\Http\Controllers\API\CursoController;
use App\Http\Controllers\API\DocenteController;
use App\Http\Controllers\API\PersonalController;
use App\Http\Controllers\API\ProgramacionCursoController;
use App\Http\Controllers\API\ProgramaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// prueba middleware
Route::get('personal', [PersonalController::class, 'index'])->middleware('autenticacion');

// CONSTANTES
// Tipos Perfiles
Route::get('TipoPerfiles', function (Request $request) {
    $tipoPerfiles = [
        array("Codigo" => "T", "Nombre" => "TeleEducacion"),
        array("Codigo" => "S", "Nombre" => "Secretaria Académica"),
        array("Codigo" => "C", "Nombre" => "Coordinador"),
    ];
    return response()->json(['error' => false, 'msg' => 'Tipos Perfiles Obtenidos Exitosamente', 'data' => $tipoPerfiles]);
});

// HELPERS
// Acceso
Route::get('AccesoSistemaTeleEducacion', function (Request $request) {
    return response()->json(['msg' => 'Ingreso al sistema exitosamente.']);
})->middleware('autenticacion');

// BASE DE DATOS
// Programas
Route::get('Programas', [ProgramaController::class, 'index'])->middleware('autenticacion');
Route::get('Programas/{tipo}', [ProgramaController::class, 'indexTipo'])->middleware('autenticacion');

// Curriculas
Route::get('Curriculas', [CurriculaController::class, 'index'])->middleware('autenticacion');
Route::get('Curriculas/{codigoPrograma}', [CurriculaController::class, 'indexPorCodigoPrograma'])->middleware('autenticacion');

// Cursos
Route::get('Cursos', [CursoController::class, 'index'])->middleware('autenticacion');
Route::get('Cursos/{codigoCurricula}', [CursoController::class, 'indexPorCodigoCurricula'])->middleware('autenticacion');

// Docentes
Route::get('Docentes', [DocenteController::class, 'index'])->middleware('autenticacion');
Route::post('Docentes', [DocenteController::class, 'store'])->middleware('autenticacion');
Route::get('Docentes/{codigo}', [DocenteController::class, 'show'])->middleware('autenticacion');
Route::put('Docentes/{codigo}', [DocenteController::class, 'update'])->middleware('autenticacion');
Route::delete('Docentes/{codigo}', [DocenteController::class, 'destroy'])->middleware('autenticacion');

// Programaciones curso
Route::get('ProgramacionesCurso', [ProgramacionCursoController::class, 'index'])->middleware('autenticacion');
Route::get('ProgramacionesCurso/{codigoCurso}/{fechaInicio}/{fechaFin}', [ProgramacionCursoController::class, 'indexCursoFInicioFFin'])->middleware('autenticacion');
