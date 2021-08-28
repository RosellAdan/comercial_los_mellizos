<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personalcontroller extends Controller
{
    public function index(){

        $personas = personal::all(); //mostrar tabla (from)

        return view('personal.index',compact('personas'));
    }
    public function create(){

        return view('personal.create');
    }
    public function store(request $request)
    {
        $personal = new personal();
        $personal->idp = $request->input('idp');
        $personal->descripcion = $request->input('descripcion');

        $personal->save();


        return redirect()->route('personal.index');
    }
    public function edit($idp){

        $personal = tipopersonal::findOrFail($idp);
        return view('personal.edit',compact('personal'));
    }
    public function update(Request $request,$idp)
    {
        $tipopersonal = tipopersonal::findOrFail($idp);
        $tipopersonal->idp = $request->input('idp');
        $tipopersonal->descripcion = $request->input('descripcion');

        $tipopersonal->save();


        return redirect()->route('tipopersonal.index');
    }
    public function show($idp)
    {
        $tipopersonal = tipopersonal::findOrFail($idp);
        return view('tipopersonal.show', ['tipopersonal'=>$tipopersonal]);
    }
    public function destroy($idp)
    {
        $tipopersonal = tipopersonal::findOrFail($idp);
        $tipopersonal->delete();
        return redirect()->route('tipopersonal.index');
    }
}
