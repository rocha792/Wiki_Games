<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Wiki;
use Hash;

class CategoriasController extends Controller
{
    public function index(){
        $categorias =\DB::table('categorias')->get();
        $lista_de_juegos =\DB::table('WikiG',)->orderBy('id','DESC')->get();
        return view('dashboard.categorias')
            ->with('WikiG', $lista_de_juegos)
            ->with('categorias', $categorias);
    }
    public function insertar( Request $req ){
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
