<?php

use App\Http\Controllers\AbastecimientosController;
use App\Http\Controllers\carrito_comprasController;
use App\Http\Controllers\comprasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productosController;
use App\Http\Controllers\mensajesController;
use App\Http\Controllers\pagosController;
use App\Http\Controllers\pqrsController;
use App\Http\Controllers\rolsController;
use App\Http\Controllers\usersController;


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
    return view('auth.login');
});



// Rutas de autenticación
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


 //users
 Route::get('users/create', [usersController::class, 'create'])->name('users.create');
 Route::post('users', [usersController::class, 'store'])->name('users.store');
 Route::get('users', [usersController::class, 'index'])->name('users.index');
 
 //editar 
 Route::get('users/{user}/edit', [usersController::class, 'edit'])->name('users.edit');
 Route::put('users/{user}', [usersController::class, 'update'])->name('users.update');
//eliminar
Route::delete('users/{users}',[usersController::class, 'destroy'])->name('users.destroy');

///////

 //productos
Route::get('productos/create', [productosController::class, 'create'])->name('productos.create');

//Route::middleware(['auth'])->group(function () {
 //   Route::get('productos/create', [ProductosController::class, 'create'])->name('productos.create');

//});


Route::post('productos', [productosController::class, 'store'])->name('productos.store');
Route::get('productos', [productosController::class, 'index'])->name('productos.index');
Route::get('productos/{producto}', [productosController::class, 'show'])->name('productos.show');


//editar
Route::get('productos/{producto}/edit', [productosController::class, 'edit'])->name('productos.edit');
Route::put('productos/{producto}', [productosController::class, 'update'])->name('productos.update');
//eliminar
Route::delete('productos/{producto}',[productosController::class, 'destroy'])->name('productos.destroy');

////

//mensajes
Route::get('mensajes/create', [mensajesController::class, 'create'])->name('mensajes.create');
Route::post('mensajes', [mensajesController::class, 'store'])->name('mensajes.store');
Route::get('mensajes', [mensajesController::class, 'index'])->name('mensajes.index');

//editar
Route::get('mensajes/{mensaje}/edit', [mensajesController::class, 'edit'])->name('mensajes.edit');
Route::put('mensajes/{mensaje}', [mensajesController::class, 'update'])->name('mensajes.update');
//eliminar
Route::delete('mensajes/{mensaje}',[mensajesController::class, 'destroy'])->name('mensajes.destroy');

///////

//abastecimientos
Route::get('abastecimientos/create', [AbastecimientosController::class, 'create'])->name('abastecimientos.create');
Route::post('abastecimientos', [AbastecimientosController::class, 'store'])->name('abastecimientos.store');
Route::get('abastecimientos', [AbastecimientosController::class, 'index'])->name('abastecimientos.index');

//editar
Route::get('abastecimientos/{abastecimiento}/edit', [AbastecimientosController::class, 'edit'])->name('abastecimientos.edit');
Route::put('abastecimientos/{abastecimiento}', [AbastecimientosController::class, 'update'])->name('abastecimientos.update');
//eliminar
Route::delete('abastecimientos/{abastecimiento}',[AbastecimientosController::class, 'destroy'])->name('abastecimientos.destroy');

///
//pagos
Route::get('pagos/create', [pagosController::class, 'create'])->name('pagos.create');
Route::post('pagos', [pagosController::class, 'store'])->name('pagos.store');
Route::get('pagos', [pagosController::class, 'index'])->name('pagos.index');

//editar
Route::get('pagos/{pago}/edit', [pagosController::class, 'edit'])->name('pagos.edit');
Route::put('pagos/{pago}', [pagosController::class, 'update'])->name('pagos.update');
//eliminar
Route::delete('pagos/{pago}',[pagosController::class, 'destroy'])->name('pagos.destroy');



//compras
Route::get('compras/create', [comprasController::class, 'create'])->name('compras.create');
Route::post('compras', [comprasController::class, 'store'])->name('compras.store');
Route::get('compras', [comprasController::class, 'index'])->name('compras.index');

//editar
Route::get('compras/{compra}/edit', [comprasController::class, 'edit'])->name('compras.edit');
Route::put('compras/{compra}', [comprasController::class, 'update'])->name('compras.update');
//eliminar
Route::delete('compras/{compra}',[comprasController::class, 'destroy'])->name('compras.destroy');




//rols
Route::get('rols/create', [rolsController::class, 'create'])->name('rols.create');
Route::post('rols', [rolsController::class, 'store'])->name('rols.store');
Route::get('rols', [rolsController::class, 'index'])->name('rols.index');

//editar
Route::get('rols/{rol}/edit', [rolsController::class, 'edit'])->name('rols.edit');
Route::put('rols/{rol}', [rolsController::class, 'update'])->name('rols.update');
//eliminar
Route::delete('rols/{rol}',[rolsController::class, 'destroy'])->name('rols.destroy');

//pqr
Route::get('pqrs/create', [pqrsController::class, 'create'])->name('pqrs.create');
Route::post('pqrs', [pqrsController::class, 'store'])->name('pqrs.store');
Route::get('pqr', [pqrsController::class, 'index'])->name('pqrs.index');

//editar
Route::get('pqrs/{id}/edit', [pqrsController::class, 'edit'])->name('pqrs.edit');
Route::put('pqrs/{pqr}', [pqrsController::class, 'update'])->name('pqrs.update');


//eliminar
Route::delete('pqrs/{pqr}',[pqrsController::class, 'destroy'])->name('pqrs.destroy');


//carrito de compras
Route::get('cars/create', [carrito_comprasController::class, 'create'])->name('cars.create');
Route::post('cars', [carrito_comprasController::class, 'store'])->name('cars.store');
Route::get('cars', [carrito_comprasController::class, 'index'])->name('cars.index');

//editar
Route::get('cars/{car}/edit', [carrito_comprasController::class, 'edit'])->name('cars.edit');
Route::put('cars/{car}', [carrito_comprasController::class, 'update'])->name('cars.update');
//eliminar
Route::delete('cars/{car}',[carrito_comprasController::class, 'destroy'])->name('cars.destroy');

//rutas para la interfas de la aplicacion

/*Route::middleware(['auth'])->group(function () {
Route::get('index',[ productosController::class ,'catalogo'])->name('index');
});*/
Route::get('index',[ productosController::class ,'catalogo'])->name('index');

Route::get('inorganico',[ productosController::class ,'inorganico'])->name('inorganico');


/* Route::get('index', function () {
    return view('index');
})->name('index'); */

Route::get('registro', function () {
    return view('registro');
});
Route::get('contact', function () {
    return view('contact');
})->name('contact');

 Route::get('organico', function () {
    return view('organico');
})->name('organico');

/*Route::get('inorganico', function () {
    return view('inorganico');
})->name('inorganico');*/


Route::get('cart', function () {
    return view('cart');
})->name('cart');

Route::get('pqrs', function () {
    return view('pqrs');
})->name('pqrs');

Route::get('politicas', function () {
    return view('politicas');
})->name('politicas');

Route::get('terminos', function () {
    return view('terminos');
})->name('terminos');

Route::get('datospersonales', function () {
    return view('datospersonales');
})->name('datospersonales');

Route::get('nosotros', function () {
    return view('nosotros');
})->name('nosotros');
 
Route::get('ayuda', function () {
    return view('ayuda');
})->name('ayuda');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
