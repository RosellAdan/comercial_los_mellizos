<?php

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


/*Route::get('/',function (){
 //return "hola mundo";
    echo "<a href='contactos'>Contactos</a>";
    echo "<a href='contactos'>Contactos</a>";
    echo "<a href='contactos'>Contactos</a>";
});
*/
Route::get('/',function (){
    return view('home');
})->name('home');

Route::get('saludos/{nombre?}',function ($nombre = "Invitado"){
    $apellido = "<script> alert('hola te conosco')</script>";
    $mensaje= [
       /* "HOLA COMO ESTAS",

        "TODO BIEN...??" */
    ];
    return view('saludos',['nombre'=>$nombre,'apellido'=>$apellido,'mensaje'=>$mensaje]);
})->name('saludos')->where('nombre',"[A-Za-z]+");
/*
Route::get('tipopersonal/create','tipopersonalcontroller@create')->name('tipopersonal.create');
*/
