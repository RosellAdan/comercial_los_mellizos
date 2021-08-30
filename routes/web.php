<?php

use App\Http\Controllers\clientecontroller;
use App\Http\Controllers\compracontroller;
use App\Http\Controllers\facturacontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\personalcontroller;
use App\Http\Controllers\productocontroller;
use App\Http\Controllers\proveedorcontroller;
use App\Http\Controllers\tipopersonalcontroller;
use App\Http\Controllers\tipoproductocontroller;
use App\Http\Controllers\tipoventacontroller;
use App\Http\Controllers\usuariocontroller;
use App\Http\Controllers\ventacontroller;
use App\Models\personal;
use App\Models\producto;
use App\Models\tipopersonal;
use Illuminate\Support\Facades\Auth;
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




Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::group(['prefix'=>'tipopersonal'], function (){
    Route::get('/', [tipopersonalcontroller::class,'index'])->name('tipopersonal.index');
    Route::get('/create', [tipopersonalcontroller::class,'create'])->name('tipopersonal.create');
    Route::post('/', [tipopersonalcontroller::class,'store'])->name('tipopersonal.store');
   // Route::get('/{idp}', [tipopersonalcontroller::class,'show'])->name('tipopersonal.show');
    Route::put('/{idp}', [tipopersonalcontroller::class,'update'])->name('tipopersonal.update');
    Route::get('/{idp}/edit', [tipopersonalcontroller::class,'edit'])->name('tipopersonal.edit');
    Route::get('/{idp}/destroy', [tipopersonalcontroller::class,'destroy'])->name('tipopersonal.destroy');


});
Route::group(['prefix'=>'personal'], function (){
    Route::get('/', [personalcontroller::class,'index'])->name('personal.index');
    Route::get('/create', [personalcontroller::class,'create'])->name('personal.create');
    Route::post('/', [personalcontroller::class,'store'])->name('personal.store');
    // Route::get('/{ci}', [personalcontroller::class,'show'])->name('personal.show');
    Route::put('/{ci}', [personalcontroller::class,'update'])->name('personal.update');
    Route::get('/{ci}/edit', [personalcontroller::class,'edit'])->name('personal.edit');
    Route::get('/{ci}/destroy', [personalcontroller::class,'destroy'])->name('personal.destroy');
});
    Route::group(['prefix'=>'proveedor'], function (){
        Route::get('/', [proveedorcontroller::class,'index'])->name('proveedor.index');
        Route::get('/create', [proveedorcontroller::class,'create'])->name('proveedor.create');
        Route::post('/', [proveedorcontroller::class,'store'])->name('proveedor.store');
        // Route::get('/{codip}', [proveedorcontroller::class,'show'])->name('proveedor.show');
        Route::put('/{codip}', [proveedorcontroller::class,'update'])->name('proveedor.update');
        Route::get('/{codip}/edit', [proveedorcontroller::class,'edit'])->name('proveedor.edit');
        Route::get('/{codip}/destroy', [proveedorcontroller::class,'destroy'])->name('proveedor.destroy');
});


Route::group(['prefix'=>'tipoproducto'], function (){
    Route::get('/', [tipoproductocontroller::class,'index'])->name('tipoproducto.index');
    Route::get('/create', [tipoproductocontroller::class,'create'])->name('tipoproducto.create');
    Route::post('/', [tipoproductocontroller::class,'store'])->name('tipoproducto.store');
    // Route::get('/{coditp}', [tipopersonalcontroller::class,'show'])->name('tipoproducto.show');
    Route::put('/{coditp}', [tipoproductocontroller::class,'update'])->name('tipoproducto.update');
    Route::get('/{coditp}/edit', [tipoproductocontroller::class,'edit'])->name('tipoproducto.edit');
    Route::get('/{coditp}/destroy', [tipoproductocontroller::class,'destroy'])->name('tipoproducto.destroy');

});
Route::group(['prefix'=>'compra'], function (){
    Route::get('/', [compracontroller::class,'index'])->name('compra.index');
    Route::get('/create', [compracontroller::class,'create'])->name('compra.create');
    Route::post('/', [compracontroller::class,'store'])->name('compra.store');
    // Route::get('/{codicom}', [compracontroller::class,'show'])->name('compra.show');
    Route::put('/{codicom}', [compracontroller::class,'update'])->name('compra.update');
    Route::get('/{codicom}/edit', [compracontroller::class,'edit'])->name('compra.edit');
    Route::get('/{codicom}/destroy', [compracontroller::class,'destroy'])->name('compra.destroy');
});

