<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Wiki;
use Hash;

class CategoriasController extends Controller
{
//<!------------ INDEX ------------>
    public function index(){
        $categorias =\DB::table('categorias')->get();
        $lista =\DB::table('lista_de_juegos',)->orderBy('id','DESC')->get();
        
        return view('dashboard.categorias')
            ->with('lista_de_juegos', $lista)
            ->with('categorias', $categorias);
    }
//<!------------ STORE ------------>
    public function store (Request $req){
        $validacion = Validator::make ( $req->all(),[
            'name' => 'required|min:4|max:100',
            'img' => 'required|mines:jpg,png,jpeg,webp|max:2000'
        ] );
        if ($validacion->files()){
            return back()
                ->withInput()
                ->with('Error Insert','Favor de llenar todos los campos')
                ->withErrors($validacion);
        }else{
            $img = $req->file('img');
            $nombre = time().'.'.$img->getClientOriginalExtension();
            categorias::create([
                'categoria' => $req->nombre,
                'img' => $nombre
            ]);
            return back()->with('Lista', 'Se ha insertado corectamente');
        }
    }
//<!------------ DESTROY ------------>
    public function destroy ($id){
        $categorias = categorias::find($id);
        if ($categorias->img != 'default.jpg'){
            if(File::exists(public_path('categorias/'.$categorias->img))){
                unlink(public_path('categorias/'.$categorias->img));
            }
        }
        $categorias->delete();
        
        return back()->witch('Listo','El reguistro se elimino');
    }
//<!------------ UPDATE ------------>    
    public function update(Request $req){
        $validacion = Validator::make($req->all(),[
            'nombre' => 'required|min:4|max:100'    
        ]);
    if ($validacion->fails()){
        return back()
            ->withInput()
            ->with('ErrorInsert', 'Favor de llenar todos los campos')
            ->withErrors($validacion);
        }else{
            $validacion = Validator::make($req->all().[
                'img' => 'required|mimes:jpg,png,jpeg,webp|max:2000'
            ]);
            $registro = categorias::fild($req->id);
            if($validacion->file()){
                $registro->categorias=$req->nombre;
                $registro->save();
            }else{
                if($validacion->img != 'default.jpg'){
                    if (File::exists(public_path('categorias/'.$registro->img))){
                        unlink(public_path('categorias/'.$registro->img));
                    }
                    $img = $req->file('img');
                    $nombre = time().'.'. $img->getClientOriginalExtension();

                }
            }
        }
    
    }
//<!------------ INSERTAR ------------>    
    public function insertar(Request $req){
        $validacion = Validator::make( $req->all(),[
            'nombre'=>'required|min:5|max:20',
            'categorias'=>'required',
            'img'=>'required|mimes:jpg,png,jpeg,webp|max:2000'
        ]);
        //echo "si Jala";
        if ($validacion->fails()){
            return back()
            ->withInput()
            ->with('ErrorInsert','Favor de llenar los campos')           
            ->withErrors($validacion);
            //echo "Favor de llenar todos los campos";
        }else{
            $ti=Hash::make(random(0,9999999));
            $img=$req->file('img');
            $name = time().'.'.$img->getClientOrginalExtension();
            $destination_path=public_path('Wiki');//Trae la Carpeta de Wiki que esta en public
            $req->img->move($destination_path, $name);

            $nuevo = Wiki::create([
                'nombre'=> $req->nombre,
                'categorias'=>$req->categorias,
                'img'=>$name
            ]);
        }
    }
}
