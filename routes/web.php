<?php

use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\DatabaseController;
use Dflydev\DotAccessData\Data;
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




Route::get('/index', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/',function(){
    return view('inicio');
});
Route::get('/biblioteca',[BibliotecaController::class,'index']);
Route::get('/carrinho', [CarrinhoController::class,'index']);

Route::post('/biblioteca/database/pesquisa',[DatabaseController::class,'pesquisa']);
Route::post('/biblioteca/database/categoria',[DatabaseController::class,'categoria']);
