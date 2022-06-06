<?php

namespace App\Http\Controllers\dashboard;
 
use App\Http\Controller\Controller;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        return view('dashboard.categoria');
    }
}
