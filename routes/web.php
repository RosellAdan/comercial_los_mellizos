<?php

use App\Http\Controllers\tipopersonalcontroller;
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
    // Route::get('/{idp}', [personalcontroller::class,'show'])->name('personal.show');
    Route::put('/{idp}', [personalcontroller::class,'update'])->name('personal.update');
    Route::get('/{idp}/edit', [personalcontroller::class,'edit'])->name('personal.edit');
    Route::get('/{idp}/destroy', [personalcontroller::class,'destroy'])->name('personal.destroy');


});
Route::get('/prueva',function (){
    $tipopersonal = new tipopersonal();
    $tipopersonal->idp='12336';
    $tipopersonal->descripcion='hola como estas';
    $tipopersonal->save();

    return $tipopersonal;
} );
