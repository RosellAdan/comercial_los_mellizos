<?php

namespace App\Http\Controllers;

use App\Models\personal;
use App\Models\producto;
use App\Models\tipoproducto;
use Illuminate\Http\Request;

class productocontroller extends Controller


{
    // public static $TIPO_PER = 2;
    public function index(){
        $productos = producto::all();
        $productos->load(['personal']);
        $productos->load(['tipoproducto']);
        return view('producto.index',compact('productos'));
    }
    public function create(){
        $personales= personal::all();
        $tipoproductos= tipoproducto::all();
        return view('producto.create',compact('personales','tipoproductos'));
    }
    public function store(request $request)
    {
        // dd($request);
        $producto = new producto();
       // $producto->codiprod = $request->input('codiprod');
        $producto->descripcion = $request->input('descripcion');
        $producto->cantidadstock = $request->input('cantidadstock');
        $producto->precio = $request->input('precio');
        $producto->ci = $request->input('ci');
        $producto->coditp = $request->input('coditp');

        $producto->save();


        return redirect()->route('producto.index');
    }
    public function edit($idp){

        $producto = producto::findOrFail($idp);
        $personales= personal::all();
        $tipoproductos= tipoproducto::all();
        return view('producto.edit',compact('producto','personales','tipoproductos'));
    }
    public function update(Request $request,$idp)
    {
        $producto = producto::findOrFail($idp);
        $producto->codiprod = $request->input('codiprod');
        $producto->descripcion = $request->input('descripcion');
        $producto->cantidadstock = $request->input('cantidadstock');
        $producto->precio = $request->input('precio');
        $producto->ci = $request->input('ci');
        $producto->coditp = $request->input('coditp');

        $producto->save();


        return redirect()->route('producto.index');
    }
    public function show($idp)
    {
        $producto = producto::findOrFail($idp);
        return view('producto.show', ['producto'=>$producto]);
    }
    public function destroy($idp)
    {
        $producto = producto::findOrFail($idp);
        $producto->delete();
        return redirect()->route('producto.index');
    }
}

