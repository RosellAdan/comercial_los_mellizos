<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\venta;
use App\Models\tipoventa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ventacontroller extends Controller
{
    public function index(){
        $ventas = venta::all();
        $ventas->load(['tipoventa']);
        $ventas->load(['cliente']);
        $ventas = venta::orderBy('codiv', 'asc')->get();

        return view('venta.index',compact('ventas'));
    }
    public function create(){
        $tipoventas= tipoventa::all();
        $clientes= cliente::all();
        return view('venta.create',compact('tipoventas','clientes'));
    }
    public function store(request $request)
    {
        // dd($request);
        $venta = new venta();
        $venta->fechaventa = now();
        $venta->precioventa = 0;
        $venta->coditv = $request->input('coditv');
        $venta->cic = $request->input('cic');
        $venta->save();


        return redirect()->route('venta.show',[$venta->codiv]);
    }

    public function edit($idp){

        $venta = venta::findOrFail($idp);
        $tipoventas= tipoventa::all();
        $clientes= cliente::all();

        return view('venta.edit',compact('venta','tipoventas','clientes'));
    }
    public function update(Request $request,$idp)
    {
        $venta = venta::findOrFail($idp);
        $venta->codiv = $request->input('codiv');
        $venta->fechaventa = $request->input('fechaventa');
        $venta->precioventa = $request->input('precioventa');
        $venta->coditv = $request->input('coditv');
        $venta->cic = $request->input('cic');

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
