<?php

namespace App\Http\Controllers;



use App\Models\tipoventa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class tipoventacontroller extends Controller
{
    public function index(){

        $tipoventas = tipoventa::all(); //mostrar tabla (from)

        return view('tipoventa.index',compact('tipoventas'));
}
    public function create(){

        return view('tipoventa.create');
    }
    public function store(request $request)
    {
        $tipoventa = new tipoventa();
        $tipoventa->coditv = $request->input('coditv');
        $tipoventa->tipopago = $request->input('tipopago');

        $tipoventa->save();


        return redirect()->route('tipoventa.index');
    }
    public function edit($idp){

        $tipoventa = tipoventa::findOrFail($idp);
        return view('tipoventa.edit',compact('tipoventa'));
    }
    public function update(Request $request,$idp)
    {
        $tipoventa = tipoventa::findOrFail($idp);
        $tipoventa->coditv = $request->input('coditv');
        $tipoventa->tipopago = $request->input('tipopago');

        $tipoventa->save();


        return redirect()->route('tipoventa.index');
    }
    public function show($idp)
    {
        $tipoventa = tipoventa::findOrFail($idp);
        return view('tipoventa.show', ['tipoventa'=>$tipoventa]);
    }
    public function destroy($idp)
    {
        $tipoventa = tipoventa::findOrFail($idp);
        $tipoventa->delete();
        return redirect()->route('tipoventa.index');
    }
}
