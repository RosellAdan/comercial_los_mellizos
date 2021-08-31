<?php

namespace App\Http\Controllers;

use App\Models\detalleventa;
use App\Models\personal;
use App\Models\proveedor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class detalleventacontroller extends Controller
{
    public function index(){
        $detallesventas = detalleventa::all();
        $detallesventas->load(['producto']);
        $detallesventas->load(['venta']);
        return view('detalleventa.index',compact('detallesventas'));
    }
    public function create(){
        $productos= producto::all();
        $ventas= venta::all();
        return view('detalleventa.create',compact('productos','ventas'));
    }
    public function store(request $request)
    {
        // dd($request);
        $detalleventa = new detalleventa();
        $detalleventa->cantidaventa = $request->input('cantidaventa');
        $detalleventa->fechacompra = $request->input('fechacompra');
        $detalleventa->totalcompra = $request->input('totalcompra');
        $detalleventa->codiprod = $request->input('codiprod');
        $detalleventa->codiv = $request->input('codiv');

        $detalleventa->save();


        return redirect()->route('detalleventa.index');
    }
    public function edit($idp){

        $detalleventa = detalleventa::findOrFail($idp);
        $productos= personal::all();
        $ventas= proveedor::all();
        return view('detalleventa.edit',compact('detalleventa','productos','ventas'));
    }
    public function update(Request $request,$idp)
    {
        $detalleventa = detalleventa::findOrFail($idp);
        $detalleventa->cantidadventa = $request->input('cantidaventa');
        $detalleventa->precioventa = $request->input('precioventa');
        $detalleventa->descripcionventa = $request->input('descripcionventa');
        $detalleventa->codiprod = $request->input('codiprod');
        $detalleventa->codiv = $request->input('codiv');

        $detalleventa->save();


        return redirect()->route('detalleventa.index');
    }
    public function show($idp)
    {
        $detalleventa = detalleventa::findOrFail($idp);
        return view('detalleventa.show', ['detalleventa'=>$detalleventa]);
    }
    public function destroy($idp)
    {
        $detalleventa = detalleventa::findOrFail($idp);
        $detalleventa->delete();
        return redirect()->route('detalleventa.index');
    }
}
