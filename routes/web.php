<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\TallaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransbankController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/',[ProductoController::class,'catalogo']);



Route::post("/register", [UserController::class,'register']);
Route::post("/login", [UserController::class,'login']);
Route::resource('/productos', ProductoController::class);
Route::resource('/categorias', CategoriaController::class);
Route::resource('/tallas', TallaController::class);
route::get('productos/{producto}/verProducto','App\Http\Controllers\ProductoController@verProducto')->name('productos.verProducto');
Route::post("agregar_Al_Carro",[ProductoController::class,'agregarAlCarro']);
Route::get("/listar_Carro",[ProductoController::class,'listarCarro']);
Route::get("/quitarproducto/{carro_id}",[ProductoController::class,'quitarProducto']);
Route::any("/comprar/",[ProductoController::class,'Comprar']);
route::any('iniciar_compra','App\Http\Controllers\TransbankController@iniciar_compra')->name('iniciar_compra');
route::any('confirmar_pago','App\Http\Controllers\TransbankController@confirmar_pago')->name('confirmar_pago');
