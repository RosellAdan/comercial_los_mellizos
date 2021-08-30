<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class clientecontroller extends Controller
{
    public function index(){

        $clientes = cliente::all(); //mostrar tabla (from)

        return view('cliente.index',compact('clientes'));
    }
    public function create(){

        return view('cliente.create');
    }
    public function store(request $request)
    {
        $cliente = new cliente();
        $cliente->cic = $request->input('cic');
        $cliente->nombre = $request->input('nombre');
        $cliente->apellido = $request->input('apellido');
        $cliente->direccion = $request->input('direccion');
        $cliente->celular = $request->input('celular');
        $cliente->sexo = $request->input('sexo');

        $cliente->save();


        return redirect()->route('cliente.index');
    }
    public function edit($idp){

        $cliente = cliente::findOrFail($idp);
        return view('cliente.edit',compact('cliente'));
    }
    public function update(Request $request,$idp)
    {
        $cliente = cliente::findOrFail($idp);
        $cliente->cic = $request->input('cic');
        $cliente->nombre = $request->input('nombre');
        $cliente->apellido = $request->input('apellido');
        $cliente->direccion = $request->input('direccion');
        $cliente->celular = $request->input('celular');
        $cliente->sexo = $request->input('sexo');


        $cliente->save();


        return redirect()->route('cliente.index');
    }
    public function show($idp)
    {
        $cliente = cliente::findOrFail($idp);
        return view('cliente.show', ['cliente'=>$cliente]);
    }
    public function destroy($idp)
    {
        $cliente = cliente::findOrFail($idp);
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
