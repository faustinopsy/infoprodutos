<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ProdutosController;
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
    return view('home');
});
Route::get('/login', function () {
    return view('/auth/login');
});
Route::get('/cadastrar', function () {
    return view('/auth/register');
});

Route::get('/contato', [ContatoController::class, 'index']);
Route::get('/produtos', [ProdutosController::class, 'home']);
Route::post('/register', [RegisterController::class, 'create']);
Route::get('/produtos/create', [ProdutosController::class, 'create'])->name('produtos.create');
Route::post('produtos/buscar', [ProdutosController::class, 'buscar'])->name('produtos.buscar');
Route::get('/produtos/{id}/edit', [ProdutosController::class, 'edit'])->name('produtos.edit');
Route::put('/produtos/update/{id}', [ProdutosController::class, 'update'])->name('produtos.update');
Route::get('/produtos/{id}', [ProdutosController::class, 'show'])->name('produtos.show');
Route::post('/produtos/store', [ProdutosController::class, 'store'])->name('produtos.store');
Route::delete('/produtos/destroy/{id}', [ProdutosController::class, 'destroy'])->name('produtos.destroy');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::group(array('prefix'=>'api'),function(){
    Route::resource('produtos', ProdutosController::class);
});