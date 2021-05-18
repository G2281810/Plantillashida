<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\odontologos;
use App\Models\municipios;
use App\Models\especialidades;
use App\Models\consultas;
use Session;

class OdontologosController extends Controller
{
    public function alta_odontologos(){
        $consulta = odontologos::orderBy('idodo','DESC')
            ->take(1)->get();

        $cuantos = count($consulta);
        if ($cuantos==0) {
            $idesigue = 1;
        } else {
            $idesigue = $consulta[0]->idodo + 1;
        }

        $municipios = municipios::orderBy('nombre')->get();
        $especialidades = especialidades::orderBy('especialidad')->get();

        return view('odontologos.alta')
            ->with('idesigue',$idesigue)
            ->with('municipios',$municipios)
            ->with('especialidades',$especialidades);
    }

    public function guardar_odontologos(Request $request){

        $this->validate($request,[
            'nombre'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ü]+$/',
            'appaterno'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ü]+$/',
            'apmaterno'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ü]+$/',
            'edad'=> 'required|regex:/^[0-9]{2}$/',
            'telefono'=> 'required|regex:/^[0-9]{10}$/',
            'correo'=> 'required|email',
            'password'=> 'required|alpha_num',
            'calle'=> 'required|regex:/^[A-Z]*[A-Z,a-z,0-9, ,á,é,í,ó,ú,ü]+$/',
            'numint'=> 'required|regex:/^[A-Z]*[A-Z,a-z,0-9, ,á,é,í,ó,ú,ü]+$/',
            'numext'=> 'required|regex:/^[A-Z]*[A-Z,a-z,0-9, ,á,é,í,ó,ú,ü]+$/',
            'colonia'=> 'required|regex:/^[A-Z]*[A-Z,a-z,0-9, ,á,é,í,ó,ú,ü,]+$/',
            'hora_entrada'=> 'required',
            'hora_salida'=> 'required',
            'img'=>'image|mimes:gif,jpeg,png'
        ]);

            $file = $request->file('img');
              if($file<>""){
                $img = $file->getClientOriginalName();
                $img2 = $request->idodo . $img;
                \Storage::disk('local')->put($img2, \File::get($file));
              }
              else{
                $img2 = "sinfoto.png";
              }

        $odontologos = new odontologos;
        $odontologos->idodo = $request->idodo;
        $odontologos->nombre = $request->nombre;
        $odontologos->appaterno = $request->appaterno;
        $odontologos->apmaterno = $request->apmaterno;
        $odontologos->sexo = $request->sexo;
        $odontologos->edad = $request->edad;
        $odontologos->telefono = $request->telefono;
        $odontologos->correo = $request->correo;
        $odontologos->password = $request->password;
        $odontologos->calle = $request->calle;
        $odontologos->numint = $request->numint;
        $odontologos->numext = $request->numext;
        $odontologos->idmun = $request->idmun;
        $odontologos->colonia = $request->colonia;
        $odontologos->idesp = $request->idesp;
        $odontologos->hora_entrada = $request->hora_entrada;
        $odontologos->hora_salida = $request->hora_salida;
        $odontologos->img = $img2;
        $odontologos->save();

        // return $request;
            Session::flash('mensaje',"El Odontologo $request->nombre sido creado correctamente");

            return redirect()->route('reportes_odontologos');


    }

    public function reportes_odontologos(){
        $consulta = odontologos::withTrashed()->join('municipios','odontologos.idmun','=','municipios.idmun')
        ->join('especialidades','odontologos.idesp','=','especialidades.idesp')
        ->select('odontologos.idodo','odontologos.nombre','odontologos.appaterno','odontologos.apmaterno',
        'odontologos.sexo','odontologos.edad','odontologos.telefono','odontologos.correo',
        'odontologos.password','odontologos.calle','odontologos.numint','odontologos.numext','odontologos.colonia',
        'odontologos.hora_entrada','odontologos.hora_salida',
        'municipios.nombre as municipio','especialidades.especialidad as esp', 'odontologos.deleted_at','odontologos.img')
        ->orderBy('odontologos.appaterno','desc')
        ->get();

        // return $consulta;
        return view('odontologos.reportes')
            -> with('consulta',$consulta);
    }

    public function desactivar_odontologos($idodo){
        $odontologos=odontologos::find($idodo);
        $odontologos->delete();

        Session::flash('mensaje',"El odontologo ha sido desactivado correctamente");

        return redirect()->route('reportes_odontologos');
    }

    public function activar_odontologos($idodo){
        $odontologos=odontologos::withTrashed()->where('idodo',$idodo)->restore();

        Session::flash('mensaje',"El odontologo sido activado correctamente");

        return redirect()->route('reportes_odontologos');

    }

    public function eliminar_odontologos($idodo){
        $buscaconsultas = consultas::where('idodo',$idodo)->get();
        $cuantos = count($buscaconsultas);
        if($cuantos==0)
        {
            $odontologos=odontologos::withTrashed()->find($idodo)->forceDelete();
            Session::flash('mensaje',"El odontologo ha sido eliminado del sistema correctamente");

            return redirect()->route('reportes_odontologos');
        }
        else{

            Session::flash('mensaje',"El odontologo no se puede eliminar por que tiene
                                        registros en otras tablas");

            return redirect()->route('reportes_odontologos');

        }
    }

    public function modifica_odontologos($idodo){

        $consulta = odontologos::withTrashed()->join('municipios','odontologos.idmun','=','municipios.idmun')
                                              ->join('especialidades','odontologos.idesp','=','especialidades.idesp')
                    ->select('odontologos.idodo','odontologos.nombre','odontologos.appaterno','odontologos.apmaterno',
                             'odontologos.sexo','odontologos.edad','odontologos.telefono','odontologos.correo',
                             'odontologos.password','odontologos.calle','odontologos.numint','odontologos.numext','municipios.nombre as m',
                             'odontologos.colonia','especialidades.especialidad as especi','odontologos.hora_entrada','odontologos.hora_salida',
                             'odontologos.idmun','odontologos.idesp','odontologos.img')
                    ->where('idodo',$idodo)
                    ->get();

                    $municipios = municipios::all();
                    $especialidades = especialidades::all();


        // $consulta = medicamentos::withTrashed()->join('tipo_medicamentos','medicamentos.idtipomed','=','tipo_medicamentos.idtipomed')
        // ->select('medicamentos.idmed','medicamentos.nombre','tipo_medicamentos.tipo as tm','medicamentos.presentacion',
        //         'medicamentos.susta_activa','medicamentos.idtipomed')
        // ->where('idmed',$idmed)
        // ->get();

        //  $tipo_medicamentos = tipo_medicamentos::all();
         return view('odontologos.modifica')
        ->with('consulta',$consulta[0])
        ->with('municipios',$municipios)
        ->with('especialidades',$especialidades);
    }

    public function cambio_odontologos(Request $request){
        $this->validate($request,[
            'nombre'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ü]+$/',
            'appaterno'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ü]+$/',
            'apmaterno'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ü]+$/',
            'edad'=> 'required|regex:/^[0-9]{2}$/',
            'telefono'=> 'required|regex:/^[0-9]{10}$/',
            'correo'=> 'required|email',
            'password'=> 'required|alpha_num',
            'calle'=> 'required|regex:/^[A-Z]*[A-Z,a-z,0-9, ,á,é,í,ó,ú,ü]+$/',
            'numint'=> 'required|regex:/^[A-Z]*[A-Z,a-z,0-9, ,á,é,í,ó,ú,ü]+$/',
            'numext'=> 'required|regex:/^[A-Z]*[A-Z,a-z,0-9, ,á,é,í,ó,ú,ü]+$/',
            'colonia'=> 'required|regex:/^[A-Z]*[A-Z,a-z,0-9, ,á,é,í,ó,ú,ü,]+$/',
            'hora_entrada'=> 'required',
            'hora_salida'=> 'required',
            'img'=>'image|mimes:gif,jpeg,png'
        ]);

        $file = $request->file('img');
        if($file<>""){
        $img = $file->getClientOriginalName();
        $img2 = $request->ide . $img;
        \Storage::disk('local')->put($img2, \File::get($file));
        }

        $odontologos = odontologos::withTrashed()->find($request->idodo);
        $odontologos->idodo = $request->idodo;
        $odontologos->nombre = $request->nombre;
        $odontologos->appaterno = $request->appaterno;
        $odontologos->apmaterno = $request->apmaterno;
        $odontologos->sexo = $request->sexo;
        $odontologos->edad = $request->edad;
        $odontologos->telefono = $request->telefono;
        $odontologos->correo = $request->correo;
        $odontologos->password = $request->password;
        $odontologos->calle = $request->calle;
        $odontologos->numint = $request->numint;
        $odontologos->numext = $request->numext;
        $odontologos->idmun = $request->idmun;
        $odontologos->colonia = $request->colonia;
        $odontologos->idesp = $request->idesp;
        $odontologos->hora_entrada = $request->hora_entrada;
        $odontologos->hora_salida = $request->hora_salida;
        if($file<>""){
        $odontologos->img = $img2;
        }
        $odontologos->save();


        // dd($request);

        Session::flash('mensaje',"El odontologo $request->nombre $request->appaterno ha sido modificado");

        return redirect()->route('reportes_odontologos');
      }

    public function descarga_imagen($img){
      $pathtoFile = public_path().'//archivos/'. $img;
      return response()->download($pathtoFile);
    }
}
