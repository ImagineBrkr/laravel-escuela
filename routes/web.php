<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\UsuarioController;

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

Route::get('/', [InicioController::class, 'index'])->name('inicio');

Route::get('/noticias', [InicioController::class, 'verNoticias'])->name('noticias');
Route::get('/noticias/ver/{id}', [InicioController::class, 'mostrarNoticia'])->name('noticias.ver');
Route::get('/noticias/agregar', [InicioController::class, 'agregarNoticia'])->name('agregarNoticia');
Route::post('/noticias/ingresar', [InicioController::class, 'ingresarNoticia'])->name('noticias.ingresar');

Route::get('/escuela/docentes', [InicioController::class, 'verDocentes'])->name('escuela.docentes');
Route::get('/escuela/docentes/editar/{id}', [InicioController::class, 'editarDocente'])->name('escuela.docentes.editar');
Route::post('/escuela/docentes/update/{id}', [InicioController::class, 'updateDocente'])->name('escuela.docentes.update');

Route::get('/escuela/cursos', [InicioController::class, 'verCursos'])->name('escuela.cursos');

Route::get('/escuela/investigaciones', [InicioController::class, 'verInvestigaciones'])->name('escuela.investigaciones');
Route::get('/escuela/investigaciones/añadir', [InicioController::class, 'añadirInvestigacion'])->name('escuela.investigaciones.añadir');
Route::post('/escuela/investigaciones/ingresar', [InicioController::class, 'ingresarInvestigacion'])->name('escuela.investigaciones.ingresar');

Route::get('/escuela/comunicados', [InicioController::class, 'verComunicados'])->name('escuela.comunicados');
Route::get('/escuela/comunicados/ver/{id}', [InicioController::class, 'mostrarComunicado'])->name('escuela.comunicados.ver');
Route::get('/escuela/comunicados/añadir', [InicioController::class, 'añadirComunicado'])->name('escuela.comunicados.añadir');
Route::post('/escuela/comunicados/ingresar', [InicioController::class, 'ingresarComunicado'])->name('escuela.comunicados.ingresar');

Route::get('/especialidades/postgrado', function () {
    return view('especialidades.postgrado');
})->name('especialidades.postgrado');

Route::get('/institucional', function () {
    return view('institucional.mivi');
})->name('institucional');

Route::get('/academico/ingresante', function () {
    return view('academico.ingresante');
})->name('academico.ingresante');

Route::get('/academico/egresado', function () {
    return view('academico.egresado');
})->name('academico.egresado');

Route::get('/ingreso', [UsuarioController::class, 'ingreso'])->name('ingreso');
Route::get('/salir', [UsuarioController::class, 'salir'])->name('salir');
Route::post('/ingresar', [UsuarioController::class, 'ingresar'])->name('ingresar');
Route::get('/registro', [UsuarioController::class, 'registro'])->name('registro');
Route::post('/registrar', [UsuarioController::class, 'registrar'])->name('registrar');

Route::get('/perfil/{id}/tramites', [UsuarioController::class, 'verTramites'])->name('tramites');

Route::get('/perfil/{id}', [UsuarioController::class, 'verPerfil'])->name('verPerfil');


