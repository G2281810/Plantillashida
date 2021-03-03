<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo_usuario;
class TipoUsuarioController extends Controller
{
    public function altatipousuario()
    {
        $consulta = tipo_usuario::orderBy('idtipo_u','DESC')->take(1)->get();
        $cuantos = count($consulta);
    if($cuantos==0)
    {
      $idesigue=1;
    }
    else
    {
      $idesigue = $consulta[0]->ide + 1;
    }
        return View('tipousuario.altatipousuario')
         ->with('idsigue',$idesigue);
    }
    public function guardartipou(Request $request)
    {
         $this->validate($request,[
             'idtipo'=>'required|numeric',
             'tipo'=>'required|regex:/^[A-Z][A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/',
         ]);
         echo "Todo correcto";

    }
}
