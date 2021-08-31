<?php

namespace App\Http\Controllers;

use App\Models\compra;
use App\Models\personal;
use App\Models\proveedor;
use Illuminate\Http\Request;

class compracontroller extends Controller
{
    // public static $TIPO_PER = 2;
    public function index(){
        $compras = compra::all();
        $compras->load(['proveedor']);
        $compras->load(['personal']);
        return view('compra.index',compact('compras'));
    }
    public function create(){
        $proveedores= proveedor::all();
        $personales= personal::all();
        return view('compra.create',compact('proveedores','personales'));
    }
    public function store(request $request)
    {
        // dd($request);
        $compra = new compra();

        $compra->fechacompra = now();
        $compra->totalcompra = 0;
        $compra->codip = $request->input('codip');
        $compra->ci = $request->input('ci');

        $compra->save();


        return redirect()->route('compra.show',[$compra->codicom]);
    }
    public function edit($idp){

        $compra = compra::findOrFail($idp);
        $personales= personal::all();
        $proveedores= proveedor::all();
        return view('compra.edit',compact('compra','proveedores','personales'));
    }
    public function update(Request $request,$idp)
    {
        $compra = compra::findOrFail($idp);
        $compra->codicom = $request->input('codicom');
        $compra->fechacompra = $request->input('fechacompra');
        $compra->totalcompra = $request->input('totalcompra');
        $compra->codip = $request->input('codip');
        $compra->ci = $request->input('ci');

        $compra->save();


        return redirect()->route('compra.index');
    }
    public function show($idp)
    {
        $compra = compra::findOrFail($idp);
        $compra->load(['detallecompra']);
        return view('compra.show',compact('compra'));
    }
    public function destroy($idp)
    {
        $compra = compra::findOrFail($idp);
        $compra->delete();
        return redirect()->route('compra.index');
    }
}
