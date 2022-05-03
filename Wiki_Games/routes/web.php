<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('fronts.index');
});
Route::get('/Inicio', function () {
    echo("Hola Estas en Wiki Games");
    
});
Route::get('/Contenido', function () {
    $color='#fA0011';
    $usuario="Dorado Aragon";
    $num=rand(1,50);
    return view('Lista:Juegos')
            ->with('colorset', $color)
            ->with('ususario', $ususario)
            ->with('numero', $num);
    
});