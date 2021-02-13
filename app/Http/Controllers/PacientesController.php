<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pacientes;

class PacientesController extends Controller
{
    public function altapacientes()
    {
        return view('altapacientes');
    }
    public function index()
    {
        return view('index');
    }
    public function guardarpaciente(Request $request)
    {
        $this->validate($request,[
            'idpaci'=> 'required|regex:/^[P][A][C][-][0-9]{4}$/',
            'nombre'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/',
            'apellidop'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/',
            'apellidom'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/',
            'edad'=> 'required|regex:/^[0-99]{2}+$/',
            'telefono'=> 'required|regex:/^[0-9]{10}$/',
            'correo'=> 'required|email',
            'alergias'=> 'regex:/^[A-Z][A-Z,a-z, ,á,é,i,ó,ú,ü,Á,É,Í,Ó,Ú,Ü]+$/'
        ]);
        echo "Todo correcto";
    }
    public function eloquent()
    {
        $pacientes = new pacientes;
        $pacientes ->idpaci = 2;
        $pacientes ->nombre = "Gustavo";
        $pacientes ->apellidop = "Santos";
        $pacientes ->apellidom = "Clemente";
        $pacientes ->sexo = "M";
        $pacientes ->edad = 20;
        $pacientes ->idtipossan=1;
        $pacientes ->telefono="7291500635";
        $pacientes ->correo="al221810743@gmail.com";
        $pacientes ->preguntaale="Si";
        $pacientes ->alergias="Al paracetamol";
        $pacientes ->activo="SI";
        $pacientes ->save();
        return "Registro Creado exitosamente";
    }
}

