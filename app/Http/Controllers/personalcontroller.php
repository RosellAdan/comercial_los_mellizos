<?php

namespace App\Http\Controllers;
use App\Models\personal;
use App\Models\tipopersonal;
use Illuminate\Http\Request;


class personalcontroller extends Controller
{
   // public static $TIPO_PER = 2;
    public function index(){
        $personas = Personal::all();
        $personas->load(['tipopersonal']);

       return view('personal.index',compact('personas'));
    }
    public function create(){
        $tipopersonales= tipopersonal::all();
        return view('personal.create',compact('tipopersonales'));
    }
    public function store(request $request)
    {
       // dd($request);
        $personal = new personal();
        $personal->ci = $request->input('ci');
        $personal->nombre = $request->input('nombre');
        $personal->apellido = $request->input('apellido');
        $personal->direccion = $request->input('direccion');
        $personal->celular = $request->input('celular');
        $personal->sexo = $request->input('sexo');
        $personal->idp = $request->input('idp');
        $personal->save();


        return redirect()->route('personal.index');
    }
    public function edit($idp){

        $personal = personal::findOrFail($idp);
        $tipopersonales= tipopersonal::all();

        return view('personal.edit',compact('personal','tipopersonales'));
    }
    public function update(Request $request,$idp)
    {
        $personal = personal::findOrFail($idp);
        $personal->ci = $request->input('ci');
        $personal->nombre = $request->input('nombre');
        $personal->apellido = $request->input('apellido');
        $personal->direccion = $request->input('direccion');
        $personal->celular = $request->input('celular');
        $personal->sexo = $request->input('sexo');
        $personal->idp = $request->input('idp');

        $personal->save();


        return redirect()->route('personal.index');
    }
    public function show($idp)
    {
        $personal = personal::findOrFail($idp);
        return view('personal.show', ['personal'=>$personal]);
    }
    public function destroy($idp)
    {
        $personal = personal::findOrFail($idp);
        $personal->delete();
        return redirect()->route('personal.index');
    }
}
