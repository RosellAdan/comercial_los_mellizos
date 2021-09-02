<?php

namespace App\Http\Controllers;

use App\Models\tipopersonal;
use Illuminate\Http\Request;

class tipopersonalcontroller extends Controller
{

   public function index(){

       $tipopersonas = tipopersonal::all(); //mostrar tabla (from)

       return view('tipopersonal.index',compact('tipopersonas'));
   }
   public function create(){

       return view('tipopersonal.create');
   }
    public function store(request $request)
    {
        $tipopersonal = new tipopersonal();
      //  $tipopersonal->idp = $request->input('idp');
        $tipopersonal->descripcion = $request->input('descripcion');

        $tipopersonal->save();


        return redirect()->route('tipopersonal.index');
    }
    public function edit($idp){

       $tipopersonal = tipopersonal::findOrFail($idp);
       return view('tipopersonal.edit',compact('tipopersonal'));
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
