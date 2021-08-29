<?php

namespace App\Http\Controllers;


use App\Models\tipoproducto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class tipoproductocontroller extends Controller
{
    public function index(){

        $tipoproductos = tipoproducto::all(); //mostrar tabla (from)

        return view('tipoproducto.index',compact('tipoproductos'));
    }

    public function create(){

        return view('tipoproducto.create');
    }

    public function store(request $request)
    {
        $tipoproducto = new tipoproducto();
        $tipoproducto->coditp = $request->input('coditp');
        $tipoproducto->descripcion = $request->input('descripcion');

        $tipoproducto->save();


        return redirect()->route('tipoproducto.index');
    }
    public function edit($idp){

        $tipoproducto = tipoproducto::findOrFail($idp);
        return view('tipoproducto.edit',compact('tipoproducto'));
    }
    public function update(Request $request,$idp)
    {
        $tipoproducto = tipoproducto::findOrFail($idp);
        $tipoproducto->coditp = $request->input('coditp');
        $tipoproducto->descripcion = $request->input('descripcion');

        $tipoproducto->save();


        return redirect()->route('tipoproducto.index');
    }
    public function show($idp)
    {
        $tipoprodcuto = tipoproducto::findOrFail($idp);
        return view('tipoproducto.show', ['tipoproducto'=>$tipoprodcuto]);
    }
    public function destroy($idp)
    {
        $tipoproducto = tipoproducto::findOrFail($idp);
        $tipoproducto->delete();
        return redirect()->route('tipoproducto.index');
    }
}
