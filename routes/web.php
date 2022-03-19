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
Route::post('/contacto', [PageController::class,'storeMensaje']);

Route::get('/mensaje', [PageController::class,'mensaje'])->name('mensaje');



// CRUD DE PRODUCTOS 7 RUTAS

// Route::get('/productos',[ProductoController::class,'index'])->name('productos.index');
// Route::get('/productos/create',[ProductoController::class,'create'])->name('productos.create');
// Route::post('/productos',[ProductoController::class,'store'])->name('productos.store');
// Route::get('/productos/{producto}',[ProductoController::class,'show'])->name('productos.show');
// Route::get('/productos/{producto}/edit',[ProductoController::class,'edit'])->name('productos.edit');
// Route::patch('/productos/{producto}',[ProductoController::class,'update'])->name('productos.update');
// Route::delete('/productos/{producto}',[ProductoController::class,'destroy'])->name('productos.destroy');

// EN UNA SOLA LINEA TODAS LAS RUTAS DEL CRUD

Route::resource('productos',ProductoController::class);


// Route::get('/quienes somos', function () {
    // return'quienes somos';

    // return view('welcome');
// });

// Route::get('/contacto', function () {
    // return'contacto';

    // return view('welcome');
// });


