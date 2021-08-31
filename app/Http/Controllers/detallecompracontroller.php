<?php

namespace App\Http\Controllers;

use App\Models\compra;
use App\Models\detallecompra;
use App\Models\producto;
use App\Models\proveedor;
use Illuminate\Http\Request;

class detallecompracontroller extends Controller

{
    // public static $TIPO_PER = 2;

    public function create($codicom){
        $productos = producto::all();
//        return view('venta.detalle.create', ['productos'=>$productos, 'cod_venta'=>$cod_venta]);
        return view('compra.detallecompra.create', compact('productos', 'codicom'));
    }


        public function store(Request $request, $codicom){
        $codiprod = $request->input('producto');
        $producto = producto::findOrFail($codiprod);
        $detallecompra = new detallecompra();
        $detallecompra->codicom = $codicom;
        $detallecompra->codiprod = $codiprod;
        $detallecompra->preciocompra = $producto->precio;
        $detallecompra->cantidadcompra = $request->input('cantidadcompra');
        $detallecompra->descripcion = $request->input('descripcion');

        $detallecompra->save();

            $compra = compra::findOrFail($codicom);
            $compra->totalcompra = $compra->totalcompra + ($detallecompra->cantidadcompra*$detallecompra->preciocompra);
            $compra->save();

            return redirect()->route('compra.show', [$codicom]);


    }


    public function destroy($id){
        $detallecompra = detallecompra::findOrFail($id);
        $detallecompra->delete();

        $compra = compra::findOrFail($detallecompra->codicom);
        $compra->totalcompra = $compra->totalcompra - ($detallecompra->cantidadcompra * $detallecompra->preciocompra);
        $compra->save();

        return redirect()->route('compra.show', [$compra->codicom]);
    }
}
