<?php

namespace App\Http\Controllers;

use App\Models\venta;
use App\Models\tipoventa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ventacontroller extends Controller
{
    public function index(){
        $ventas = venta::all();
        $ventas->load(['tipoventa']);

        return view('venta.index',compact('ventas'));
    }
    public function create(){
        $tipoventas= tipoventa::all();
        return view('venta.create',compact('tipoventas'));
    }
    public function store(request $request)
    {
        // dd($request);
        $venta = new venta();
        $venta->codiv = $request->input('codiv');
        $venta->fechaventa = $request->input('fechaventa');
        $venta->precioventa = $request->input('precioventa');
        $venta->coditv = $request->input('coditv');
        $venta->save();


        return redirect()->route('venta.index');
    }
    public function edit($idp){

        $venta = venta::findOrFail($idp);
        $tipoventas= tipoventa::all();

        return view('venta.edit',compact('venta','tipoventas'));
    }
    public function update(Request $request,$idp)
    {
        $venta = venta::findOrFail($idp);
        $venta->codiv = $request->input('codiv');
        $venta->fechaventa = $request->input('fechaventa');
        $venta->precioventa = $request->input('precioventa');
        $venta->coditv = $request->input('coditv');

        $venta->save();


        return redirect()->route('venta.index');
    }
    public function show($idp)
    {
        $venta = venta::findOrFail($idp);
        return view('venta.show', ['venta'=>$venta]);
    }
    public function destroy($idp)
    {
        $venta = venta::findOrFail($idp);
        $venta->delete();
        return redirect()->route('venta.index');
    }
}
