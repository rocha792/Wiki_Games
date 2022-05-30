<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JuegosController extends Controller
{
    public function miFuncion(){
        $categorias =\DB::table('categorias')->get();
        return view('dashboard.categorias')->with('categorias', $categorias);
    }
}
