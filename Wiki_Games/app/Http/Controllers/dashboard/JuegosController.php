<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use validator;

class JuegosController extends Controller
{
    public function miFuncion(){
        $categorias =\DB::table('categorias')->get();
        return view('dashboard.categorias')->with('categorias', $categorias);
    }
    public function insertar( Request $req ){
        $validacion = Validator::make( $req->all(), [
            'nombre'=>'required|min:5|max:20',
            'categorias'=>'required',
            'img'=>'required|mimes:jpg,png,jpeg,webp|max:2000'
        ]);
        //echo "si Jala";
        if ($validacion->fails()){
            return back()
            ->withInput()
            ->with('ErrorInsert','Favor de llenar los campos')           
            ->withErrors($validacion)
            ;
            //echo "Favor de llenar todos los campos";
        }else{
            //echo "Funciona correctamente"
        }
    }
}
