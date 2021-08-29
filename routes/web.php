<?php

use App\Http\Controllers\compracontroller;
use App\Http\Controllers\personalcontroller;
use App\Http\Controllers\proveedorcontroller;
use App\Http\Controllers\tipopersonalcontroller;
use App\Http\Controllers\tipoproductocontroller;
use App\Models\personal;
use App\Models\tipopersonal;
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




Route::get('/Home',[\App\Http\Controllers\HomeController::class, 'index'])->name('home');
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
