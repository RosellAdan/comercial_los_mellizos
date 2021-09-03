<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\usuario;
use App\Models\personal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class usuariocontroller extends Controller
{
    public function index(){
        $users = user::all();
        $users->load(['personal']);
        $users = user::orderBy('id', 'asc')->get();

        return view('usuario.index',compact('users'));
    }
    public function create(){
        $personales= personal::all();
        return view('usuario.create',compact('personales'));
    }
    public function store(request $request)
    {
        // dd($request);
        $user = new user();
       // $user->id = $request->input('id');
        $user->name= $request->input('name');
        $user->email= $request->input('email');
        $user->password=  bcrypt($request->input('password'));
        $user->ci = $request->input('ci');
        $user->save();


        return redirect()->route('usuario.index');
    }
    public function edit($idp){

        $user = user::findOrFail($idp);
        $personales= personal::all();

        return view('usuario.edit',compact('user','personales'));
    }
    public function update(Request $request,$idp)
    {
        $user = user::findOrFail($idp);
        $user->id = $request->input('id');
        $user->name= $request->input('name');
        $user->email= $request->input('email');
        $user->password=  bcrypt($request->input('password'));
        $user->ci = $request->input('ci');
        $user->save();




        return redirect()->route('usuario.index');
    }
    public function show($idp)
    {
        $user = user::findOrFail($idp);
        return view('usuario.show', ['user'=>$user]);
    }
    public function destroy($idp)
    {
        $user = user::findOrFail($idp);
        $user->delete();
        return redirect()->route('usuario.index');
    }
}
