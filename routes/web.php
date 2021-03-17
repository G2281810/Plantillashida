<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\ConsultaEstudioController;
use App\Http\Controllers\EstudiosController;
use App\Http\Controllers\Tipo_sangreController;
//use App\Http\Controllers\LoginController;


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
Route::get('/reportepacientes',[PacientesController::class,'reportepacientes'])->name('reportepacientes');
Route::get('/desactivapaciente/{idpaciente}',[PacientesController::class,'desactivapaciente'])->name('desactivapaciente');
Route::get('/activapaciente/{idpaciente}',[PacientesController::class,'activapaciente'])->name('activapaciente');
Route::get('/borrarpaciente/{idpaciente}',[PacientesController::class,'borrarpaciente'])->name('borrarpaciente');
Route::get('/modificapacientes/{idpaciente}',[PacientesController::class,'modificapacientes'])->name('modificapacientes');
Route::post('/guardacambiospaciente',[PacientesController::class,'guardacambiospaciente'])->name('guardacambiospaciente');
//Route::get('/vistas',[PacientesController::class,'vistas'])->name('vistas');



                                /*Usuarios*/
Route::get('/altausuarios',[UsuariosController::class,'altausuarios'])->name('altausuarios');
Route::post('/guardarusuario',[UsuariosController::class,'guardarusuario'])->name('guardarusuario');
Route::get('/reporteusuarios',[UsuariosController::class,'reporteusuarios'])->name('reporteusuarios');
Route::get('/desactivausuario/{idusuario}',[UsuariosController::class,'desactivausuario'])->name('desactivausuario');
Route::get('/activausuario/{idusuario}',[UsuariosController::class,'activausuario'])->name('activausuario');
Route::get('/borrarusuario/{idusuario}',[UsuariosController::class,'borrarusuario'])->name('borrarusuario');
Route::get('/modificausuario/{idusuario}',[UsuariosController::class,'modificausuario'])->name('modificausuario');
Route::get('/guardacambiosusuario',[UsuariosController::class,'guardacambiosusuario'])->name('guardacambiosusuario');


                                //Tipo Usuarios//
Route::get('/altatipousuario',[TipoUsuarioController::class,'altatipousuario'])->name('altatipousuario');
Route::post('/guardartipou',[TipoUsuarioController::class,'guardartipou'])->name('guardartipou');
Route::get('/reportetipousuario',[TipoUsuarioController::class,'reportetipousuario'])->name('reportetipousuario');
Route::get('/desactivatipousuario/{idtipo_u}',[TipoUsuarioController::class,'desactivatipousuario'])->name('desactivatipousuario');
Route::get('/activatipousuario/{idtipo_u}',[TipoUsuarioController::class,'activatipousuario'])->name('activatipousuario');
Route::get('/borrartipousuario/{idtipo_u}',[TipoUsuarioController::class,'borrartipousuario'])->name('borrartipousuario');
Route::get('/modificatipousuario/{idtipo_u}',[TipoUsuarioController::class,'modificatipousuario'])->name('modificatipousuario');
Route::post('/guardacambiostipousuario',[TipoUsuarioController::class,'guardacambiostipousuario'])->name('guardacambiostipousuario');


                                //Consulta estudio//
Route::get('/altaconestudio',[ConsultaEstudioController::class, 'altaconestudio'])->name('altaconestudio');
Route::post('/guardarconestudio',[ConsultaEstudioController::class, 'guardarconestudio'])->name('guardarconestudio');
Route::get('/reporteconsultaes',[ConsultaEstudioController::class,'reporteconsultaes'])->name('reporteconsultaes');
Route::get('/desactivaconestudio/{idces}',[ConsultaEstudioController::class,'desactivaconestudio'])->name('desactivaconestudio');
Route::get('/activaconestudio/{idces}',[ConsultaEstudioController::class,'activaconestudio'])->name('activaconestudio');
Route::get('/borrarconestudio/{idces}',[ConsultaEstudioController::class,'borrarconestudio'])->name('borrarconestudio');
Route::get('/modificaconestudio/{idces}',[ConsultaEstudioController::class,'modificaconestudio'])->name('modificaconestudio');
Route::post('/guardacambiosconestudio',[ConsultaEstudioController::class,'guardacambiosconestudio'])->name('guardacambiosconestudio');
                                //EStudios//
Route::get('/altaestudios',[EstudiosController::class, 'altaestudios'])->name('altaestudios');
Route::post('/guardarestudios',[EstudiosController::class, 'guardarestudios'])->name('guardarestudios');
Route::get('/reporteestudio',[EstudiosController::class,'reporteestudio'])->name('reporteestudio');
Route::get('/desactivaestudio/{idestudio}',[EstudiosController::class,'desactivaestudio'])->name('desactivaestudio');
Route::get('/activaestudio/{idestudio}',[EstudiosController::class,'activaestudio'])->name('activaestudio');
Route::get('/borrarestudio/{idestudio}',[EstudiosController::class,'borrarestudio'])->name('borrarestudio');
Route::get('/modificaestudio/{idestudio}',[EstudiosController::class,'modificaestudio'])->name('modificaestudio');
Route::post('/guardacambiosestudio',[EstudiosController::class,'guardacambiosestudio'])->name('guardacambiosestudio');

                                //Tiposangre//
Route::get('/altatiposangre',[Tipo_sangreController::class, 'altatiposangre'])->name('altatiposangre');
Route::post('/guardartiposan',[Tipo_sangreController::class, 'guardartiposan'])->name('guardartiposan');
Route::get('/reportetiposan',[Tipo_sangreController::class,'reportetiposan'])->name('reportetiposan');
Route::get('/desactivatiposangre/{idtipossan}',[Tipo_sangreController::class,'desactivatiposangre'])->name('desactivatiposangre');
Route::get('/activatiposangre/{idtipossan}',[Tipo_sangreController::class,'activatiposangre'])->name('activatiposangre');
Route::get('/borrartiposangre/{idtipossan}',[Tipo_sangreController::class,'borrartiposangre'])->name('borrartiposangre');
Route::get('/modificatiposangre/{idtipossan}',[Tipo_sangreController::class,'modificatiposangre'])->name('modificatiposangre');
Route::post('/guardacambiostiposangre',[Tipo_sangreController::class,'guardacambiostiposangre'])->name('guardacambiostiposangre');

                            //Login//
//Route::post('/login',[LoginController::class,'login'])->name('login');

Route::get('/',[PacientesController::class,'index'])->name('index');
Route::get('/index',[PacientesController::class,'index'])->name('index');
Route::get('/menuprincipal',[PacientesController::class,'index'])->name('index');
Route::get('/eloquent',[PacientesController::class,'eloquent'])->name('eloquent');
Route::get('/reporte',[PacientesController::class, 'reporte'])->name('reporte');
