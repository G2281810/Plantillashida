<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo_sangres;

class Tipo_sangreController extends Controller
{
    public function tiposangre()
    {
    $consulta = tipo_sangres::orderBy('idtipossan','DESC')->take(1)->get();
    $cuantos = count($consulta);

         if($cuantos==0)
         {
          $idesigue=1;
         }
         else
         {
          $idesigue = $consulta[0]->ide + 1;
         }
        return view('tiposangre.altatiposangre')
        ->with('idsigue',$idesigue);
    }
    public function guardartiposan(Request $request)
    {
        $this->validate($request,[
             'idtiposan'=>'required|numeric',
             'tipos'=>'required|regex:/^[A-Z][A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/',
         ]);
         echo "Todo correcto";

    }
}
