<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\usuarios;
use App\Models\tipo_usuario;
use Session;
class UsuariosController extends Controller
{
    public function altausuarios()
    {
      
        $consulta = usuarios::orderBy('idusuario','DESC')->take(1)->get();
        $cuantos = count($consulta);
         if($cuantos==0)
        {   
         $idesigue=1;
        }
         else
        {
      $idesigue = $consulta[0]->idusuario + 1;
        }
        $tipousuario = tipo_usuario::orderBy('tipo')->get();
        $tipousuario = tipo_usuario::orderBy('tipo')->get();
        return view('usuarios.altausuarios', compact('tipousuario'))
        ->with('idsigue',$idesigue)
        ->with('tipousuario',$tipousuario);
        
    }
    public function guardarusuario(Request $request)
    {
        $this->validate($request,[
            
            'nombre'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü,ñ]+$/',
            'apellidop'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü,ñ]+$/',
            'apellidom'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü,ñ]+$/',
            'edad'=> 'required|regex:/^[0-99]{2}+$/',
            'telefono'=> 'required|regex:/^[0-9]{10}$/',
            'correo'=> 'required|email',
            'idtipo_u' => 'required',
        ]);
        $usuario = new usuarios;
        $usuario ->idusuario=$request->idusuarios;
        $usuario ->nombre=$request->nombre;
        $usuario ->apellidop=$request->apellidop;
        $usuario ->apellidom=$request->apellidom;
        $usuario ->edad=$request->edad;
        $usuario ->sexo = $request->sexo;
        $usuario ->telefono=$request->telefono;
        $usuario ->correo=$request->correo;
        $usuario ->idtipo_u=$request->idtipo_u;
        
        $usuario ->save(); 
      Session::flash('mensaje', "El usuario $request->nombre $request->apellidop ha sido dado de alta correctamente.");
      return redirect()->route('reporteusuarios');
    }
      public function reporteusuarios()
  {
   $consulta = usuarios::join('tipo_usuarios','usuarios.idtipo_u','=','tipo_usuarios.idtipo_u')
          ->select('usuarios.idusuario','usuarios.nombre','usuarios.apellidom','tipo_usuarios.tipo as tipo','usuarios.apellidop','usuarios.telefono','usuarios.edad','usuarios.correo')
          ->orderBy('usuarios.nombre')
          ->get();
          return view('usuarios.reporteusuarios')->with('consulta',$consulta);
  }
}
