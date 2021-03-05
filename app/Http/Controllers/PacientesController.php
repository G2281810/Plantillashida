<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pacientes;
use App\Models\tipo_sangres;
use Session;
class PacientesController extends Controller
{
    public function altapacientes()
    {
        $tipossan = tipo_sangres::all();
        $consulta = pacientes::orderBy('idpaciente','DESC')->take(1)->get();
        $cuantos = count($consulta);
    if($cuantos==0)
    {
      $idesigue=1;
    }
    else
    {
      $idesigue = $consulta[0]->idpaciente + 1;
    }
        return view('pacientes.altapacientes', compact('tipossan'))
        ->with('idsigue',$idesigue);
    }
    public function index()
    {
        return view('index');
    }
    public function guardarpaciente(Request $request)
    {
        $this->validate($request,[
            'nombre'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/',
            'apellidop'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ñ,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/',
            'apellidom'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/',
            'edad'=> 'required|regex:/^[0-99]{2}+$/',
            'telefono'=> 'required|regex:/^[0-9]{10}$/',
            'correo'=> 'required|email',
            'idtipossan'=>'required',
            'alergias'=> 'regex:/^[A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/'
        ]);
        $pacientes = new pacientes;
        $pacientes ->idpaciente=$request->idpaciente;
        $pacientes ->nombre=$request->nombre;
        $pacientes ->apellidop=$request->apellidop;
        $pacientes ->apellidom=$request->apellidom;
        $pacientes ->edad=$request->edad;
        $pacientes ->sexo = $request->sexo;
        $pacientes ->telefono=$request->telefono;
        $pacientes ->correo=$request->correo;
        $pacientes ->idtipossan=$request->idtipossan;
        $pacientes->preguntaale = $request->preguntaale;
        $pacientes ->alergias=$request->alergias;
        $pacientes ->save(); 
      Session::flash('mensaje', "El empleado $request->nombre $request->apellidop ha sido dado de alta correctamente.");
      return redirect()->route('reportepacientes');
        
    }
     public function reportepacientes()
  {
    $consulta = pacientes::
          select('pacientes.idpaciente','pacientes.nombre','pacientes.apellidop','pacientes.apellidom','pacientes.edad',
         'pacientes.telefono','pacientes.correo','pacientes.alergias',)
          ->orderBy('pacientes.nombre')
          ->get();
          return view('pacientes.reportepacientes')->with('consulta',$consulta);
  }
}

