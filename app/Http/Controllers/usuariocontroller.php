<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\personal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class usuariocontroller extends Controller
{
    public function index(){
        $usuarios = usuario::all();
        $usuarios->load(['personal']);

        return view('usuario.index',compact('usuarios'));
    }
    public function create(){
        $personales= personal::all();
        return view('usuario.create',compact('personales'));
    }
    public function store(request $request)
    {
        // dd($request);
        $usuario = new usuario();
        $usuario->idusuario = $request->input('idusuario');
        $usuario->contraseña = $request->input('contraseña');
        $usuario->ci = $request->input('ci');
        $usuario->save();


        return redirect()->route('usuario.index');
    }
    public function edit($idp){

        $usuario = usuario::findOrFail($idp);
        $personales= personal::all();

        return view('usuario.edit',compact('usuario','personales'));
    }
    public function update(Request $request,$idp)
    {
        $usuario = usuario::findOrFail($idp);
        $usuario->idusuario = $request->input('idusuario');
        $usuario->contraseña = $request->input('contraseña');
        $usuario->ci = $request->input('ci');

        $usuario->save();


        return redirect()->route('usuario.index');
    }
    public function show($idp)
    {
        $usuario = usuario::findOrFail($idp);
        return view('usuario.show', ['usuario'=>$usuario]);
    }
    public function destroy($idp)
    {
        $usuario = usuario::findOrFail($idp);
        $usuario->delete();
        return redirect()->route('usuario.index');
    }
}
