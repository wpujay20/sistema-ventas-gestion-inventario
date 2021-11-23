<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ClienteLoginControler;

//Agregar controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\VentaController;
// lado cliente

use App\Http\Controllers\CatalogoProductosController;
use App\Http\Controllers\CarroComprasController;




Route::get('/', function () {
    return view('vistas.index');
});






//cliente
Route::resource('vistas/productos', CatalogoProductosController::class)->names('vistas.productos')->parameters(['productos' => 'producto']);
//login clientes
Route::resource('vistas/cliente', ClienteLoginControler::class)->names('vistas.cliente')->parameters(['vistas' => 'cliente']);


Auth::routes();

Route::post('/cart-add', [App\Http\Controllers\CarroComprasController::class,'add'])->name('cart.add');
Route::get('/cart-clear', [App\Http\Controllers\CarroComprasController::class,'clear'])->name('cart.clear');
Route::post('/cart-removeitem', [App\Http\Controllers\CarroComprasController::class,'removeitem'])->name('cart.removeitem');
Route::get('/Carrito', [App\Http\Controllers\CarroComprasController::class,'MostrarCarrito'])->name('Mostrar.Carrito');






Route::group(['middleware' => ['auth']], function(){



    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('blogs', blogController::class);

        // names y routes for the permisssions
    Route::resource('admin/categorias', CategoriaController::class)->names('admin.categorias')->parameters(['categorias' => 'categoria']);
    Route::resource('admin/proveedores', ProveedorController::class)->names('admin.proveedores')->parameters(['proveedores' => 'proveedor']);
    Route::resource('admin/productos', ProductoController::class)->names('admin.productos')->parameters(['productos' => 'producto']);
    Route::resource('admin/clientes', ClienteController::class)->names('admin.clientes')->parameters(['clientes' => 'cliente']);
    Route::resource('admin/ventas', VentaController::class)->names('admin.ventas')->parameters(['ventas' => 'venta']);
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');








});
