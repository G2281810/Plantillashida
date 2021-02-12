<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'idpaci'=> 'required|regex:/^[P][A][C][-][0-9]{4}$/'
        ]);
        echo "Todo correcto";
    }
}

