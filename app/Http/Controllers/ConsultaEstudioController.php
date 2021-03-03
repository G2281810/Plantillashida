<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\consulta_estudio;
use App\Models\consulta;
use App\Models\estudio;


class ConsultaEstudioController extends Controller
{
    public function altaconestudio()
    {
        $consulta = consulta::orderBy('idconsulta')->get();
        $estudio = estudio::orderBy('nombre')->get();
        return view('consultaestudio.altaconestudio')
        ->with('consulta',$consulta)
        ->with('estudio',$estudio);
    }
    public function guardarconestudio(Request $request)
    {
        $this->validate($request,[
         'idconestudio'=>'required|numeric',
         'idcon'=>'required',
         'ides'=>'required',
         'obser'=>'regex:/^[A-Z][A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/',
         //'img'=>'image|mimes:gif,jpg,png'
        ]);
        echo "Todo correcto";
    }
   
}
