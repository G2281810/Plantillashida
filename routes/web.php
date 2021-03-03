<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\ConsultaEstudioController;
use App\Http\Controllers\EstudiosController;
use App\Http\Controllers\Tipo_sangreController;


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
                                 /*Pacientes*/
Route::get('/altapacientes',[PacientesController::class,'altapacientes'])->name('altapacientes');
Route::post('/guardarpaciente',[PacientesController::class,'guardarpaciente'])->name('guardarpaciente');


                                /*Usuarios*/
Route::get('/altausuarios',[UsuariosController::class,'altausuarios'])->name('altausuarios');
Route::post('/guardarusuario',[UsuariosController::class,'guardarusuario'])->name('guardarusuario');

                                //Tipo Usuarios//
Route::get('/altatipousuario',[TipoUsuarioController::class,'altatipousuario'])->name('altatipousuario');
Route::post('/guardartipou',[TipoUsuarioController::class,'guardartipou'])->name('guardartipou');

                                //Consulta estudio//
Route::get('/altaconestudio',[ConsultaEstudioController::class, 'altaconestudio'])->name('altaconestudio');
Route::post('/guardarconestudio',[ConsultaEstudioController::class, 'guardarconestudio'])->name('guardarconestudio');

                                //EStudios//
Route::get('/altaestudios',[EstudiosController::class, 'altaestudios'])->name('altaestudios');
Route::post('/guardarestudios',[EstudiosController::class, 'guardarestudios'])->name('guardarestudios');

                                //Tiposangre//
Route::get('/altatiposangre',[Tipo_sangreController::class, 'tiposangre'])->name('tiposangre');
Route::post('/guardartiposan',[Tipo_sangreController::class, 'guardartiposan'])->name('guardartiposan');

Route::get('/',[PacientesController::class,'index'])->name('index');
Route::get('/menuprincipal',[PacientesController::class,'index'])->name('index');
Route::get('/eloquent',[PacientesController::class,'eloquent'])->name('eloquent');
Route::get('/reporte',[PacientesController::class, 'reporte'])->name('reporte');
