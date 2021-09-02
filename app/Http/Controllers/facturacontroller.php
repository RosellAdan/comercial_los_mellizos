<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\factura;
use App\Models\venta;
use Illuminate\Http\Request;

class facturacontroller extends Controller
{
    // public static $TIPO_PER = 2;
    public function index(){
        $facturas = factura::all();
        $facturas->load(['venta']);
       // $facturas->load(['cliente']);
        return view('factura.index',compact('facturas'));
    }
    public function create($codiv){
        $venta= venta::findOrFail($codiv);
       //$clientes= cliente::all();
        return view('factura.create',compact('venta'));
    }
    public function store(request $request)
    {
        // dd($request);
       // $codiv = $request->input('venta');
       // $venta = venta::findOrFail($codiv);
        $factura = new factura();
       // $factura->numerofactura = $request->input('numerofactura');
        $factura->detalle = $request->input('detalle');
        $factura->precio =$request->input('precio');
        $factura->fechafactura = now();
        $factura->codiv =$request->input('codiv');
       // $factura->cic = $request->input('cic');
        $factura->save();


        return redirect()->route('factura.index');
    }
    public function edit($idp){

        $factura = factura::findOrFail($idp);
        $ventas = venta::all();
       // $clientes= cliente::all();
        return view('factura.edit',compact('factura','ventas'));
    }
    public function update(Request $request,$idp)
    {
        $factura = factura::findOrFail($idp);
       // $factura->numerofactura = $request->input('numerofactura');
        $factura->detalle = $request->input('detalle');
        $factura->precio = $request->input('precio');
        $factura->fechafactura = $request->input('fechafactura');
        $factura->codiv = $request->input('codiv');
       // $factura->cic = $request->input('cic');
        $factura->save();


        return redirect()->route('factura.index');
    }
    public function show($idp)
    {
        $factura = factura::findOrFail($idp);
        return view('factura.show', ['factura'=>$factura]);
    }
    public function destroy($idp)
    {
        $factura = factura::findOrFail($idp);
        $factura->delete();
        return redirect()->route('factura.index');
    }
}

