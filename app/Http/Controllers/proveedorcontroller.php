<?php

namespace App\Http\Controllers;

use App\Models\proveedor;
use Illuminate\Http\Request;

class proveedorcontroller extends Controller
{
    public function index(){

        $proveedores = proveedor::all(); //mostrar tabla (from)

        return view('proveedor.index',compact('proveedores'));
    }
    public function create(){

        return view('proveedor.create');
    }
    public function store(request $request)
    {
        $proveedor = new proveedor();
       // $proveedor->codip = $request->input('codip');
        $proveedor->ci = $request->input('ci');
        $proveedor->nombre = $request->input('nombre');
        $proveedor->apellido= $request->input('apellido');
        $proveedor->sexo = $request->input('sexo');
        $proveedor->direccion = $request->input('direccion');
        $proveedor->celular = $request->input('celular');
        $proveedor->save();


        return redirect()->route('proveedor.index');
    }
    public function edit($idp){

        $proveedor = proveedor::findOrFail($idp);
        return view('proveedor.edit',compact('proveedor'));
    }
    public function update(Request $request,$idp)
    {
        $proveedor = proveedor::findOrFail($idp);
        $proveedor->codip = $request->input('codip');
        $proveedor->ci = $request->input('ci');
        $proveedor->nombre = $request->input('nombre');
        $proveedor->apellido= $request->input('apellido');
        $proveedor->sexo = $request->input('sexo');
        $proveedor->direccion = $request->input('direccion');
        $proveedor->celular = $request->input('celular');
        $proveedor->save();


        return redirect()->route('proveedor.index');
    }
    public function show($idp)
    {
        $proveedor = proveedor::findOrFail($idp);
        return view('proveedor.show', ['proveedor'=>$proveedor]);
    }
    public function destroy($idp)
    {
        $proveedor = proveedor::findOrFail($idp);
        $proveedor->delete();
        return redirect()->route('proveedor.index');
    }
}
