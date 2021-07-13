<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\UsuariosExport;
use App\Imports\UsuariosImport;
use Maatwebsite\Excel\Excel;
use App\Models\tipo_usuario;
use Session;
use DataTables;
use PDF;
use App\Models\usuarios;
class UsuariosController extends Controller
{

   private $excel;
    public function __construct(Excel $excel){
      $this->excel = $excel;
    }

    //DATATABLES////////////////////
    public function index(Request $request){
        if($request->ajax()){
                $data = usuarios::latest()->get();
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('otros', function($row){
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Edit"
                      class="edit btn btn-primary btn-sm editCustomer">Editar</a>';
                    $btn = $btn. '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Delete"
                      class="btn btn-danger btn-sm deleteCustomer">Borrar</a>';
                      return $btn;
                })
                    ->rawColumns(['otros'])
                    ->make(true);
            }
        return view('usuarios/usuarios');
    }
    public function store(Request $request){
        if($request->Customer_id != ''){
          usuarios::where('id', $request->Customer_id)->update([
            'numusuario' => $request->numusuario,
            'nombre' => $request->nombre,
            'apellidop' => $request->apellidop,
            'sexo' => $request->sexo,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'tipou' => $request->tipou
          ]);
        }
        else{
          usuarios::create($request->only('numusuario', 'nombre', 'apellidop', 'sexo', 'telefono', 'correo', 'tipou'));
        }
        return response()->json(['success'=>'El Usuario se guardo correctamente...!!!']);
      }

    public function edit($id){
      $query = usuarios::find($id);
      return response()->json($query);
    }

    public function destroy($id){
      usuarios::find($id)->delete();
      return response()->json(['success'=>'El usuario se elimino correctamente...!!!']);
    }
  //public function reporteusuarios()
  //{
  // $consulta = usuarios::withTrashed()->join('tipo_usuarios','usuarios.idtipo_u','=','tipo_usuarios.idtipo_u')
  //->select('usuarios.idusuario','usuarios.nombre','usuarios.apellidom','tipo_usuarios.tipo as tipo','usuarios.deleted_at','usuarios.apellidop','usuarios.telefono','usuarios.edad','usuarios.correo')
  //->orderBy('usuarios.nombre')
  //->get();
  //return view('usuarios.reporteusuarios')->with('consulta',$consulta);
  //}

  //PDF//
  public function PdfUsuarios()
    {
        $pdfusu = Usuarios::all();
        $pdf = PDF::loadView('pdf', compact('pdfusu'));
        return $pdf->download('pdf_usuarios.pdf');
    }
  public function export(){
      return $this->excel->download(new UsuariosExport, 'usuarios.xlsx');
    }
    public function import(){
      $this->excel->import(new UsuariosImport, request()->file('file'));
      return back();
    }
}
