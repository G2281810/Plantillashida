<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\consulta_estudio;
use App\Models\consulta;
use App\Models\estudio;
use App\Models\pacientes;
use Session;
class ConsultaEstudioController extends Controller
{
    public function altaconestudio()
    {
        $consulta =consulta_estudio::withTrashed()->orderBy('idces','DESC')->take(1)->get();
        $cuantos = count($consulta);
    if($cuantos==0)
    {
      $idesigue=1;
    }
    else
    {
      $idesigue = $consulta[0]->idces + 1;
    }
        $paciente = pacientes::orderBy('nombre')->get();
        $consultas = consulta::orderBy('idconsulta')->get();
        $estudio = estudio::orderBy('nombre')->get();
        return view('consultaestudio.altaconestudio')
        ->with('idsigue',$idesigue)
        ->with('consultas',$consultas)
        ->with('paciente',$paciente)
        ->with('estudio',$estudio);
    }
    public function guardarconestudio(Request $request)
    {
        $this->validate($request,[
         'idconestudio'=>'required|numeric',
         'idcon'=>'required',
         'idestudio'=>'required',
         'idpaciente'=>'required',
         'fechaestudio'=>'required',
         'horaestudio'=>'required',
         'obser'=>'regex:/^[A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/',
         //'img'=>'image|mimes:gif,jpg,png'
        ]);
        $consulta_estudio = new consulta_estudio;
        $consulta_estudio ->idces=$request->idconestudio;
        $consulta_estudio ->idconsulta=$request->idcon;
        $consulta_estudio ->idestudio=$request->idestudio;
        $consulta_estudio ->idpaciente=$request->idpaciente;
        $consulta_estudio ->fecha_estudio=$request->fechaestudio;
        $consulta_estudio ->hora_estudio = $request->horaestudio;
        $consulta_estudio ->observaciones=$request->obser;
        $consulta_estudio ->save();
        Session::flash('mensaje', "El Estudio ha sido dado de alta correctamente.");
        return redirect()->route('reporteconsultaes');
    }
    public function reporteconsultaes()
    {
      $consulta = consulta_estudio::withTrashed()->join('estudios','consulta_estudios.idestudio','=','estudios.idestudio')
          ->join('pacientes','consulta_estudios.idpaciente','=','pacientes.idpaciente')
          ->select('consulta_estudios.idces','consulta_estudios.fecha_estudio','consulta_estudios.deleted_at', 'consulta_estudios.hora_estudio','estudios.nombre as estudio','pacientes.apellidop','pacientes.nombre as paciente')
          ->orderBy('pacientes.nombre')
          ->get();
          return view('consultaestudio.reporteconsultaes')->with('consulta',$consulta);
    }
  public function desactivaconestudio($idces)
  {
    $consulta_estudio = consulta_estudio::find($idces);
    $consulta_estudio->delete();
    Session::flash('mensaje', "La consulta estudio fue desactivada correctamente.");
      return redirect()->route('reporteconsultaes');
  }
  public function activaconestudio($idces)
  {

    $consulta_estudio = consulta_estudio::withTrashed()->where('idces',$idces)->restore();
    Session::flash('mensaje', "La consulta estudio ha sido activada correctamente.");
      return redirect()->route('reporteconsultaes');
  }
  public function borrarconestudio($idces)
  {
     $consulta_estudio=consulta_estudio::withTrashed()->find($idces)->forceDelete();
     Session::flash('mensaje', "La consulta estudio ha sido eliminda del sistema correctamente.");
    return redirect()->route('reporteconsultaes');

  }
  public function modificaconestudio($idces)
  {
     $consulta = consulta_estudio::withTrashed()->join('estudios','consulta_estudios.idestudio','=','estudios.idestudio')
          ->join('pacientes','consulta_estudios.idpaciente','=','pacientes.idpaciente')
          ->join('consultas','consulta_estudios.idconsulta','=','consultas.idconsulta')
          ->select('consulta_estudios.idces','consulta_estudios.fecha_estudio','consulta_estudios.observaciones',
           'consulta_estudios.hora_estudio',
          'estudios.nombre as estudio','pacientes.apellidop','pacientes.nombre as paciente','consultas.idconsulta as consultas')
    ->where('idces',$idces)
    ->get();
    $paciente = pacientes::all();
    $consultas = consulta::all();
    $estudio = estudio::all();
    return view('consultaestudio.modificaconestudio')
    ->with('consulta',$consulta[0])
    ->with('pacientes', $paciente)
    ->with('estudios',$estudio)
    ->with('consultas',$consultas);



  }
   public function guardacambiosconestudio(Request $request){
    $this->validate($request,[
      
      'idcon'=>'required',
      'idestudio'=>'required',
      'idpaciente'=>'required',
      'fechaestudio'=>'required',
      'horaestudio'=>'required',
      'obser'=>'regex:/^[A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/',
    ]);
      $consulta_estudio = consulta_estudio::withTrashed()->find($request->idces);
      $consulta_estudio ->idces=$request->idces;
      $consulta_estudio ->idconsulta=$request->idcon;
      $consulta_estudio ->idestudio=$request->idestudio;
      $consulta_estudio ->idpaciente=$request->idpaciente;
      $consulta_estudio ->fecha_estudio=$request->fechaestudio;
      $consulta_estudio ->hora_estudio = $request->horaestudio;
      $consulta_estudio ->observaciones=$request->obser;
      $consulta_estudio ->save();
    Session::flash('mensaje', " La consulta estudio ha sido modificada correctamente.");
    return redirect()->route('reporteconsultaes');
  }
   
}
