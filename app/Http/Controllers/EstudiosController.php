<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\estudio;
use Session;

class EstudiosController extends Controller
{
    public function altaestudios()
    {
        $consulta =estudio::orderBy('idestudio','DESC')->take(1)->get();
        $cuantos = count($consulta);
    if($cuantos==0)
    {
      $idesigue=1;
    }
    else
    {
      $idesigue = $consulta[0]->idestudio + 1;
    }
        return view('estudios.altaestudios')
        ->with('idsigue',$idesigue);
    }
    public function guardarestudios(Request $request)
    {
        $this->validate($request,[
            'idestudio'=>'required|numeric',
            'nombree'=> 'required|regex:/^[A-Z,a-z, ,á,é,í,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/',
            'tipoes'=>'required|regex:/^[A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/',

        ]);
        echo "Todo correcto";
        $estudio= new estudio;
        $estudio->idestudio=$request->idestudio;
        $estudio->nombre=$request->nombree;
        $estudio->tipo=$request->tipoes;
        $estudio->save();
        Session::flash('mensaje', "$request->nombree ha sido dado de alta correctamente.");
        return redirect()->route('reporteestudio');
    }
    public function reporteestudio()
    {
        $consulta = estudio::
        select('estudios.idestudio','estudios.nombre','estudios.tipo')
        ->orderBy('estudios.nombre')
        ->get();
        return view('estudios.reporteestudio')->with('consulta',$consulta);
    }
    
}
