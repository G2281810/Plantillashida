<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\estudio;

class EstudiosController extends Controller
{
    public function estudios()
    {
        $consulta =estudio::orderBy('idestudio','DESC')->take(1)->get();
        $cuantos = count($consulta);
    if($cuantos==0)
    {
      $idesigue=1;
    }
    else
    {
      $idesigue = $consulta[0]->ide + 1;
    }
        return view('estudios.altaestudios')
        ->with('idsigue',$idesigue);
    }
    public function guardarestudios(Request $request)
    {
        $this->validate($request,[
            'idestudio'=>'required|numeric',
            'nombree'=> 'required|regex:/^[A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/',
            'tipoes'=>'required|regex:/^[A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/',

        ]);
        echo "Todo correcto";
    }
}