Route::group(['prefix'=>'usuario'], function (){
    Route::get('/', [usuariocontroller::class,'index'])->name('usuario.index');
    Route::get('/create', [usuariocontroller::class,'create'])->name('usuario.create');
    Route::post('/', [usuariocontroller::class,'store'])->name('usuario.store');
    // Route::get('/{idusuario}', [usuariocontroller::class,'show'])->name('usuario.show');
    Route::put('/{idusuario}', [usuariocontroller::class,'update'])->name('usuario.update');
    Route::get('/{idusuario}/edit', [usuariocontroller::class,'edit'])->name('usuario.edit');
    Route::get('/{idusuario}/destroy', [usuariocontroller::class,'destroy'])->name('usuario.destroy');
});


Route::group(['prefix'=>'tipoventa'], function (){
    Route::get('/', [tipoventacontroller::class,'index'])->name('tipoventa.index');
    Route::get('/create', [tipoventacontroller::class,'create'])->name('tipoventa.create');
    Route::post('/', [tipoventacontroller::class,'store'])->name('tipoventa.store');
    // Route::get('/{coditv}', [tipoventacontroller::class,'show'])->name('tipoventa.show');
    Route::put('/{coditv}', [tipoventacontroller::class,'update'])->name('tipoventa.update');
    Route::get('/{coditv}/edit', [tipoventacontroller::class,'edit'])->name('tipoventa.edit');
    Route::get('/{coditv}/destroy', [tipoventacontroller::class,'destroy'])->name('tipoventa.destroy');


});

Route::group(['prefix'=>'producto'], function (){
    Route::get('/', [productocontroller::class,'index'])->name('producto.index');
    Route::get('/create', [productocontroller::class,'create'])->name('producto.create');
    Route::post('/', [productocontroller::class,'store'])->name('producto.store');
    // Route::get('/{codiprod}', [productocontroller::class,'show'])->name('producto.show');
    Route::put('/{codiprod}', [productocontroller::class,'update'])->name('producto.update');
    Route::get('/{codiprod}/edit', [productocontroller::class,'edit'])->name('producto.edit');
    Route::get('/{codiprod}/destroy', [productocontroller::class,'destroy'])->name('producto.destroy');


});
Route::group(['prefix'=>'cliente'], function (){
    Route::get('/', [clientecontroller::class,'index'])->name('cliente.index');
    Route::get('/create', [clientecontroller::class,'create'])->name('cliente.create');
    Route::post('/', [clientecontroller::class,'store'])->name('cliente.store');
    // Route::get('/{cic}', [clientecontroller::class,'show'])->name('cliente.show');
    Route::put('/{cic}', [clientecontroller::class,'update'])->name('cliente.update');
    Route::get('/{cic}/edit', [clientecontroller::class,'edit'])->name('cliente.edit');
    Route::get('/{cic}/destroy', [clientecontroller::class,'destroy'])->name('cliente.destroy');


});

Route::group(['prefix'=>'venta'], function (){
    Route::get('/', [ventacontroller::class,'index'])->name('venta.index');
    Route::get('/create', [ventacontroller::class,'create'])->name('venta.create');
    Route::post('/', [ventacontroller::class,'store'])->name('venta.store');
    // Route::get('/{codiv}', [ventacontroller::class,'show'])->name('personal.show');
    Route::put('/{codiv}', [ventacontroller::class,'update'])->name('venta.update');
    Route::get('/{codiv}/edit', [ventacontroller::class,'edit'])->name('venta.edit');
    Route::get('/{codiv}/destroy', [ventacontroller::class,'destroy'])->name('venta.destroy');
});
Route::group(['prefix'=>'factura'], function (){
    Route::get('/', [facturacontroller::class,'index'])->name('factura.index');
    Route::get('/create', [facturacontroller::class,'create'])->name('factura.create');
    Route::post('/', [facturacontroller::class,'store'])->name('factura.store');
    // Route::get('/{numerofactura}', [facturacontroller::class,'show'])->name('factura.show');
    Route::put('/{numerofactura}', [facturacontroller::class,'update'])->name('factura.update');
    Route::get('/{numerofactura}/edit', [facturacontroller::class,'edit'])->name('factura.edit');
    Route::get('/{numerofactura}/destroy', [facturacontroller::class,'destroy'])->name('factura.destroy');
});




Route::get('/prueba',function (){
    $tipopersonal = new tipopersonal();
    $tipopersonal->idp='12336';
    $tipopersonal->descripcion='hola como estas';
    $tipopersonal->save();

    return $tipopersonal;
} );
Route::get('/prueb',function (){
    $personal = new personal();
    $personal->ci='12336';
    $personal->nombre='hola como estas';
    $personal->apellido='hola  estas';
    $personal->direccion='hola';
    $personal->celular='468464';
    $personal->sexo='m';
    $personal->idp='1111';
    $personal->save();

    return $personal;
} );
Route::get('/prue',function (){
    $producto = new producto();
    $producto->codiprod='12336';
    $producto->descripcion='hola como estas';
    $producto->cantidadstock ='12336';
    $producto->precio='12336';
    $producto->ci='11111111';
    $producto->coditp='44';
    $producto->save();

    return $producto;
} );
