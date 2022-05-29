<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\JuegosController;

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

Route::get('/', function () {return view('fronts.index');});
Route::get('/admin', function () {return view('dashboard.index');});
Route::get('/admin/categorias', function () { return view('dashboard.categorias');});
Route::get('/admin/lista_de_juegos', [JuegosController::class, 'miFuncion']);

//Route::get('/admin', function () { return View('das');  });
Route::get('admin/lista_de_juegos', function () { return view('dashboard.lista_de_juegos');});


Route::get('/Contenido', function () {
    $color='#fA0011';
    $usuario="Dorado Aragon";
    $num=rand(1,50);
    return view('fronts.lista_de_juegos')
            ->with('colorset', $color)
            ->with('ususario', $ususario)
            ->with('numero', $num);
    
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
