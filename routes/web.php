<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductoController;

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

// Route::get('/', 'App\Http\Controllers\PageController@home');
// o tambien:

Route::get('/', [PageController::class,'home']);
Route::get('/quienes-somos', [PageController::class,'quienesSomos']);
Route::get('/contacto', [PageController::class,'contacto']);


// CRUD DE PRODUCTOS 7 RUTAS

route::get('/productos',[ProductoController::class,'index'])->name('productos.index');
route::get('/productos/create',[ProductoController::class,'create'])->name('productos.create');
route::post('/productos',[ProductoController::class,'store'])->name('productos.store');




// Route::get('/quienes somos', function () {
    // return'quienes somos';

    // return view('welcome');
// });

// Route::get('/contacto', function () {
    // return'contacto';

    // return view('welcome');
// });


