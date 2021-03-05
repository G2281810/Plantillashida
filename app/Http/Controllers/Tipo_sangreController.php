<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo_sangres;
use Session;
class Tipo_sangreController extends Controller
{
    public function altatiposangre()
    {
    $consulta = tipo_sangres::orderBy('idtipossan','DESC')->take(1)->get();
    $cuantos = count($consulta);

         if($cuantos==0)
         {
          $idesigue=1;
         }
         else
         {
          $idesigue = $consulta[0]->idtipossan + 1;
         }
        return view('tiposangre.altatiposangre')
        ->with('idsigue',$idesigue);
    }
    public function guardartiposan(Request $request)
    {
        $this->validate($request,[
             'idtiposan'=>'required|numeric',
             'tipos'=>'required|regex:/^[A-Z][A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü,+,-]+$/',
         ]);
        $tipo_sangres = new tipo_sangres;
        $tipo_sangres ->idtipossan=$request->idtiposan;
        $tipo_sangres->tipo=$request->tipos;
        $tipo_sangres ->save();
      Session::flash('mensaje', "El tipo de sangre $request->nombre $request->apellidop ha sido dado de alta correctamente.");
      return redirect()->route('reportetiposan');
    }
    public function reportetiposan()
    {
        $consulta = tipo_sangres::
          select('tipo_sangres.idtipossan','tipo_sangres.tipo')
          ->orderBy('tipo_sangres.idtipossan')
          ->get();
          return view('tiposangre.reportetiposan')->with('consulta',$consulta);
    }
}
