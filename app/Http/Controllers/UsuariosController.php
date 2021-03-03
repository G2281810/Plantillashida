<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\usuario;
use App\Models\tipo_usuario;
class UsuariosController extends Controller
{
    public function altausuarios()
    {
        $tipousuario = tipo_usuario::orderBy('tipo')->get();
        $consulta = usuario::orderBy('idusuario','DESC')->take(1)->get();
        $cuantos = count($consulta);
         if($cuantos==0)
        {   
         $idesigue=1;
        }
         else
        {
      $idesigue = $consulta[0]->ide + 1;
        }
        return view('usuarios.altausuarios', compact('tipousuario'))
        ->with('idsigue',$idesigue)
        ->with('idsigue',$idesigue)
        ->with('tipousuario',$tipousuario);
        
    }
    public function guardarusuario(Request $request)
    {
        $this->validate($request,[
            'idusuario'=> 'required|regex:/^[U][S][U][-][0-9]{4}$/',
            'nombre'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/',
            'apellidop'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/',
            'apellidom'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/',
            'edad'=> 'required|regex:/^[0-99]{2}+$/',
            'telefono'=> 'required|regex:/^[0-9]{10}$/',
            'correo'=> 'required|email',
            'idu' => 'required',
        ]);
        echo "Todo correcto";
    }
}
