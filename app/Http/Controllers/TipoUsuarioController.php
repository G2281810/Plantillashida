<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo_usuario;
use Session;
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
      $idesigue = $consulta[0]->idtipo_u + 1;
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
        $tipousuario = new tipo_usuario;
        $tipousuario ->idtipo_u=$request->idtipo;
        $tipousuario ->tipo=$request->tipo;
        $tipousuario->save();
        Session::flash('mensaje', "El usuario $request->nombre $request->apellidop ha sido dado de alta correctamente.");
        return redirect()->route('reportetipousuario');
    }
    public function reportetipousuario()
  {
   $consulta = tipo_usuario::
          select('tipo_usuarios.idtipo_u','tipo_usuarios.tipo')
          ->orderBy('tipo_usuarios.tipo')
          ->get();
          return view('tipousuario.reportetipousuarios')->with('consulta',$consulta);
  }
}

